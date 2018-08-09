$().ready(function () {

    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
            wrapping: false
        });
    });

    let body = $('body'),
        more = $('#moreInfo'),
        buy = $('#buyModal'),
        uri = window.location.toString(),
        logo = $('#logo'),
        fd = new FormData();

    function showMore(selector){
        body.on('click', 'a[data-show]', function (e) {
            e.preventDefault();
            let feedback = 2,
                url = uri + "?page=" + feedback;
            $.ajax({
                url: url
            }).done(function (data) {
                feedback+=1;
                $(selector).append(data);
            }).fail(function () {
                alert('Невозможно отобразить');
            });
            window.history.pushState({}, document.title, window.location.pathname);
            console.log(url);
        });
    }

    showMore('#feedbackContainer');

    if (uri.indexOf("?") > 0) {
        let clear = uri.substring(0, uri.indexOf("?"));
        window.history.replaceState({}, document.title, clear);
    }

    if(window.location.pathname === '/triatletizm')
    {
        const path = window.location.href.split('triatletizm')[0];
        logo.attr('src', path + '/images/triatletizm-logo.png');
    }

    $('[data-toggle="tooltip"]').tooltip();

    $('[data-train]').each(function () {
       $(this).on('click', function (e) {
           e.preventDefault();
           $('[data-trains]').find('div#' + $(this).data('train')).toggleClass('d-block').removeClass('fadeOut').siblings('div').removeClass('d-block').addClass('fadeOut');
           $(this).parent('div').toggleClass('bg-yellow').removeClass('border border-dark').siblings('div').removeClass('bg-yellow').addClass('border border-dark');
       })
    });

    $('[data-link]').each(function () {
        $(this).on('click', function () {
            fd.append('id', $(this).data('link'));
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/open',
                type: 'POST',
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'JSON',
                success: function (response) {
                    $('#programDescription').html(response.description);
                    $('#programTitle').html(response.title)
                    more.modal('show');
                },
                error: function(error) {
                    for(let err in error.responseJSON.errors ) {
                        toastr.error(error.responseJSON.errors[err][0]);
                    }
                }
            });
        })

    });



    $('[data-buy]').each(function () {

            $(this).on('click', function () {
                fd.append('id', $(this).data('buy'));
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '/buy',
                    type: 'POST',
                    data: fd,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'JSON',
                    success: function (response) {
                        $('input[name="targets"]').val(response.name);
                        $('input[name="sum"]').val(response.price);
                        $('#buyTitle').text('Купить тренировку "' + response.name + '"');
                        buy.modal('show');
                    },
                    error: function(error) {
                        for(let err in error.responseJSON.errors ) {
                            toastr.error(error.responseJSON.errors[err][0]);
                        }
                    }
                });
            })
    });

    $('[data-pay]').each(function () {
        $(this).on('click', function () {
            $(this).css('color','red!important');
        })
    })



});