@extends('layouts.app')

@section('title-block')БеLка Park @endsection

@section('content')
    <div class="main-header bg-white rounded">
        <h1>Мир приключений ждет тебя!</h1>
    </div>
    <div class="about-us container ml-10 mr-10">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-sm-12">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/XfeeGoTPg0o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="icons-block ml-10 mr-10 mt-5 mb-5 container">
        <div class="icons-block-header">
            <h2>Мы предлагаем</h1>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 mt-5">
                <div class="icons-block-item border border-success">
                    <a href="{{ route('price') }}#family">
                        <div class="logo mb-3">
                            <img src="/storage/img/menu-icons/лес.png" alt="Отдых с семьей">
                        </div>
                        <p>Отдых с семьей</p>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 mt-5">
                <div class="icons-block-item border border-success">
                    <a href="{{ route('price') }}#event">
                        <div class="logo mb-3">
                            <img src="/storage/img/menu-icons/день рождения.png" alt="День рождения">
                        </div>
                        <p>День рождения</p>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 mt-5">
                <div class="icons-block-item border border-success">
                    <a href="{{ route('price') }}#event">
                        <div class="logo mb-3">
                            <img src="/storage/img/menu-icons/корпоратив.png" alt="Корпоративы">
                        </div>
                        <p>Корпоративы</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection