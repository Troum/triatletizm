@foreach($posts as $post)
    <div class="col-xl-12 m-0 p-0 animated fadeIn">
        <div class="row mt-2 mb-5 pb-5 pt-4 d-flex">
            <div class="col-7 col-sm-7 col-md-7 col-lg-7 col-xl-10 m-0 p-0 mx-auto">
                <div class="row position-relative m-0 p-0">
                    <div class="col-xl-2 m-0 p-0 position-absolute z-depth-1" style="top: 0; right: 1%;z-index: 1">
                        <img src="{{asset('images/corner.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row mt-3 mb-3 p-0 d-flex justify-content-center align-content-center" >
                    <div class="col-xl-11 mt-2 p-4 align-self-center m-auto bg-light z-depth-1" style="z-index: 2">
                        <div class="row m-0 p-0">
                            <div class="col-xl-3">
                                <div class="row m-0 p-0">
                                    <div class="col-xl-8 mx-auto m-0 p-0">
                                        <div class="row m-0 p-0">
                                            <div class="col-xl-12 m-0 p-0 text-center">
                                                <img src="{{asset('images/result/'.$post->id.'/cover/'.$post->cover)}}" alt="" class="img-fluid rounded-circle">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 mx-auto">
                                        <p class="font-weight-bold">
                                            {{$post->name}}
                                        </p>
                                    </div>
                                    <div class="col-xl-8 mx-auto">
                                        @if(!empty($post->instagram))
                                            <a href="{{$post->instagram}}">
                                                <i class="fab fa-instagram fa-1x mr-3"></i>
                                            </a>
                                        @endif
                                        @if(!empty($post->vk))
                                            <a href="{{$post->vk}}">
                                                <i class="fab fa-vk fa-1x mr-3"></i>
                                            </a>
                                        @endif
                                        @if(!empty($post->facebook))
                                            <a href="{{$post->facebook}}">
                                                <i class="fab fa-facebook-f fa-1x"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-9">
                                <div class="row">
                                    <div class="col-11 mx-auto d-flex justify-content-end">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-11 mt-2 p-2 mx-auto text-justify">
                                        {!! $post->feedback !!}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-11 mx-auto">
                                        <div class="row mt-xl-3 mb-xl-3 p-0">
                                            @foreach($post->photos as $photo)
                                                <a href="{{asset('images/result/'.$post->id.'/'.$photo->photo)}}" data-toggle="lightbox" data-gallery="example-gallery" style="width: 198px; height: 123px;">
                                                    <div style="width: 198px; height: 123px; background-image: url({{asset('images/result/'.$post->id.'/'.$photo->photo)}}); background-size: cover"></div>
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row position-relative m-0 p-0">
                    <div class="col-xl-2 m-0 p-0 position-absolute z-depth-1" style="bottom: 0; left: 1%;z-index: 1">
                        <img src="{{asset('images/corner.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
