@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-11">
                <div class="card rounded-0">
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
                                        <h5 class="my-2 h5">Добавление программы</h5>
                                        <div class="row p-0">
                                            <div class="col-xl-12">
                                                <div class="md-form">
                                                    <input type="text" id="programName" class="form-control" name="programName">
                                                    <label for="programName">Введите название программы</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="md-form">
                                                    <input type="text" id="programPrice" class="form-control" name="programPrice">
                                                    <label for="programPrice">Введите цену</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 mb-5">
                                                <div class="md-form">
                                                    <label class="text-dark">Краткое описание программы</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="md-form">
                                                    <textarea type="text" id="programShortDescription" class="md-textarea form-control" name="programShortDescription"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 mb-5">
                                                <div class="md-form">
                                                    <label class="text-dark">Полное описание программы</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="md-form">
                                                    <textarea type="text" id="programFullDescription" class="md-textarea form-control" name="programFullDescription"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="md-form text-right">
                                                    <button class="btn btn-outline-blue rounded-0" id="saveProgram">Сохранить</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="trains" role="tabpanel">
                                        <h5 class="my-2 h5">Добавление вида тренировок</h5>
                                        <div class="row p-0">
                                            <div class="col-xl-12">
                                                <div class="md-form">
                                                    <input type="text" id="trainName" class="form-control" name="trainName">
                                                    <label for="trainName">Введите название вида тренировки</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="md-form">
                                                    <input type="text" id="trainPrice" class="form-control" name="trainPrice">
                                                    <label for="trainPrice">Введите цену тренировки</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 mb-5">
                                                <div class="md-form">
                                                    <label class="text-dark">Описание вида тренировки</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="md-form">
                                                    <textarea type="text" id="trainDescription" class="md-textarea form-control" name="trainDescription"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="md-form">
                                                    <div class="file-field">
                                                        <div class="btn btn-primary rounded-0 btn-sm float-left">
                                                            <span>Примеры фото с тренировок</span>
                                                            <input type="file" id="trainPhotos" name="trainPhotos" multiple>
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input id="trainPhotosFilename" class="file-path validate" type="text" placeholder="Загрузите до 4-х фотографий" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="md-form text-right">
                                                    <button class="btn btn-outline-blue rounded-0" id="saveTrain">Сохранить</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="feedback" role="tabpanel">
                                        <h5 class="my-2 h5">Добавление отзывов</h5>
                                        <div class="row p-0">
                                            <div class="col-xl-12">
                                                <div class="md-form">
                                                    <input type="text" id="feedbackName" class="form-control" name="feedbackName">
                                                    <label for="feedbackName">Имя и фамилия оставившего отзыв</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="md-form">
                                                    <div class="file-field">
                                                        <div class="btn btn-primary rounded-0 btn-sm float-left">
                                                            <span>Фото</span>
                                                            <input type="file" id="feedbackPhoto" name="feedbackPhoto">
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input id="feedbackPhotoFilename" class="file-path validate" type="text" placeholder="Фото оставившего отзыв" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 mb-5">
                                                <div class="md-form">
                                                    <label class="text-dark">Текст отзыва</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="md-form">
                                                    <textarea type="text" id="feedbackText" class="md-textarea form-control" name="feedbackText"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="md-form">
                                                    <div class="file-field">
                                                        <div class="btn btn-primary rounded-0 btn-sm float-left">
                                                            <span>Примеры фото с тренировок</span>
                                                            <input type="file" id="feedbackPhotos" name="feedbackPhotos" multiple>
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input id="feedbackPhotosFilename" class="file-path validate" type="text" placeholder="Загрузите до 6-и фотографий" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="md-form">
                                                    <input type="text" id="feedbackInstagram" class="form-control" name="feedbackInstagram">
                                                    <label for="feedbackInstagram"><i class="fab fa-instagram"></i></label>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="md-form">
                                                    <input type="text" id="feedbackVK" class="form-control" name="feedbackVK">
                                                    <label for="feedbackVK"><i class="fab fa-vk"></i></label>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="md-form">
                                                    <input type="text" id="feedbackFacebook" class="form-control" name="feedbackFacebook">
                                                    <label for="feedbackFacebook"><i class="fab fa-facebook-f"></i></label>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="md-form text-right">
                                                    <button class="btn btn-outline-blue rounded-0" id="saveFeedback">Сохранить</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="photos" role="tabpanel">
                                        <h5 class="my-2 h5">Добавление фотографий</h5>
                                        <div class="row p-0">
                                            <div class="col-xl-12">
                                                <div class="md-form">
                                                    <div class="file-field">
                                                        <div class="btn btn-primary rounded-0 btn-sm float-left">
                                                            <span>Фотографии в галерею результатов</span>
                                                            <input type="file" id="galleryPhotos" name="galleryPhotos" multiple>
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input id="galleryPhotosFilename" class="file-path validate" type="text" placeholder="Загрузите до 20-и фотографий" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="md-form text-right">
                                                    <button class="btn btn-outline-blue rounded-0" id="saveGallery">Сохранить</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="new" role="tabpanel">
                                        <h5 class="my-2 h5">Добавление новости</h5>
                                        <div class="row p-0">
                                            <div class="col-xl-12">
                                                <div class="md-form">
                                                    <input type="text" id="newTitle" class="form-control" name="newTitle">
                                                    <label for="newTitle">Введите название новости</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="md-form">
                                                    <div class="file-field">
                                                        <div class="btn btn-primary rounded-0 btn-sm float-left">
                                                            <span>Фото</span>
                                                            <input type="file" id="newPhoto" name="newPhoto">
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input id="newPhotoFilename" class="file-path validate" type="text" placeholder="Обложка новости" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 mb-5">
                                                <div class="md-form">
                                                    <label class="text-dark">Краткое описание новости</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="md-form">
                                                    <textarea type="text" id="newShortDescription" class="md-textarea form-control" name="newShortDescription"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 mb-5">
                                                <div class="md-form">
                                                    <label class="text-dark">Полное описание новости</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="md-form">
                                                    <textarea type="text" id="newFullDescription" class="md-textarea form-control" name="newFullDescription"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="md-form text-right">
                                                    <button class="btn btn-outline-blue rounded-0" id="saveNew">Сохранить</button>
                                                </div>
                                            </div>
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
