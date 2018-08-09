@extends('layout')
@section('content')
    <div class="row m-0 p-0 d-flex">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 m-0 p-0 position-relative d-flex justify-content-center align-content-center">
            <div class="row m-0 p-0">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 m-0 p-0">
                    <img src="{{asset('images/programm.png')}}" alt="" class="img-fluid" style="z-index: -2">
                </div>
            </div>
            <div class="row m-0 p-0 position-absolute align-self-center w-50" style="top: 10%; left: 0">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-7 m-0 p-0">
                    <img src="{{asset('images/programm-wait.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 m-0 p-0 position-relative">
                    <div class="row w-100 m-0 position-absolute" style="left: 2%">
                        <div class="col-md-4 col-xl-6 ml-auto pt-3 pr-0 pl-4">
                            <p class="text-white">
                                Здесь собраны составленные
                                мной платные программы
                                тренировок и питания,
                                посредством которых вы
                                еще быстрее достигнете своей
                                идеальной формы
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row m-0 p-0 d-flex justify-content-center align-content-center position-relative">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 m-0 p-0 align-self-center">
            <div class="row m-0 p-0">
                <div class="col-xl-10 mx-auto">
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="row bg-light mt-1 mr-2 z-depth-1">
                                <div class="col-xl-10 mb-1 mt-5 p-1 mx-auto">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="forMen">
                                        <label class="form-check-label" for="forMen">Мужчинам</label>
                                    </div>
                                </div>
                                <div class="col-xl-10 mb-1 mt-1 p-1 mx-auto">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="forWomen">
                                        <label class="form-check-label" for="forWomen">Женщинам</label>
                                    </div>
                                </div>
                                <div class="col-xl-10 mb-1 mt-1 p-1 mx-auto">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="forKids">
                                        <label class="form-check-label" for="forKids">Детям</label>
                                    </div>
                                </div>
                                <div class="col-xl-10 mr-auto mb-1 mt-1 p-2">
                                    <div class="row">
                                        <hr class="col-10 ml-2 bg-lightgrey">
                                    </div>
                                </div>
                                <div class="col-xl-10 mb-1 mt-1 p-1 mx-auto">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="levelOne">
                                        <label class="form-check-label" for="levelOne">Уровень 1</label>
                                    </div>
                                </div>
                                <div class="col-xl-10 mb-1 mt-1 p-1 mx-auto">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="levelTwo">
                                        <label class="form-check-label" for="levelTwo">Уровень 2</label>
                                    </div>
                                </div>
                                <div class="col-xl-10 mb-1 mt-1 p-1 mx-auto">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="levelThree">
                                        <label class="form-check-label" for="levelThree">Уровень 3</label>
                                    </div>
                                </div>
                                <div class="col-xl-10 mb-1 mt-1 p-1 mx-auto">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="levelFour">
                                        <label class="form-check-label" for="levelFour">Уровень 4</label>
                                    </div>
                                </div>
                                <div class="col-xl-10 mb-1 mt-1 p-1 mx-auto">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="lveleFive">
                                        <label class="form-check-label" for="lveleFive">Уровень 5</label>
                                    </div>
                                </div>
                                <div class="col-xl-10 mb-1 mt-1 p-1 mx-auto">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="levelSix">
                                        <label class="form-check-label" for="levelSix">Уровень 6</label>
                                    </div>
                                </div>
                                <div class="col-xl-10 mb-1 mt-1 p-1 mx-auto">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="levelSeven">
                                        <label class="form-check-label" for="levelSeven">Уровень 7</label>
                                    </div>
                                </div>
                                <div class="col-xl-10 mb-1 mt-1 p-1 mx-auto">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="levelEight">
                                        <label class="form-check-label" for="levelEight">Уровень 8</label>
                                    </div>
                                </div>
                                <div class="col-xl-10 mr-auto mb-1 mt-1 p-2">
                                    <div class="row">
                                        <hr class="col-10 ml-2 bg-lightgrey">
                                    </div>
                                </div>
                                <div class="col-xl-10 mb-1 mt-1 p-1 mx-auto">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="eightTrains">
                                        <label class="form-check-label" for="eightTrains">8 занятий в месяц</label>
                                    </div>
                                </div>
                                <div class="col-xl-10 mb-5 mt-1 p-1 mx-auto">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="twelveTrains">
                                        <label class="form-check-label" for="twelveTrains">12 занятий в месяц</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 m-0 p-0">
                            <div class="row mb-5 mr-0 ml-0 mt-5 p-0">
                                @foreach($programs as $program)
                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 p-0 mb-5">
                                    <div class="row position-relative d-flex justify-content-center align-content-center" data-card>
                                        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 mx-auto" data-container>
                                            <div class="card p-2 rounded-0 border-0">
                                                <div class="row position-relative">
                                                    <div class="col-8 col-lg-8 col-xl-11 p-5 p-xl-2 d-flex justify-content-start align-content-start" style="z-index: 2">
                                                        <p class="text-uppercase d-inline-block ml-4 mt-0 mb-0 font-weight-bold">
                                                            {{$program->name}}
                                                        </p>
                                                    </div>
                                                    <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 d-flex justify-content-start align-content-start position-absolute" style="top: 41%">
                                                        <img class="img-fluid" src="{{asset('images/underline.png')}}" alt="Card image cap">
                                                    </div>
                                                </div>
                                                <div class="card-body p-xl-0">
                                                    <div class="row position-relative d-flex justify-content-center align-content-center">
                                                        <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 m-2 mx-auto d-flex justify-content-center align-content-center">
                                                            <img class="card-img-top align-self-center m-auto" src="{{asset('images/polygon.png')}}" alt="Card image cap">
                                                        </div>
                                                        <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 m-2 align-self-center m-auto position-absolute" style="top: 38%">
                                                            <h1 class="text-center m-0">{{$loop->iteration}}.</h1>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 m-2 mx-auto d-flex justify-content-center align-content-center">
                                                        {!! $program->short_description !!}
                                                        </div>
                                                    </div>
                                                    <div class="row m-0 p-0 col-12 d-flex justify-content-center" data-more>
                                                        <div class="col-6 mx-auto m-0 p-2 text-center" data-price>
                                                            <p class="font-weight-bold text-dark">
                                                                $: {{$program->price}}
                                                            </p>
                                                            <a href="#" class="font-weight-bold text-dark" style="font-size: .7em; color: inherit;" data-link="{{$program->id}}">
                                                                Подробнее >>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box col-10 align-self-auto w-100 position-absolute" style="bottom: -3%; z-index: 0"></div>
                                    </div>
                                </div>
                                @endforeach
                                {{--<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 p-0 mb-5">
                                    <div class="row position-relative d-flex justify-content-center align-content-center" data-card>
                                        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 mx-auto" data-container>
                                            <div class="card p-2 rounded-0 border-0">
                                                <div class="row position-relative">
                                                    <div class="col-8 col-lg-8 col-xl-11 p-5 p-xl-2 d-flex justify-content-start align-content-start" style="z-index: 2">
                                                        <p class="text-uppercase d-inline-block ml-4 mt-0 mb-0 font-weight-bold">
                                                            изучи и закрепи 8
                                                        </p>
                                                    </div>
                                                    <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 d-flex justify-content-start align-content-start position-absolute" style="top: 41%">
                                                        <img class="img-fluid" src="{{asset('images/underline.png')}}" alt="Card image cap">
                                                    </div>
                                                </div>
                                                <div class="card-body p-xl-0">
                                                    <div class="row position-relative d-flex justify-content-center align-content-center">
                                                        <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 m-2 mx-auto d-flex justify-content-center align-content-center">
                                                            <img class="card-img-top align-self-center m-auto" src="{{asset('images/polygon.png')}}" alt="Card image cap">
                                                        </div>
                                                        <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 m-2 align-self-center m-auto position-absolute" style="top: 38%">
                                                            <h1 class="text-center m-0">2.</h1>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 m-2 mx-auto d-flex justify-content-center align-content-center">
                                                            <p class="card-text text-justify" style="font-size: smaller">Данный курс включает в себя бесплатную пробную версию моей программы тренировок и правильной схемы питания по которой вы поймете нужна ли вам платная версия или нафиг надо.</p>
                                                        </div>
                                                    </div>
                                                    <div class="row m-0 p-0 col-12 d-flex justify-content-center" data-more>
                                                        <div class="col-6 mx-auto m-0 p-2 text-center" data-price>
                                                            <p class="font-weight-bold text-dark">
                                                                $: 10
                                                            </p>
                                                            <a href="#" class="font-weight-bold text-dark" style="font-size: .7em; color: inherit;" data-link>
                                                                Подробнее >>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box col-10 align-self-auto w-100 position-absolute" style="bottom: -3%; z-index: 0"></div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 p-0 mb-5">
                                    <div class="row position-relative d-flex justify-content-center align-content-center" data-card>
                                        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 mx-auto" data-container>
                                            <div class="card p-2 rounded-0 border-0">
                                                <div class="row position-relative">
                                                    <div class="col-8 col-lg-8 col-xl-11 p-5 p-xl-2 d-flex justify-content-start align-content-start" style="z-index: 2">
                                                        <p class="text-uppercase d-inline-block ml-4 mt-0 mb-0 font-weight-bold">
                                                            изучи и закрепи 12
                                                        </p>
                                                    </div>
                                                    <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 d-flex justify-content-start align-content-start position-absolute" style="top: 41%">
                                                        <img class="img-fluid" src="{{asset('images/underline.png')}}" alt="Card image cap">
                                                    </div>
                                                </div>
                                                <div class="card-body p-xl-0">
                                                    <div class="row position-relative d-flex justify-content-center align-content-center">
                                                        <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 m-2 mx-auto d-flex justify-content-center align-content-center">
                                                            <img class="card-img-top align-self-center m-auto" src="{{asset('images/polygon.png')}}" alt="Card image cap">
                                                        </div>
                                                        <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 m-2 align-self-center m-auto position-absolute" style="top: 38%">
                                                            <h1 class="text-center m-0">3.</h1>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 m-2 mx-auto d-flex justify-content-center align-content-center">
                                                            <p class="card-text text-justify" style="font-size: smaller">Данный курс включает в себя бесплатную пробную версию моей программы тренировок и правильной схемы питания по которой вы поймете нужна ли вам платная версия или нафиг надо.</p>
                                                        </div>
                                                    </div>
                                                    <div class="row m-0 p-0 col-12 d-flex justify-content-center" data-more>
                                                        <div class="col-6 mx-auto m-0 p-2 text-center" data-price>
                                                            <p class="font-weight-bold text-dark">
                                                                $: 20
                                                            </p>
                                                            <a href="#" class="font-weight-bold text-dark" style="font-size: .7em; color: inherit;" data-link>
                                                                Подробнее >>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box col-10 align-self-auto w-100 position-absolute" style="bottom: -3%; z-index: 0"></div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 p-0 mb-5">
                                    <div class="row position-relative d-flex justify-content-center align-content-center" data-card>
                                        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 mx-auto" data-container>
                                            <div class="card p-2 rounded-0 border-0">
                                                <div class="row position-relative">
                                                    <div class="col-8 col-lg-8 col-xl-11 p-5 p-xl-2 d-flex justify-content-start align-content-start" style="z-index: 2">
                                                        <p class="text-uppercase d-inline-block ml-4 mt-0 mb-0 font-weight-bold">
                                                            узнай больше 8
                                                        </p>
                                                    </div>
                                                    <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 d-flex justify-content-start align-content-start position-absolute" style="top: 41%">
                                                        <img class="img-fluid" src="{{asset('images/underline.png')}}" alt="Card image cap">
                                                    </div>
                                                </div>
                                                <div class="card-body p-xl-0">
                                                    <div class="row position-relative d-flex justify-content-center align-content-center">
                                                        <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 m-2 mx-auto d-flex justify-content-center align-content-center">
                                                            <img class="card-img-top align-self-center m-auto" src="{{asset('images/polygon.png')}}" alt="Card image cap">
                                                        </div>
                                                        <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 m-2 align-self-center m-auto position-absolute" style="top: 38%">
                                                            <h1 class="text-center m-0">4.</h1>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 m-2 mx-auto d-flex justify-content-center align-content-center">
                                                            <p class="card-text text-justify" style="font-size: smaller">Данный курс включает в себя бесплатную пробную версию моей программы тренировок и правильной схемы питания по которой вы поймете нужна ли вам платная версия или нафиг надо.</p>
                                                        </div>
                                                    </div>
                                                    <div class="row m-0 p-0 col-12 d-flex justify-content-center" data-more>
                                                        <div class="col-6 mx-auto m-0 p-2 text-center" data-price>
                                                            <p class="font-weight-bold text-dark">
                                                                $: 10
                                                            </p>
                                                            <a href="#" class="font-weight-bold text-dark" style="font-size: .7em; color: inherit;" data-link>
                                                                Подробнее >>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box col-10 align-self-auto w-100 position-absolute" style="bottom: -3%; z-index: 0"></div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 p-0 mb-5">
                                    <div class="row position-relative d-flex justify-content-center align-content-center" data-card>
                                        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 mx-auto" data-container>
                                            <div class="card p-2 rounded-0 border-0">
                                                <div class="row position-relative">
                                                    <div class="col-8 col-lg-8 col-xl-11 p-5 p-xl-2 d-flex justify-content-start align-content-start" style="z-index: 2">
                                                        <p class="text-uppercase d-inline-block ml-4 mt-0 mb-0 font-weight-bold">
                                                            узнай больше 12
                                                        </p>
                                                    </div>
                                                    <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 d-flex justify-content-start align-content-start position-absolute" style="top: 41%">
                                                        <img class="img-fluid" src="{{asset('images/underline.png')}}" alt="Card image cap">
                                                    </div>
                                                </div>
                                                <div class="card-body p-xl-0">
                                                    <div class="row position-relative d-flex justify-content-center align-content-center">
                                                        <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 m-2 mx-auto d-flex justify-content-center align-content-center">
                                                            <img class="card-img-top align-self-center m-auto" src="{{asset('images/polygon.png')}}" alt="Card image cap">
                                                        </div>
                                                        <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 m-2 align-self-center m-auto position-absolute" style="top: 38%">
                                                            <h1 class="text-center m-0">5.</h1>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 m-2 mx-auto d-flex justify-content-center align-content-center">
                                                            <p class="card-text text-justify" style="font-size: smaller">Данный курс включает в себя бесплатную пробную версию моей программы тренировок и правильной схемы питания по которой вы поймете нужна ли вам платная версия или нафиг надо.</p>
                                                        </div>
                                                    </div>
                                                    <div class="row m-0 p-0 col-12 d-flex justify-content-center" data-more>
                                                        <div class="col-6 mx-auto m-0 p-2 text-center" data-price>
                                                            <p class="font-weight-bold text-dark">
                                                                $: 10
                                                            </p>
                                                            <a href="#" class="font-weight-bold text-dark" style="font-size: .7em; color: inherit;" data-link>
                                                                Подробнее >>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box col-10 align-self-auto w-100 position-absolute" style="bottom: -3%; z-index: 0"></div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 p-0 mb-5">
                                    <div class="row position-relative d-flex justify-content-center align-content-center" data-card>
                                        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 mx-auto" data-container>
                                            <div class="card p-2 rounded-0 border-0">
                                                <div class="row position-relative">
                                                    <div class="col-8 col-lg-8 col-xl-11 p-5 p-xl-2 d-flex justify-content-start align-content-start" style="z-index: 2">
                                                        <p class="text-uppercase d-inline-block ml-4 mt-0 mb-0 font-weight-bold">
                                                            преодолей себя
                                                        </p>
                                                    </div>
                                                    <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 d-flex justify-content-start align-content-start position-absolute" style="top: 41%">
                                                        <img class="img-fluid" src="{{asset('images/underline.png')}}" alt="Card image cap">
                                                    </div>
                                                </div>
                                                <div class="card-body p-xl-0">
                                                    <div class="row position-relative d-flex justify-content-center align-content-center">
                                                        <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 m-2 mx-auto d-flex justify-content-center align-content-center">
                                                            <img class="card-img-top align-self-center m-auto" src="{{asset('images/polygon.png')}}" alt="Card image cap">
                                                        </div>
                                                        <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 m-2 align-self-center m-auto position-absolute" style="top: 38%">
                                                            <h1 class="text-center m-0">6.</h1>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 m-2 mx-auto d-flex justify-content-center align-content-center">
                                                            <p class="card-text text-justify" style="font-size: smaller" data-description>Данный курс включает в себя бесплатную пробную версию моей программы тренировок и правильной схемы питания по которой вы поймете нужна ли вам платная версия или нафиг надо.</p>
                                                        </div>
                                                    </div>
                                                    <div class="row m-0 p-0 col-12 d-flex justify-content-center" data-more>
                                                        <div class="col-6 mx-auto m-0 p-2 text-center" data-price>
                                                            <p class="font-weight-bold text-dark">
                                                                $: 20
                                                            </p>
                                                            <a href="#" class="font-weight-bold text-dark" style="font-size: .7em; color: inherit;" data-link>
                                                                Подробнее >>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box col-10 align-self-auto w-100 position-absolute" style="bottom: -3%; z-index: 0"></div>
                                    </div>
                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="moreInfo" tabindex="-1" role="dialog" aria-labelledby="programTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100" id="programTitle"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="programDescription">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-yellow btn-sm rounded-0" data-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-danger btn-sm rounded-0">Купить</button>
                </div>
            </div>
        </div>
    </div>
@endsection