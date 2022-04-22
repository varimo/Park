@extends('layouts.logform')

@section('title-block')Авторизация@endsection

@section('content')
<div id="id01" class="modal">
    <form method="POST" action="{{ route("admin.login_process") }}" class="modal-content">
        <div class="container">
            <h1 class="">Вход</h1>
            @csrf
            <label for="email"><b>Почта</b></label>
            <input name="email" type="text" class="@error('email') border-red-500 @enderror" placeholder="Email" />

            @error('email')
            <p class="text-red-500">{{ $message }}</p>
            @enderror

            <label for="password"><b>Пароль</b></label>
            <input name="password" type="password" class="@error('password') border-red-500 @enderror" placeholder="Пароль" />

            @error('password')
            <p class="text-red-500">{{ $message }}</p>
            @enderror

            <button type="submit" class="">Войти</button>
        </div>
    </form>
</div>
@endsection