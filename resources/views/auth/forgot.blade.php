@extends('layouts.logform')

@section('title-block')Восстановление пароля@endsection

@section('content')
<div id="id01" class="modal">
    <form method="POST" action="{{ route("forgot_process") }}" class="modal-content">
        <div class="container">
            <h1 class="">Восстановление пароля</h1>
            @csrf
            <input name="email" type="text" class="@error('email') border-red-500 @enderror" placeholder="Email" />
            @error('email')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <div>
                <a href="{{ route("login") }}" class="">Вспомнил пароль</a>
            </div>
            <button type="submit" class="">Восстановить</button>
        </div>
    </form>
</div>
@endsection