@extends('layout')
@section('content')
    <div class="row m-0 p-0">
        <div class="col-xl-9 mx-auto m-0 p-0">
            <div class="row m-0 p-0">
                <div class="col-md-6 mb-2 mt-2 p-0 map">
                    <div id="map-container" class="z-depth-1-half h-100"></div>
                </div>
                <div class="col-md-6 m-0 p-0">
                    <div class="row m-0 p-0 position-absolute align-self-center w-100" style="top: 14%; right: 0">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-12 m-0 p-0">
                            <img src="{{asset('images/contacts.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-12 mt-2 pl-4">
                            <div class="row mt-3 mb-3">
                                <div class="col-xl-3 d-flex justify-content-center align-content-center">
                                    <i class="d-inline-block align-self-center m-auto fas fa-globe fa-2x"></i>
                                </div>
                                <div class="col-xl-9">
                                    Тренажерный зал “Sportfamily”:<br>
                                    М. Богдановича 134, 3 этаж <br>
                                    сегодня c 8:00 до 21:00
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-xl-3 d-flex justify-content-center align-content-center">
                                    <i class="d-inline-block align-self-center m-auto fas fa-mobile-alt fa-2x"></i>
                                </div>
                                <div class="col-xl-9">
                                    <a href="tel:+375292161861">+375 (29) 216 18 61</a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-12 mt-2 pl-4">
                                <div class="row m-0 p-0">
                                    <div class="col-xl-2 m-0 p-0 d-flex justify-content-center align-content-center">
                                        <i class="d-inline-block align-self-center m-auto far fa-paper-plane fa-2x"></i>
                                    </div>
                                    <div class="col-xl-10 m-0">
                                        <div class="row mt-3 mb-3">
                                            <div class="col-xl-12">
                                                <input id="name" name="name" type="text" placeholder="Ваше имя" class="form-control rounded-0">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-xl-12">
                                                <input id="phone" name="phone" type="text" placeholder="Номер телефона" class="form-control rounded-0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-0 mb-3">
                                    <div class="col-xl-4 text-center mx-auto">
                                        <a class="btn btn-sm bg-yellow rounded-0">
                                            Отправить заявку
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-0 mb-4">
                                    <div class="col-xl-10 text-center mx-auto">
                                        <small>
                                            Вы всегда можете найти меня по одному из контактов, указанных ниже, либо отправить мне заявку и я вам перезвоню в ближайшее время.
                                        </small>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

