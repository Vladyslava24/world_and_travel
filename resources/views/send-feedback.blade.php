@extends('layouts.app_dark')

@section('title')
    Відгук надісланий
@endsection

@section('content')
    <main>
        <div class="response-application">
            <img class="response-img" src="/img/icons/beach.svg">
            <div class="response-text">
                <h2>Дякуємо за ваш відгук!</h2>
                <p>Нам дуже важлива думка наших користувачів.</p>
                <a class="search-btn more continue" href="{{route ('tour')}}">Переглянути тури</a>
            </div>
        </div>
    </main>
@endsection
