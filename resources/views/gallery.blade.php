@extends('layouts.app')

@section('title-block')Галерея@endsection

@section('content')
<div class="main-header bg-white rounded">
    <h2>Видео парка</h2>
</div>
<div class="gallery-video container">
    <div class="row">
        <div class="gallery-video-item col-xl-4">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/XfeeGoTPg0o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="gallery-video-item col-xl-4">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/XfeeGoTPg0o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="gallery-video-item col-xl-4">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/XfeeGoTPg0o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>
<div class="main-header bg-white rounded">
    <h2>Фото парка</h2>
</div>
<div class="gallery-photo container">
    <div class="fotorama" data-nav="thumbs" data-allowfullscreen="true" data-autoplay="true" data-keyboard="true" data-loop="true">
        <img src="https://s.fotorama.io/1.jpg">
        <img src="https://s.fotorama.io/2.jpg">
    </div>
</div>
@endsection