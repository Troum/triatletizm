$().ready(function () {
    let token = $('meta[name="csrf-token"]').attr('content'),
        post = {
            'title': $('#newTitle'),
            'cover': $('#newPhoto'),
            'filename': $('#newPhotoFilename'),
            'short': $('#newShortDescription'),
            'full':  $('#newFullDescription'),
            'save': $('#saveNew')
        },
        program = {
            'program': $('#programName'),
            'price': $('#programPrice'),
            'short': $('#programShortDescription'),
            'full': $('#programFullDescription'),
            'save': $('#saveProgram')
        },
        train = {
            'train': $('#trainName'),
            'price': $('#trainPrice'),
            'description': $('#trainDescription'),
            'photos': $('#trainPhotos'),
            'filenames': $('#trainPhotosFilename'),
            'save': $('#saveTrain')
        },
        feedback = {
            'name': $('#feedbackName'),
            'cover': $('#feedbackPhoto'),
            'feedback': $('#feedbackText'),
            'photos': $('#feedbackPhotos'),
            'filename': $('#feedbackPhotoFilename'),
            'filenames': $('#feedbackPhotosFilename'),
            'save': $('#saveFeedback')
        },
        photos = {
            'photos': $('#galleryPhotos'),
            'filenames': $('#galleryPhotosFilename'),
            'save': $('#saveGallery')
        },
        postFD = new FormData(),
        programFD = new FormData(),
        trainFD = new FormData(),
        feedbackFD = new FormData(),
        photosFD = new FormData();

    function filename(length, filename, file) {
        if(length === 1) {
            $(filename).val($(file)[0].files[0].name);
        }
        if(length > 1 && length <= 4) {
            $(filename).val('будет загружено ' + length + ' файла');
        }
        if(length >= 5) {
            $(filename).val('будет загружено ' + length + ' файлов');
        }
    }

    function clearAll(data){
        $(data).find('input').each(function () {
            $(this).val('');
        });
    }

    post.cover.on('change', function () {
       post.filename.val($(this)[0].files[0].name);
       postFD.append('cover', $(this).prop('files')[0]);
    });

    feedback.cover.on('change', function () {
        feedback.filename.val($(this)[0].files[0].name);
        feedbackFD.append('cover', $(this).prop('files')[0]);
    });

    train.photos.on('change', function () {
        let length = $(this)[0].files.length;
        for (let i = 0; i <= length; i++) {
            trainFD.append('photos[]', $(this).prop('files')[i]);
        }
        filename(length, train.filenames, $(this));
    });

    feedback.photos.on('change', function () {
        let length = $(this)[0].files.length;
        for (let i = 0; i <= length; i++) {
            feedbackFD.append('photos[]', $(this).prop('files')[i]);
        }
        filename(length, feedback.filenames, $(this));
    });

    photos.photos.on('change', function () {
        let length = $(this)[0].files.length;
        for (let i = 0; i <= length; i++) {
            photosFD.append('photos[]', $(this).prop('files')[i]);
        }
        filename(length, photos.filenames, $(this));
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': token
        }
    });
    $.ajax({
        url: '/home/add-post',
        type: 'POST',
        data: postFD,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'JSON',
        success: function (response) {

        },
        error: function(error) {
            for(let err in error.responseJSON.errors ) {
                toastr.error(error.responseJSON.errors[err][0]);
            }
        }
    });


});