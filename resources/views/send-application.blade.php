@extends('layouts.app_dark')

@section('title')
    Заявка надіслана
@endsection

@section('content')
    <main>
        <div class="response-application">
            <img class="response-img" src="/img/icons/beach.svg">
            <div class="response-text">
                <h2>Дякуємо за заповнення заявки!</h2>
                <p>Вона буде опрацьована протягом 24 годин, після чого з вами зв'яжеться наш співробник.</p>
                <a class="search-btn more continue" href="{{route ('tour')}}">Переглянути інші тури</a>
            </div>
        </div>
    </main>
@endsection
