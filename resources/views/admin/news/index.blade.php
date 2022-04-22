@extends('layouts.admin')

@section('title', 'Статьи')

@section('content')
<h1>Новости</h1>
<div class="mt-8">
        <a href="{{ route("admin.news.create") }}" class="text-indigo-600 hover:text-indigo-900">Добавить</a>
    </div>
<div>
    <table class="min-w-full">
        <thead>
            <tr>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                    Заголовок</th>
                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
            </tr>
        </thead>
        <tbody class="bg-white">
            @foreach($posts as $post)
            <tr>
                <td>
                    <div>{{ $post->vk_id }}</div>
                </td>
                <td>
                    <div>
                        <a href="{{ route("admin.news.edit", $post->id) }}" class="text-indigo-600 hover:text-indigo-900">Редактировать</a>
                    </div>
                    <div>
                        <form action="{{ route("admin.news.destroy", $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="">Удалить</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection