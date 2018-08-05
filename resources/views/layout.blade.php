<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('custom/mdbootstrap/css/mdb.css')}}">
    <link rel="stylesheet" href="{{asset('custom/mdbootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('custom/fontawesome-free/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('custom/client.css')}}">
    <title>TRIATLETIZM</title>
</head>
<body>
<div class="container-fluid m-0 p-0">
    @include('page-parts.header')
    @yield('content')
    @include('page-parts.footer')
</div>
<script src="{{asset('custom/jquery/dist/jquery.js')}}"></script>
<script src="{{asset('custom/popper.js/dist/umd/popper.js')}}"></script>
<script src="{{asset('custom/mdbootstrap/js/mdb.js')}}"></script>
<script src="{{asset('custom/mdbootstrap/js/bootstrap.js')}}"></script>
<script src="{{asset('custom/fontawesome-free/js/all.js')}}"></script>
<script src="{{asset('custom/client.js')}}"></script>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script>
    ymaps.ready(init);
    let myMap,
        myPlacemark;
    function init(){
        myMap = new ymaps.Map("map-container", {
            center: [53.937478, 27.584271],
            controls: [],
            zoom: 17
        });
        myPlacemark = new ymaps.Placemark([53.937478, 27.584271], {
            hintContent: '"Sportfamily"',
            balloonContentBody: ['<p class="animated fadeIn">тренажёрный зал "Sportfamily"<br>ул. М.Богдановича 134, 3 этаж <br>сегодня с 8:00 до 21:00</p>']
        });
        myMap.behaviors.disable('scrollZoom');
        myMap.geoObjects.add(myPlacemark);
    }
</script>
</body>
</html>