@extends('layouts.admin')

@section('title',  isset($post) ? "Редактировать статью ID {$post->id}" : 'Добавить статью')

@section('content')
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">{{ isset($post) ? "Редактировать статью ID {$post->id}" : 'Добавить статью' }}</h3>

        <div class="mt-8">

        </div>

        <div class="mt-8">
            <form enctype="multipart/form-data" class="space-y-5 mt-5" method="POST" action="{{ isset($post) ? route("admin.news.update", $post->id) : route("admin.news.store") }}">
                @csrf

                @if(isset($post))
                    @method('PUT')
                @endif

                <input name="vk_id" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('vk_id') border-red-500 @enderror" placeholder="vk_id" value="{{ $post->vk_id ?? '' }}" />

                @error('vk_id')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="text" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('text') border-red-500 @enderror" placeholder="Текст статьи" value="{{ $post->text ?? '' }}" />

                @error('text')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="photo" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('photo') border-red-500 @enderror" placeholder="Фото" value="{{ $post->photo ?? '' }}" />

                @error('photo')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="date" type="datetime-local" class="w-full h-12 border border-gray-800 rounded px-3 @error('date') border-red-500 @enderror" placeholder="Дата" value="{{ $post->date ?? '' }}" />

                @error('date')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Сохранить</button>
            </form>
        </div>
    </div>
@endsection