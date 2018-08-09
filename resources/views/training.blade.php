@extends('layout')
@section('content')
    <div class="row m-0 p-0 d-flex">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 m-0 p-0 position-relative d-flex justify-content-center align-content-center">
            <div class="row m-0 p-0">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 m-0 p-0">
                    <img src="{{asset('images/training-main.png')}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row m-0 p-0 position-absolute" style="left: 0; bottom: 5%">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 m-0 p-0 mr-xl-auto">
                    <img src="{{asset('images/training.png')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div class="row m-0 p-0">
        <div class="col-xl-12 m-0 p-0r">
            <div class="row mt-4 pt-2 d-flex">
                <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 m-0 p-0 mx-auto">
                    <div class="row m-0 p-0">
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 mx-auto mt-3 mb-3 text-justify">
                            <div class="row">
                                <div class="col-xl-12 p-2 text-center">
                                    <h2 class="font-weight-light text-uppercase text-dark">нужен тренер?</h2>
                                </div>
                                <div class="col-xl-12 p-2 text-center">
                                    Я предоставляю услуги индивидуального и группового тренинга
                                    на основе <span style="text-decoration: underline">моих программ</span>, что позволит вам не только оценить результативность моих методик, но и снизить уроверь возможного травматизма, а так же поличить квалифицированную консультацию, отработать технику и проверить на что вы способны безо свяких возможных рисков.
                                </div>
                                <div class="col-xl-10 mt-2 mx-auto p-2 text-center">
                                Оставьте заявку на выбранный вид тренировки тут:
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2 mb-1 pb-2 pt-4 d-flex">
                <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 m-0 p-0 mx-auto">
                    <div class="row m-0 p-0">
                        <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-8 mx-auto mt-3 mb-3 text-justify">
                            <div class="row d-flex justify-content-around">
                                @foreach($trains as $train)
                                <div class="col-xl-3 mx-auto p-2 border border-dark text-center">
                                    <a class="font-weight-bold" data-train="{{$train->id}}">
                                        {{$train->train}}
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-2 d-flex">
                <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 m-0 p-0 mx-auto">
                    <div class="row m-0 p-0">
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-10 mx-auto mt-3 mb-3 text-justify">
                            <div class="row" data-trains>

                                @foreach($trains as $train)

                                <div class="col-xl-12 d-none animated fadeIn" id="{{$train->id}}">
                                    <div class="row mt-xl-4 pt-xl-3">
                                        <div class="col-xl-8 mx-auto">
                                            {!! $train->train_description !!}
                                        </div>
                                        <div class="col-xl-8 mx-auto">
                                            <div class="row mt-xl-4 pt-xl-4 mb-xl-4 pb-xl-4 d-flex justify-content-center">
                                                @foreach($train->photos as $photo)
                                                    <a href="{{asset('images/trains/'.$train->id.'/related/'.$photo->photo)}}" data-toggle="lightbox" data-gallery="example-gallery" style="width: 150px; height: 97px;">
                                                        <div style="width: 150px; height: 97px; background-image: url({{asset('images/trains/'.$train->id.'/related/'.$photo->photo)}}); background-size: cover"></div>
                                                    </a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-0 p-0">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-12 p-0 mb-5">
                                        <div class="row position-relative d-flex justify-content-center align-content-center" data-card>
                                            <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 mx-auto" data-container>
                                                <div class="card p-2 rounded-0 border-0" data-contact>

                                                    <div class="card-body p-xl-1">
                                                        <div class="row mt-3 mb-3">
                                                            <div class="col-xl-3 d-flex justify-content-center align-content-center">
                                                                <label class="d-inline-block align-self-center mr-auto" for="name"><small>Ваше имя</small></label>
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <input id="name" name="name" type="text" class="form-control rounded-0">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-xl-3 d-flex justify-content-center align-content-center">
                                                                <label class="d-inline-block align-self-center mr-auto" for="phone"><small>Номер телефона</small></label>
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <input id="phone" name="phone" type="text" class="form-control rounded-0">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-xl-3 d-flex justify-content-center align-content-center">
                                                                <label class="d-inline-block align-self-center mr-auto" for="email"><small>E-mail</small></label>
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <input id="email" name="email" type="email" class="form-control rounded-0">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-xl-4 d-flex justify-content-center align-content-center">
                                                                <label class="d-inline-block align-self-center mr-auto" for="goal"><small>Цель (необязательно)</small></label>
                                                            </div>
                                                            <div class="col-xl-8">
                                                                <input id="goal" name="goal" type="text" class="form-control rounded-0">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-5 mb-3">
                                                            <div class="col-xl-4 text-center mx-auto">
                                                                <a class="btn bg-yellow rounded-0">
                                                                    Отправить заявку
                                                                </a>
                                                            </div>
                                                            <div class="col-xl-12 text-center mx-auto">
                                                                или
                                                            </div>
                                                            <div class="col-xl-12 text-center mx-auto">
                                                                <a class="btn bg-yellow rounded-0" data-buy="{{$train->id}}">
                                                                    Купить
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-5 mb-5 p-5">
                                                            <div class="col-xl-9 text-center mx-auto">
                                                                <small>После получения заявки я перезвоню вам в течении одного рабочего дня что бы уточнить
                                                                детали и договориться о времени
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="train col-10 align-self-auto w-100 position-absolute" style="bottom: -3%; z-index: 0"></div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="buyModal" tabindex="-1" role="dialog" aria-labelledby="buyTitle" aria-hidden="true">
        <div class="modal-dialog modal modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title w-100" id="buyTitle"></h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="buyContainer">
                    <form method="POST" action="https://money.yandex.ru/quickpay/confirm.xml">
                        <input type="hidden" name="receiver" value="410017300425884">
                        <input type="hidden" name="quickpay-form" value="shop">
                        <input type="hidden" name="targets" value="" class="form-control">
                        <input type="hidden" name="need-fio" value="true">
                        <input type="hidden" name="need-email" value="true">
                        <input type="hidden" name="need-phone" value="false">
                        <input type="hidden" name="need-address" value="false">
                        <div class="md-form">
                            <div class="row m-0 p-0">
                                <div class="col-xl-6">
                                    <input type="text"  class="form-control rounded-0" name="sum" value="" data-type="number">
                                </div>
                                <div class="col-xl-3">
                                    <div class="row p-0">
                                        <div class="col-xl-6 d-flex justify-content-center align-content-center">
                                            <input type="radio" name="paymentType" value="AC" id="cardPay">
                                            <label for="cardPay" class="d-inline-block fab fa-cc-visa fa-2x text-warning align-self-center m-auto" data-pay></label>
                                        </div>
                                        <div class="col-xl-6 d-flex justify-content-center align-content-center">
                                            <input type="radio" name="paymentType" value="PC" id="walletPay">
                                            <label for="walletPay" class="d-inline-block fas fa-wallet fa-2x text-warning align-self-center m-auto" data-pay></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <button type="submit" class="btn btn-warning btn-sm rounded-0">Купить</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection