@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="card">
                <div class="card-header">Панель управления</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="row">
                            <div class="col-xl-4">
                                <ul class="nav  md-pills pills-primary flex-column" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#programs" role="tab">Добавить программу</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#trains" role="tab">Добавить вид тренировки</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#feedback" role="tab">Добавить отзыв</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#photos" role="tab">Добавить фотографии</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#new" role="tab">Добавить новость</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xl-8">
                                <div class="tab-content vertical">
                                    <div class="tab-pane fade in show active" id="programs" role="tabpanel">
                                        <h5 class="my-2 h5">Добавление тренировок</h5>
                                        <div class="row p-0">
                                            <div class="col-xl-12">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="trains" role="tabpanel">
                                        <h5 class="my-2 h5">Добавление вида тренировок</h5>
                                        <div class="row p-0">

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="feedback" role="tabpanel">
                                        <h5 class="my-2 h5">Добавление отзывов</h5>
                                        <div class="row p-0">

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="photos" role="tabpanel">
                                        <h5 class="my-2 h5">Добавление фотографий</h5>
                                        <div class="row p-0">

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="new" role="tabpanel">
                                        <h5 class="my-2 h5">Добавление новости</h5>
                                        <div class="row p-0">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Nav tabs -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
