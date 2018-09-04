@extends('layout')
@section('content')
    <div class="row m-0 p-0 d-flex">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 m-0 p-0 position-relative d-flex justify-content-center align-content-center">
            <div class="row m-0 p-0">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 m-0 p-0">
                    <img src="{{asset('images/main.png')}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row m-0 p-0 position-absolute align-self-center" style="left: 0">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 m-0 p-0">
                    <img src="{{asset('images/welcome.png')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div class="row p-0" style="margin-top: -3%">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 m-0 p-0">
            <div class="row m-0 p-0 w-100">
                <div class="col-8 col-sm-8 col-md-8 col-lg-7 col-xl-7 mx-auto b1 m-0 p-0">
                    <div class="row m-0 p-0">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-5 col-xl-5 d-flex justify-content-center">
                            <img src="{{asset('images/b1.png')}}" alt="" class="img-fluid d-inline-block align-self-center mt-5">
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-7 col-xl-7 mt-5 pt-5 pl-3 text-center">
                            <h4 class="text-dark text-uppercase text-center d-inline-block pt-5">богдан паракевич</h4>
                            <p class="d-inline-block mt-1 text-left pl-3">
                                Привет друзья, я уверен каждый из вас хоть раз пытался «подкачаться, подсушиться, подтянуться» , а если сказать правильно: набрать мышечную массу, сжечь жир, изменить пропорции тела.
                            </p>
                            <p class="d-inline-block mt-1 text-left pl-3">
                                Многие пытались, но не у многих действительно получилось, а после нескольких провалов часто идут оправдания, что это работа мешает, много дел или просто генетика такая.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-0 mt-4">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 m-0 p-0">
            <img src="{{asset('images/services.png')}}" alt="" class="img-fluid float-right">
        </div>
    </div>
    <div class="row p-0 mt-5">
        <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 m-0 p-0 mx-auto">
            <div class="row m-0 p-0">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-9 mx-auto">
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                            <div class="row position-relative" data-card>
                                <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 mx-auto" data-container>
                                    <div class="card p-2 rounded-0 border-0">
                                        <div class="row">
                                            <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 m-2 mx-auto d-flex justify-content-center align-content-center">
                                                <img class="card-img-top align-self-center m-auto" src="{{asset('images/list.svg')}}" alt="Card image cap">
                                            </div>
                                        </div>
                                        <div class="card-body p-xl-0">
                                            <h5 class="card-title text-uppercase text-center"><a>программы</a></h5>
                                            <p class="card-text text-center">Платные программы тренировок и питания</p>
                                            <div class="row m-0 p-0 col-12 d-flex justify-content-center">
                                                <a href="/programs" class="btn z-depth-0">
                                                    <i class="fas fa-chevron-right text-dark"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box col-12 w-100 position-absolute" style="bottom: -10%; z-index: -1"></div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                            <div class="row position-relative" data-card>
                                <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 mx-auto" data-container>
                                    <div class="card p-2 rounded-0 border-0">
                                        <div class="row">
                                            <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 m-2 mx-auto d-flex justify-content-center align-content-center">
                                                <img class="card-img-top align-self-center m-auto" src="{{asset('images/dumbbell.svg')}}" alt="Card image cap">
                                            </div>
                                        </div>
                                        <div class="card-body p-xl-0">
                                            <h5 class="card-title text-uppercase text-center"><a>тренировки</a></h5>
                                            <p class="card-text text-center">Индивидуальные и групповые тренировки</p>
                                            <div class="row m-0 p-0 col-12 d-flex justify-content-center">
                                                <a href="/training" class="btn z-depth-0">
                                                    <i class="fas fa-chevron-right text-dark"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box col-12 w-100 position-absolute" style="bottom: -10%; z-index: -1"></div>
                            </div>
                        </div>
                        {{--<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">--}}
                        {{--<div class="row position-relative" data-card>--}}
                        {{--<div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 mx-auto" data-container>--}}
                        {{--<div class="card p-2 rounded-0 border-0">--}}
                        {{--<div class="row">--}}
                        {{--<div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 m-2 mx-auto d-flex justify-content-center align-content-center">--}}
                        {{--<img class="card-img-top align-self-center m-auto" src="{{asset('images/tap.svg')}}" alt="Card image cap">--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="card-body p-xl-0">--}}
                        {{--<h5 class="card-title text-uppercase text-center"><a>онлайн-тренер</a></h5>--}}
                        {{--<p class="card-text">Большой выбор спортивной одежды</p>--}}
                        {{--<div class="row m-0 p-0 col-12 d-flex justify-content-center">--}}
                        {{--<a href="#" class="btn z-depth-0">--}}
                        {{--<i class="fas fa-chevron-right text-dark"></i>--}}
                        {{--</a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="box col-12 w-100 position-absolute" style="bottom: -10%; z-index: -1"></div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5 mb-5 pt-5 pb-5"></div>
    <div class="row mt-5 p-0 bg-dark">
        <div class="row w-100">
            <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 mx-auto p-0">
                <div class="row w-100 m-0">
                    @foreach($news as $new)
                        @if($loop->iteration % 2 !== 0)

                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0" style="margin-top: -4%">
                                <div class="row m-0 p-0">
                                    <div class="col-12 m-0 p-0 w-100" >
                                        <img src="{{asset('images/news/'.$new->slug.'/cover/'.$new->cover)}}" alt="" class="img-fluid float-right d-block">
                                    </div>
                                </div>
                                <div class="row m-0 p-0 w-100">
                                    <div class="col-11 col-xl-10 ml-auto bg-white">
                                        <div class="row">
                                            <div class="col-1 offset-1 bg-yellow d-flex justify-content-center align-content-center">
                                                <p class="text-dark font-weight-bold d-inline-block align-self-center m-auto text-center p-1">{{str_replace($new->created_at->format('m'),$months[$new->created_at->format('m')],$new->created_at->format('j m'))}}</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-9 mx-auto">
                                                <h6 class="text-dark">{{$new->title}}</h6>
                                                <p class="text-dark">
                                                    {!! $new->short_new !!}
                                                </p>
                                            </div>
                                            <div class="col-12 m-0 p-0 text-right">
                                                <a href="#" class="btn z-depth-0 text-uppercase bg-yellow text-dark rounded-0 m-0" data-new="{{$new->id}}">
                                                    далее
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0" style="margin-bottom: -4%">
                                <div class="row m-0 p-0 w-100">
                                    <div class="col-11 col-xl-10 mr-auto bg-white mt-5">
                                        <div class="row">
                                            <div class="col-1 offset-1 bg-yellow d-flex justify-content-center align-content-center">
                                                <p class="text-dark font-weight-bold d-inline-block align-self-center m-auto text-center p-1">{{str_replace($new->created_at->format('m'),$months[$new->created_at->format('m')],$new->created_at->format('j m'))}}</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-9 mx-auto">
                                                <h6 class="text-dark">{{$new->title}}</h6>
                                                <p class="text-dark">
                                                    {!! $new->short_new !!}
                                                </p>
                                            </div>
                                            <div class="col-12 m-0 p-0 text-right">
                                                <a href="#" class="btn z-depth-0 text-uppercase bg-yellow text-dark rounded-0 m-0" data-new="{{$new->id}}">
                                                    далее
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-0 p-0 w-100">
                                    <div class="col-12 m-0 p-0" style="z-index: 2">
                                        <img src="{{asset('images/news/'.$new->slug.'/cover/'.$new->cover)}}" alt="" class="img-fluid float-left d-block">
                                    </div>
                                </div>
                            </div>

                        @endif
                    @endforeach

                </div>

            </div>
        </div>
    </div>
    <div class="row p-0 m-0">
        <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 m-0 p-0 mx-auto">
            <div class="row m-0 p-0">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-9 mx-auto">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 d-flex justify-content-center align-content-center" data-social>
                            <div class="row position-relative align-self-center m-auto">
                                <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 mx-auto">
                                    <div class="card p-2 rounded-0 border-0">
                                        <div class="row">
                                            <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 m-2 mx-auto d-flex justify-content-center align-content-center">
                                                <i class="fab fa-instagram fa-4x"></i>
                                            </div>
                                            <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 m-2 mx-auto d-flex justify-content-center">
                                                <p>Instagram</p>
                                            </div>
                                            <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 mx-auto d-flex justify-content-center" data-link>
                                                <a href="#" class="show-social">Перейти</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 d-flex justify-content-center align-content-center" data-social>
                            <div class="row position-relative align-self-center m-auto">
                                <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 mx-auto">
                                    <div class="card p-2 rounded-0 border-0">
                                        <div class="row">
                                            <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 m-2 mx-auto d-flex justify-content-center align-content-center">
                                                <i class="fab fa-vk fa-4x"></i>
                                            </div>
                                            <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 m-2 mx-auto d-flex justify-content-center">
                                                <p>VKontakte</p>
                                            </div>
                                            <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 mx-auto d-flex justify-content-center" data-link>
                                                <a href="#" class="show-social">Перейти</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 d-flex justify-content-center align-content-center" data-social>
                            <div class="row position-relative align-self-center m-auto">
                                <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 mx-auto">
                                    <div class="card p-2 rounded-0 border-0">
                                        <div class="row">
                                            <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 m-2 mx-auto d-flex justify-content-center align-content-center">
                                                <i class="fab fa-facebook-f fa-4x"></i>
                                            </div>
                                            <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 m-2 mx-auto d-flex justify-content-center">
                                                <p>Facebook</p>
                                            </div>
                                            <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 mx-auto d-flex justify-content-center" data-link>
                                                <a href="#" class="show-social">Перейти</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 d-flex justify-content-center align-content-center" data-social>
                            <div class="row position-relative align-self-center m-auto">
                                <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 mx-auto">
                                    <div class="card p-2 rounded-0 border-0">
                                        <div class="row">
                                            <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 m-2 mx-auto d-flex justify-content-center align-content-center">
                                                <i class="fab fa-youtube fa-4x"></i>
                                            </div>
                                            <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 m-2 mx-auto d-flex justify-content-center">
                                                <p>YouTube</p>
                                            </div>
                                            <div class="col-8 col-lg-8 col-xl-8 p-5 p-xl-2 mx-auto d-flex justify-content-center" data-link>
                                                <a href="#" class="show-social">Перейти</a>
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
    <div class="modal fade" id="newsModal" tabindex="-1" role="dialog" aria-labelledby="newsTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100" id="newsTitle"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="newsContent">
                    <div class="row m-0 p-0">
                        <div class="col-xl-4 m-0 p-0 d-flex justify-content-center align-content-center">
                            <img src="" alt="" class="img-fluid align-self-center m-auto">
                        </div>
                        <div class="col-xl-8 p-3 text-justify" data-description></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-yellow btn-sm rounded-0" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
@endsection