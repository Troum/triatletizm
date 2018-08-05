$().ready(function () {
    let more = $('#moreInfo');
    $('[data-toggle="tooltip"]').tooltip();
    $('[data-show]').on('click', function (e) {
        e.preventDefault();
       $('#feeedback-container').append('<div class="col-xl-12 m-0 p-0 animated fadeIn">\n' +
           '                    <div class="row mt-2 mb-5 pb-5 pt-4 d-flex">\n' +
           '                        <div class="col-7 col-sm-7 col-md-7 col-lg-7 col-xl-8 m-0 p-0 mx-auto">\n' +
           '                            <div class="row position-relative m-0 p-0">\n' +
           '                                <div class="col-xl-2 m-0 p-0 position-absolute" style="top: 0; right: 1%;z-index: 1">\n' +
           '                                    <img src="../images/corner.png" alt="" class="img-fluid">\n' +
           '                                </div>\n' +
           '                            </div>\n' +
           '                            <div class="row mt-3 mb-3 p-0 d-flex justify-content-center align-content-center" >\n' +
           '                                <div class="col-xl-11 mt-2 p-4 align-self-center m-auto bg-light" style="z-index: 2">\n' +
           '                                    <div class="row m-0 p-0">\n' +
           '                                        <div class="col-xl-3">\n' +
           '                                            <div class="row m-0 p-0">\n' +
           '                                                <div class="col-xl-8 mx-auto m-0 p-0">\n' +
           '                                                    <div class="row m-0 p-0">\n' +
           '                                                        <div class="col-xl-12 m-0 p-0 text-center">\n' +
           '                                                            <img src="../images/girl.jpg" alt="" class="img-fluid rounded-circle">\n' +
           '                                                        </div>\n' +
           '                                                    </div>\n' +
           '                                                </div>\n' +
           '                                                <div class="col-xl-8 mx-auto">\n' +
           '                                                    <p class="font-weight-bold">\n' +
           '                                                        Рената Натуральнова\n' +
           '                                                    </p>\n' +
           '                                                </div>\n' +
           '                                                <div class="col-xl-8 mx-auto">\n' +
           '                                                    <i class="fab fa-instagram fa-1x mr-3"></i>\n' +
           '                                                    <i class="fab fa-vk fa-1x mr-3"></i>\n' +
           '                                                    <i class="fab fa-facebook-f fa-1x"></i>\n' +
           '                                                </div>\n' +
           '                                            </div>\n' +
           '                                        </div>\n' +
           '                                        <div class="col-xl-9">\n' +
           '                                            <div class="row">\n' +
           '                                                <div class="col-11 mx-auto d-flex justify-content-end">\n' +
           '                                                    <i class="fas fa-heart fa-1x ml-3"></i>\n' +
           '                                                    <i class="fas fa-share-square fa-1x ml-3"></i>\n' +
           '                                                </div>\n' +
           '                                            </div>\n' +
           '                                            <div class="row">\n' +
           '                                                <div class="col-11 mt-2 p-2 mx-auto text-justify">\n' +
           '                                                    Ой, как здорово, что теперь можно со всеми поделиться своими впечатлениями, своими эмоциями и нашими достижениями!\n' +
           '                                                    Очень важно, чтобы каждый человек на своем жизненном пути встречал хороших учителей. Как правило, мне с этим везет! И особенно повезло мне с личным тренером! В тренажерном зале рядом должен быть профессиональный, внимательный, терпеливый тренер! И да, Богдан, ты именно такой! Благодаря грамотно составленным программам тренировок и питания, правильным наставлениям, созданию атмосферы доверия и моему старанию (я же всегда стараюсь?!), мы пришли к тем результатам, которые можно увидеть на фото и видео.\n' +
           '                                                    24 кг... "Круто", - скажет почти каждый! Но еще круче то, что происходит внутри, а не снаружи! Я стала целеустремленней, уверенней в себе, сильней и надежней благодаря спорту, который для меня открыл ТЫ, Богдан!\n' +
           '                                                    СПАСИБО!!!!!\n' +
           '                                                </div>\n' +
           '                                            </div>\n' +
           '                                            <div class="row">\n' +
           '                                                <div class="col-xl-11 mx-auto">\n' +
           '                                                    <div class="row m-0 p-0">\n' +
           '                                                        <div class="col-xl-2 p-0 text-center position-relative feedback-height" data-feedback>\n' +
           '                                                            <div class="row m-0 p-0" data-photo>\n' +
           '                                                                <div class="col-xl-12 m-0 p-0 bg-transparent position-absolute" style="top: 0; left: 0" data-full>\n' +
           '                                                                    <img src="../images/full.png" alt="" class="img-fluid">\n' +
           '                                                                </div>\n' +
           '                                                            </div>\n' +
           '                                                            <img src="../images/gym-one-min.jpg" alt="" class="img-fluid">\n' +
           '                                                        </div>\n' +
           '                                                        <div class="col-xl-2 p-0 text-center position-relative feedback-height" data-feedback>\n' +
           '                                                            <div class="row m-0 p-0" data-photo>\n' +
           '                                                                <div class="col-xl-12 m-0 p-0 bg-transparent position-absolute" style="top: 0; left: 0" data-full>\n' +
           '                                                                    <img src="../images/full.png" alt="" class="img-fluid">\n' +
           '                                                                </div>\n' +
           '                                                            </div>\n' +
           '                                                            <img src="../images/gym-two-min.jpg" alt="" class="img-fluid">\n' +
           '                                                        </div>\n' +
           '                                                        <div class="col-xl-2 p-0 text-center position-relative feedback-height" data-feedback>\n' +
           '                                                            <div class="row m-0 p-0" data-photo>\n' +
           '                                                                <div class="col-xl-12 m-0 p-0 bg-transparent position-absolute" style="top: 0; left: 0" data-full>\n' +
           '                                                                    <img src="../images/full.png" alt="" class="img-fluid">\n' +
           '                                                                </div>\n' +
           '                                                            </div>\n' +
           '                                                            <img src="../images/gym-three-min.jpg" alt="" class="img-fluid">\n' +
           '                                                        </div>\n' +
           '                                                        <div class="col-xl-2 p-0 text-center position-relative feedback-height" data-feedback>\n' +
           '                                                            <div class="row m-0 p-0" data-photo>\n' +
           '                                                                <div class="col-xl-12 m-0 p-0 bg-transparent position-absolute" style="top: 0; left: 0" data-full>\n' +
           '                                                                    <img src="../images/full.png" alt="" class="img-fluid">\n' +
           '                                                                </div>\n' +
           '                                                            </div>\n' +
           '                                                            <img src="../images/gym-four-min.jpg" alt="" class="img-fluid">\n' +
           '                                                        </div>\n' +
           '                                                        <div class="col-xl-2 p-0 text-center position-relative feedback-height" data-feedback>\n' +
           '                                                            <div class="row m-0 p-0" data-photo>\n' +
           '                                                                <div class="col-xl-12 m-0 p-0 bg-transparent position-absolute" style="top: 0; left: 0" data-full>\n' +
           '                                                                    <img src="../images/full.png" alt="" class="img-fluid">\n' +
           '                                                                </div>\n' +
           '                                                            </div>\n' +
           '                                                            <img src="../images/gym-five-min.jpg" alt="" class="img-fluid">\n' +
           '                                                        </div>\n' +
           '                                                        <div class="col-xl-2 p-0 text-center position-relative feedback-height" data-feedback>\n' +
           '                                                            <div class="row m-0 p-0" data-photo>\n' +
           '                                                                <div class="col-xl-12 m-0 p-0 bg-transparent position-absolute" style="top: 0; left: 0" data-full>\n' +
           '                                                                    <img src="../images/full.png" alt="" class="img-fluid">\n' +
           '                                                                </div>\n' +
           '                                                            </div>\n' +
           '                                                            <img src="../images/gym-six-min.jpg" alt="" class="img-fluid">\n' +
           '                                                        </div>\n' +
           '                                                    </div>\n' +
           '                                                </div>\n' +
           '                                            </div>\n' +
           '                                        </div>\n' +
           '                                    </div>\n' +
           '                                </div>\n' +
           '                            </div>\n' +
           '                            <div class="row position-relative m-0 p-0">\n' +
           '                                <div class="col-xl-2 m-0 p-0 position-absolute" style="bottom: 0; left: 1%;z-index: 1">\n' +
           '                                    <img src="../images/corner.png" alt="" class="img-fluid">\n' +
           '                                </div>\n' +
           '                            </div>\n' +
           '                        </div>\n' +
           '                    </div>\n' +
           '                </div>')
    });
    $('[data-train]').each(function () {
       $(this).on('click', function (e) {
           e.preventDefault();
           $('[data-trains]').find('div#' + $(this).data('train')).toggleClass('d-block').removeClass('fadeOut').siblings('div').removeClass('d-block').addClass('fadeOut');
           $(this).parent('div').toggleClass('bg-yellow').removeClass('border border-dark').siblings('div').removeClass('bg-yellow').addClass('border border-dark');
       })
    });
    $('[data-full]').each(function () {
        $(this).on('click',function () {
           $('#photo').modal('show');

           $('#photo').find('img').attr('src', $(this).parent('[data-photo]').parent('[data-feedback]').children('img').attr('src'));
        });
    });

    $('[data-link]').each(function () {
        $(this).on('click', function (e) {
            e.preventDefault();
            more.modal('show');
        });

    })
});