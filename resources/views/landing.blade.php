@extends('layouts.app_light')

@section('title')
    World&travel
@endsection

@section('content')
    <main>
    <div class="hero-section">
        <div class="mySlides fade">
            <div class="hero-div p1">Відкривай світ з нами</div>
            <img src="/img/jamie-fenn-WdQuEEJe-O0-unsplash.jpg">
        </div>
        <div class="mySlides fade">
            <div class="hero-div p2">Насолоджуйся життям</div>
            <img src="/img/mantas-hesthaven-_g1WdcKcV3w-unsplash.jpg">
        </div>
        <div class="mySlides fade">
            <div class="hero-div p3">World&Travel</div>
            <img src="/img/will-truettner-7ZZ_FmVelQY-unsplash.jpg">
        </div>
    </div>
    <div class="sales">
        <p class="cards-title">Спеціальні пропозиції</p>
        <div class="sales-container">
                @foreach($special_offers as $offer)
                    <a class="cards-btn" href="{{route ('sale-data-one', $offer->id)}}">
                        <div class="cards card1">
                            <img src="/img/{{$offer->images[0]['img']}}" alt="{{$offer->hotel}}">
                            <div class="cards-text">
                                <h2>{{$offer->hotel}}</h2>
                                <p>{{$offer->country}}</p>
                                <h3>від {{$offer->price}} UAH</h3>
                            </div>
                        </div>
                @endforeach
            </a>
        </div>
    </div>
    <div class="tours">
        <div class="tours-text">Популярні тури</div>
        <div class="items-container">
            @foreach($tours as $tour)
            <div class="cards-tours card1">
                <img src="/img/{{$tour->images[0]['img']}}" alt="{{$tour->hotel}}">
                <div class="text-block">
                    <h2>{{$tour->hotel}}</h2>
                    <p>від {{$tour->price}} UAH</p>
                    <a class="more-btn" href="{{route ('tour-data-one', $tour->id)}}">Дізнатись більше</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="book-tour">
        <div class="hero-text">
            <div class="book-text">Відправимося в подорож разом?</div>
            <a class="btn book" href="{{route ('tour')}}">Вибрати тур</a>
        </div>
    </div>
    </main>
@endsection
