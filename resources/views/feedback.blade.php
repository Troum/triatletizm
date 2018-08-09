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
        <div class="col-xl-12 m-0 p-0">
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
                        <div class="col-xl-12 m-0 p-0">
                            <ul class="nav nav-tabs d-flex justify-content-center" role="tablist">
                                <li class="nav-item col-xl-4 text-center">
                                    <a class="nav-link active" data-toggle="tab" href="#panel6" role="tab">Отзывы</a>
                                </li>
                                <li class="nav-item col-xl-4 text-center">
                                    <a class="nav-link" data-toggle="tab" href="#panel7" role="tab">Результаты</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row m-0 p-0">
                        <div class="col-xl-12 m-0 p-0">
                            <div class="tab-content">
                                <div class="tab-pane fade in show active" id="panel6" role="tabpanel">
                                    <div class="col-xl-12 m-0 p-0">
                                        <div class="row m-0 p-0" id="feedbackContainer">
                                            @include('page-parts.feedback')
                                        </div>
                                        <div class="row m-0 p-0">
                                            <div class="col-xl-12 m-0 p-0">
                                                @if(count($posts) === 0)
                                                @else
                                                    <div class="row mt-2 mb-5 pb-5 pt-4 d-flex">
                                                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 m-0 p-0 mx-auto">
                                                            <div class="row m-0 p-0">
                                                                <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 mx-auto mt-3 mb-3 text-justify">
                                                                    <div class="row">
                                                                        <div class="col-xl-5 p-2 border border-dark text-center mx-auto">
                                                                            <a href="/" class="font-weight-bold" data-show data-click="click">
                                                                                Показать ещё
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="panel7" role="tabpanel">
                                    <div class="col-xl-12 m-0 p-0">
                                        <div class="row m-0 p-0" id="feedbackContainer">
                                            <div class="col-xl-12 mt-xl-5 p-0 mx-auto">
                                                <div class="row mt-xl-5 p-0">
                                                    @foreach($gallery as $photo)
                                                        <a href="{{asset('images/gallery/'.$photo->photo)}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-xl-3 mt-xl-3 mb-xl-3">
                                                            <img src="{{asset('images/gallery/'.$photo->photo)}}" alt="" class="img-fluid">
                                                        </a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
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