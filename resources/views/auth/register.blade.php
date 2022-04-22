@extends('layouts.logform')

@section('title-block')Регистрация@endsection

@section('content')
<div id="id01" class="modal">
    <form method="POST" action="{{ route("register_process") }}" class="modal-content">
        <div class="container">
            <h1 class="">Регистрация</h1>
            @csrf
            <input name="name" type="text" class="@error('name') border-red-500 @enderror" placeholder="Имя" />
            @error('name')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <input name="email" type="text" class="@error('email') border-red-500 @enderror" placeholder="Email" />
            @error('email')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <input name="password" type="password" class="@error('password') border-red-500 @enderror" placeholder="Пароль" />
            @error('password')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <input name="password_confirmation" type="password" class="@error('password_confirmation') border-red-500 @enderror" placeholder="Подтверждение пароля" />
            @error('password_confirmation')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <div>
                <a href="{{ route("login") }}" class="">Есть аккаунт?</a>
            </div>
            <button type="submit" class="">Зарегистрироваться</button>
        </div>
    </form>
</div>
@endsection