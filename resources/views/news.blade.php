@extends('layouts.app')

@section('title-block')Новости@endsection

@section('content')
<div class="main-header bg-white rounded">
    <h2>Новости</h2>
</div>
<div class="news">
    @foreach($data as $el)
    <div class="news-item">
        <article>
            <p>{{ $el->text }}</p>
            <p>{{ $el->atricle }}</p>
            <div class="news-item-photo">
                <img src="{{ $el->photo }}" alt="">
            </div>
            <div class="news-item-date">
                <p>{{ date_format(date_create($el->date), 'd-m-Y H:i:s') }}</p>
            </div>
        </article>
    </div>
    @endforeach
</div>
<div class="news-pagination">
    <nav>
        <ul class="pagination">
            @for ($i = 1; $i <= $count; $i++) 
            <li class="page-item"><a class="page-link" href="{{ route('news') }}?page={{ $i }}">{{ $i }}</a></li>
            @endfor
        </ul>
    </nav>
</div>
@endsection