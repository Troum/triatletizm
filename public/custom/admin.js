$().ready(function () {
    let token = $('meta[name="csrf-token"]').attr('content'),
        progressBar = $('#myProgress'),
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
            'instagram': $('#feedbackInstagram'),
            'facebook': $('#feedbackFacebook'),
            'vk': $('#feedbackVK'),
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
    progressBar.hide();
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


    post.save.on('click', function () {
        progressBar.show();
        postFD.append('title', post.title.val());
        postFD.append('short', tinymce.get(post.short.attr('name')).getContent());
        postFD.append('full', tinymce.get(post.full.attr('name')).getContent());

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': token
            }
        });
        $.ajax({
            xhr: function()
            {
                let xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt){
                    if (evt.lengthComputable) {
                        let percentComplete = evt.loaded / evt.total;
                        progressBar.find('#myBar').attr('style','width:' + percentComplete*100 + '%');
                    }
                }, false);
                return xhr;
            },
            url: '/home/add-new',
            type: 'POST',
            data: postFD,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'JSON',
            success: function (response) {
                if(response.success) {
                    clearAll('#new');
                    tinymce.get(post.short.attr('name')).setContent('');
                    tinymce.get(post.full.attr('name')).setContent('');
                    toastr.success(response.success);
                    progressBar.hide();
                }
                if(response.error) {
                    toastr.error(response.error);
                }

            },
            error: function(error) {
                for(let err in error.responseJSON.errors ) {
                    toastr.error(error.responseJSON.errors[err][0]);
                }
            }
        });
    });

    program.save.on('click', function () {
        programFD.append('program', program.program.val());
        programFD.append('price', program.price.val());
        programFD.append('short', tinymce.get(program.short.attr('name')).getContent());
        programFD.append('full', tinymce.get(program.full.attr('name')).getContent());
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': token
            }
        });
        $.ajax({
            url: '/home/add-program',
            type: 'POST',
            data: programFD,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'JSON',
            success: function (response) {
                clearAll('#programs');
                tinymce.get(program.short.attr('name')).setContent('');
                tinymce.get(program.full.attr('name')).setContent('');
                toastr.success(response.success);
            },
            error: function(error) {
                for(let err in error.responseJSON.errors ) {
                    toastr.error(error.responseJSON.errors[err][0]);
                }
            }
        });
    });

    train.save.on('click', function () {
        progressBar.show();
        trainFD.append('train', train.train.val());
        trainFD.append('price', train.price.val());
        trainFD.append('description', tinymce.get(train.description.attr('name')).getContent());

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': token
            }
        });
        $.ajax({
            xhr: function()
            {
                let xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt){
                    if (evt.lengthComputable) {
                        let percentComplete = evt.loaded / evt.total;
                        progressBar.find('#myBar').attr('style','width:' + percentComplete*100 + '%');
                    }
                }, false);
                return xhr;
            },
            url: '/home/add-train',
            type: 'POST',
            data: trainFD,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'JSON',
            success: function (response) {
                clearAll('#trains');
                tinymce.get(train.description.attr('name')).setContent('');
                toastr.success(response.success);
                trainFD.delete('photos[]');
                progressBar.hide();
            },
            error: function(error) {
                for(let err in error.responseJSON.errors ) {
                    toastr.error(error.responseJSON.errors[err][0]);
                }
            }
        });
    });

    feedback.save.on('click', function () {
        progressBar.show();
        feedbackFD.append('name', feedback.name.val());
        if(feedback.instagram.val() !== '') {
            feedbackFD.append('instagram', feedback.instagram.val());
        }
        if(feedback.facebook.val() !== '') {
            feedbackFD.append('facebook', feedback.facebook.val());
        }
        if(feedback.vk.val() !== '') {
            feedbackFD.append('vk', feedback.vk.val());
        }
        feedbackFD.append('feedback', tinymce.get(feedback.feedback.attr('name')).getContent());

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': token
            }
        });
        $.ajax({
            xhr: function()
            {
                let xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt){
                    if (evt.lengthComputable) {
                        let percentComplete = evt.loaded / evt.total;
                        progressBar.find('#myBar').attr('style','width:' + percentComplete*100 + '%');
                    }
                }, false);
                return xhr;
            },
            url: '/home/add-feedback',
            type: 'POST',
            data: feedbackFD,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'JSON',
            success: function (response) {
                clearAll('#feedback');
                tinymce.get(feedback.feedback.attr('name')).setContent('');
                toastr.success(response.success);
                progressBar.hide();
                feedbackFD.delete('photos[]');
            },
            error: function(error) {
                for(let err in error.responseJSON.errors ) {
                    toastr.error(error.responseJSON.errors[err][0]);
                }
            }
        });
    });

    photos.save.on('click', function () {
        progressBar.show();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': token
            }
        });
        $.ajax({
            xhr: function()
            {
                let xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt){
                    if (evt.lengthComputable) {
                        let percentComplete = evt.loaded / evt.total;
                        progressBar.find('#myBar').attr('style','width:' + percentComplete*100 + '%');
                    }
                }, false);
                return xhr;
            },
            url: '/home/add-photos',
            type: 'POST',
            data: photosFD,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'JSON',
            success: function (response) {
                clearAll('#photos');
                toastr.success(response.success);
                progressBar.hide();
                photosFD.delete('photos[]');
            },
            error: function(error) {
                for(let err in error.responseJSON.errors ) {
                    toastr.error(error.responseJSON.errors[err][0]);
                }
            }
        });
    })




});