@extends('layouts.app')

@section('title-block')Режим работы@endsection

@section('content')
<div class="main-header bg-white rounded">
    <h2>Режим работы</h2>
</div>
<div class="operation-mode">
    <div class="operation-mode_text container">
        <div class="row">
            <div class="col-xl-6">
                <img src="/storage/img/значки/clock.png" alt="">
                <p><br>Работаем для вас каждый день!</p>
                <p>В будние и выходные дни<br>с 10:00 до 20:00</p>
            </div>
            <div class="operation-mode_img col-xl-6">
                <img src="/storage/img/logo.jpg" alt="">
            </div>
        </div>
    </div>
</div>
@endsection