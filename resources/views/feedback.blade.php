@extends('layout')
@section('content')
    <div class="row m-0 p-0 d-flex">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 m-0 p-0 position-relative d-flex justify-content-center align-content-center">
            <div class="row m-0 p-0">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 m-0 p-0">
                    <img src="{{asset('images/feedback.png')}}" alt="" class="img-fluid" style="z-index: -2">
                </div>
            </div>
            <div class="row m-0 p-0 position-absolute align-self-center w-50" style="top: 10%; left: 0">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-7 m-0 p-0">
                    <img src="{{asset('images/feedback-and-results.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 m-0 p-0 position-relative">
                    <div class="row w-100 m-0 position-absolute" style="left: 2%">
                        <div class="col-md-4 col-xl-6 ml-auto pt-3 pr-0 pl-4">
                            <p class="text-white">
                                Написать свой отзыв о моей
                                работе, программах и о своих
                                замечаниях и предложениях
                                вы можете тут. Так же здесь
                                собраны отзывы клиентов,
                                которые уже работают
                                со мной.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-0 p-0">
        <div class="col-xl-12 m-0 p-0 feedback-container">
            <div class="row mt-5 mb-5 pt-5 pb-5 d-flex">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 m-0 p-0 position-relative d-flex justify-content-center align-content-center">
                    <div class="row m-0 p-0 position-absolute" style="right: 0; bottom: 5%">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-10 m-0 p-0 ml-xl-auto">
                            <img src="{{asset('images/feedback-line.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4 pt-2 d-flex">
                <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 m-0 p-0 mx-auto">
                    <div class="row m-0 p-0">
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 mx-auto mt-3 mb-3 text-justify">
                            <div class="row">
                                <div class="col-xl-12 p-2 text-center">
                                    <h2 class="font-weight-light text-uppercase text-dark">сомневаетесь?</h2>
                                </div>
                                <div class="col-xl-12 p-2 text-center">
                                    Вы можете пронаблюдать прогресс моих клиентов на этой странице выбрав соответствующий раздел. Мне важно, что бы вы были уверены во мне и в предоставляемых мной услугах.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2 mb-5 pb-5 pt-4 d-flex">
                <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 m-0 p-0 mx-auto">
                    <div class="row m-0 p-0">
                        <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 mx-auto mt-3 mb-3 text-justify">
                            <div class="row">
                                <div class="col-xl-5 p-2 bg-yellow text-center">
                                    <a href="/feedback" class="font-weight-bold">
                                        Отзывы
                                    </a>
                                </div>
                                <div class="col-1"></div>
                                <div class="col-xl-5 p-2 border border-dark text-center">
                                    <a href="#" class="font-weight-bold">
                                        Результаты
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-0 p-0" id="feeedback-container">
                <div class="col-xl-12 m-0 p-0">
                    <div class="row mt-2 mb-5 pb-5 pt-4 d-flex">
                        <div class="col-7 col-sm-7 col-md-7 col-lg-7 col-xl-8 m-0 p-0 mx-auto">
                            <div class="row position-relative m-0 p-0">
                                <div class="col-xl-2 m-0 p-0 position-absolute" style="top: 0; right: 1%;z-index: 1">
                                    <img src="{{asset('images/corner.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="row mt-3 mb-3 p-0 d-flex justify-content-center align-content-center" >
                                <div class="col-xl-11 mt-2 p-4 align-self-center m-auto bg-light" style="z-index: 2">
                                    <div class="row m-0 p-0">
                                        <div class="col-xl-3">
                                            <div class="row m-0 p-0">
                                                <div class="col-xl-8 mx-auto m-0 p-0">
                                                    <div class="row m-0 p-0">
                                                        <div class="col-xl-12 m-0 p-0 text-center">
                                                            <img src="{{asset('images/girl.jpg')}}" alt="" class="img-fluid rounded-circle">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 mx-auto">
                                                    <p class="font-weight-bold">
                                                        Рената Натуральнова
                                                    </p>
                                                </div>
                                                <div class="col-xl-8 mx-auto">
                                                    <i class="fab fa-instagram fa-1x mr-3"></i>
                                                    <i class="fab fa-vk fa-1x mr-3"></i>
                                                    <i class="fab fa-facebook-f fa-1x"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-9">
                                            <div class="row">
                                                <div class="col-11 mx-auto d-flex justify-content-end">
                                                    <i class="fas fa-heart fa-1x ml-3"></i>
                                                    <i class="fas fa-share-square fa-1x ml-3"></i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-11 mt-2 p-2 mx-auto text-justify">
                                                    Ой, как здорово, что теперь можно со всеми поделиться своими впечатлениями, своими эмоциями и нашими достижениями!
                                                    Очень важно, чтобы каждый человек на своем жизненном пути встречал хороших учителей. Как правило, мне с этим везет! И особенно повезло мне с личным тренером! В тренажерном зале рядом должен быть профессиональный, внимательный, терпеливый тренер! И да, Богдан, ты именно такой! Благодаря грамотно составленным программам тренировок и питания, правильным наставлениям, созданию атмосферы доверия и моему старанию (я же всегда стараюсь?!), мы пришли к тем результатам, которые можно увидеть на фото и видео.
                                                    24 кг... "Круто", - скажет почти каждый! Но еще круче то, что происходит внутри, а не снаружи! Я стала целеустремленней, уверенней в себе, сильней и надежней благодаря спорту, который для меня открыл ТЫ, Богдан!
                                                    СПАСИБО!!!!!
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-11 mx-auto">
                                                    <div class="row m-0 p-0">
                                                        <div class="col-xl-2 p-0 text-center position-relative feedback-height" data-feedback>
                                                            <div class="row m-0 p-0" data-photo>
                                                                <div class="col-xl-12 m-0 p-0 bg-transparent position-absolute" style="top: 0; left: 0" data-full>
                                                                    <img src="{{asset('images/full.png')}}" alt="" class="img-fluid">
                                                                </div>
                                                            </div>
                                                            <img src="{{asset('images/gym-one-min.jpg')}}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="col-xl-2 p-0 text-center position-relative feedback-height" data-feedback>
                                                            <div class="row m-0 p-0" data-photo>
                                                                <div class="col-xl-12 m-0 p-0 bg-transparent position-absolute" style="top: 0; left: 0" data-full>
                                                                    <img src="{{asset('images/full.png')}}" alt="" class="img-fluid">
                                                                </div>
                                                            </div>
                                                            <img src="{{asset('images/gym-two-min.jpg')}}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="col-xl-2 p-0 text-center position-relative feedback-height" data-feedback>
                                                            <div class="row m-0 p-0" data-photo>
                                                                <div class="col-xl-12 m-0 p-0 bg-transparent position-absolute" style="top: 0; left: 0" data-full>
                                                                    <img src="{{asset('images/full.png')}}" alt="" class="img-fluid">
                                                                </div>
                                                            </div>
                                                            <img src="{{asset('images/gym-three-min.jpg')}}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="col-xl-2 p-0 text-center position-relative feedback-height" data-feedback>
                                                            <div class="row m-0 p-0" data-photo>
                                                                <div class="col-xl-12 m-0 p-0 bg-transparent position-absolute" style="top: 0; left: 0" data-full>
                                                                    <img src="{{asset('images/full.png')}}" alt="" class="img-fluid">
                                                                </div>
                                                            </div>
                                                            <img src="{{asset('images/gym-four-min.jpg')}}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="col-xl-2 p-0 text-center position-relative feedback-height" data-feedback>
                                                            <div class="row m-0 p-0" data-photo>
                                                                <div class="col-xl-12 m-0 p-0 bg-transparent position-absolute" style="top: 0; left: 0" data-full>
                                                                    <img src="{{asset('images/full.png')}}" alt="" class="img-fluid">
                                                                </div>
                                                            </div>
                                                            <img src="{{asset('images/gym-five-min.jpg')}}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="col-xl-2 p-0 text-center position-relative feedback-height" data-feedback>
                                                            <div class="row m-0 p-0" data-photo>
                                                                <div class="col-xl-12 m-0 p-0 bg-transparent position-absolute" style="top: 0; left: 0" data-full>
                                                                    <img src="{{asset('images/full.png')}}" alt="" class="img-fluid">
                                                                </div>
                                                            </div>
                                                            <img src="{{asset('images/gym-six-min.jpg')}}" alt="" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row position-relative m-0 p-0">
                                <div class="col-xl-2 m-0 p-0 position-absolute" style="bottom: 0; left: 1%;z-index: 1">
                                    <img src="{{asset('images/corner.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2 mb-5 pb-5 pt-4 d-flex">
                <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 m-0 p-0 mx-auto">
                    <div class="row m-0 p-0">
                        <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 mx-auto mt-3 mb-3 text-justify">
                            <div class="row">
                                <div class="col-xl-5 p-2 border border-dark text-center mx-auto">
                                    <a href="" class="font-weight-bold" data-show>
                                        Показать ещё
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Central Modal Small -->
    <div class="modal fade" id="photo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered d-flex justify-content-center align-content-center" role="document">
            <img src="" alt="" class="img-fluid d-block align-self-center m-auto">
        </div>
    </div>
@endsection