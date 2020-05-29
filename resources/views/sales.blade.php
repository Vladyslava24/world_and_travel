@extends('layouts.app_light')

@section('title')
    Акції
@endsection

@section('content')
    <div class="page">
        <section class="section_blue">
            <div class="tours-text_blue">Акції і спеціальні пропозиції</div>
            <div class="items-container sales">
                @foreach($sales as $sale)
                <div class="cards-tours_blue card1">
                    <img src="/img_desc_sale/{{$sale->images[0]['img']}}" alt="{{$sale->hotel}}">
                    <div class="text-block_blue">
                        <h2>{{$sale->hotel}} пропонує неймовірні знижки!</h2>
                        <p>Оберіть маршрут по Середземномор'ю, Північній Європі і Еміратам з датами відправлення: весна 2020 - зима 2021.</p>
                        <p>Забронюйте свій круїз до 31 березня, щоб отримати чудову знижку до 50%!</p>
                        <p>ПЕРІОД ДІЇ: з 04.03.2020 по 31.08.2020</p>
                        <a class="search-btn more" href="{{route('sale-data', $sale->id)}}"><span>Дізнатись більше</span></a>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <div class="book-tour">
            <div class="hero-text">
                <div class="book-text">Подорожувати з нами - завжди вигідно! </div>
                <div class="book-text">World&Travel</div>
            </div>
        </div>
    </div>
@endsection
