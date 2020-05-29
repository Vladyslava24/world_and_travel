@extends('layouts.app_dark')

@section('title')
    Всі заявки
@endsection

@section('content')
<main>
    <div class="application all">
        <div class="title">Всі заявки</div>
            <form action="{{route('all-applications')}}" method="POST">
                @csrf
                @foreach($special_offers as $offer)
                    <div class="prop-container">
                        <div class="application-card all">
                            <div class="proposition">
                                <a class="cards-btn" href="#">
                                    <div class="cards card3">
                                        <img src="/pictures/tour/photo-1532971418251-318ab2a0bc0a.jpg">
                                        <div class="cards-text">
                                            <h2>{{$offer->hotel}}</h2>
                                            <p>{{$offer->country}}</p>
                                            <h3>{{$offer->price}} UAH</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="contact-info all">
                                <div class="tour-info-text tour">
                                    <p><strong>Звідки:</strong> {{$offer->from}}</p>
                                    <p><strong>Дата вильоту:</strong> {{$offer->arrive_data}}</p>
                                    <p><strong>Куди:</strong>{{$offer->country}}</p>
                                    <p><strong>Кількість ночей:</strong> {{$offer->night_amount}} ночей </p>
                                    <p><strong>Тип харування:</strong> {{$offer->meal_type}}</p>
                                </div>
                                <a class="btn more-all" href="{{route('application-delete')}}">Детальніше</a>
                                @foreach($applications as $application)
                                    <p class="contact-info-text-lighter tour">Дата створення заявки: {{$application->date}}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="space"></div>
                @endforeach

                @foreach($popular_tours as $popular_tour)
                    <div class="prop-container">
                    <div class="application-card all">
                        <div class="proposition">
                            <a class="cards-btn" href="#">
                                <div class="cards card3">
                                    <img src="/pictures/tour/photo-1469284390178-5ff99261c5b5.jpg">
                                    <div class="cards-text">
                                        <h2>{{$popular_tour->hotel}}</h2>
                                        <p>{{$popular_tour->country}}</p>
                                        <h3>{{$popular_tour->price}} UAH</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="contact-info all">
                            <div class="tour-info-text tour">
                                <p><strong>Звідки:</strong> {{$popular_tour->from}}</p>
                                <p><strong>Дата вильоту:</strong> {{$popular_tour->arrive_data}}</p>
                                <p><strong>Куди:</strong> {{$popular_tour->country}}</p>
                                <p><strong>Кількість ночей:</strong> {{$popular_tour->night_amount}} ночей </p>
                                <p><strong>Тип харування:</strong> {{$popular_tour->meal_type}}</p>
                            </div>
                            <a class="btn more-all" href=""{{route('popular-tour-data-one', $popular_tour->id)}}>Детальніше</a>
                            @foreach($applications as $application)
                                <p class="contact-info-text-lighter tour">Дата створення заявки: {{$application->date}}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
                    <div class="space"></div>
                @endforeach

                @foreach($tours as $tour)
                    <div class="prop-container">
                    <div class="application-card all">
                        <div class="proposition">
                            <a class="cards-btn" href="#">
                                <div class="cards card3">
                                    <img src="/img/photo-1520285774798-2f1616131a68.jpg">
                                    <div class="cards-text">
                                        <h2>{{$tour->hotel}}</h2>
                                        <p>{{$tour->country}}</p>
                                        <h3>{{$tour->price}} UAH</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="contact-info all">
                            <div class="tour-info-text tour">
                                <p><strong>Звідки:</strong> {{$tour->from}}</p>
                                <p><strong>Дата вильоту:</strong> {{$tour->arrive_date}}</p>
                                <p><strong>Куди:</strong>{{$tour->country}}</p>
                                <p><strong>Кількість ночей:</strong> {{$tour->night_amount}} ночей </p>
                                <p><strong>Тип харування:</strong> {{$tour->meal_type}}</p>
                            </div>
                            <a class="btn more-all" href="#">Детальніше</a>
                            @foreach($applications as $application)
                                <p class="contact-info-text-lighter tour">Дата створення заявки: {{$application->date}}</p>
                            @endforeach
                        </div>
                    </div>
                    </div>
                    <div class="space"></div>
                @endforeach

                @foreach($cruises as $cruise)
                <div class="prop-container">
                    <div class="card-text">Вибрана пропозиція</div>
                    <div class="application-card all">
                        <div class="proposition">
                            <a class="cards-btn" href="#">
                                <div class="cards card3">
                                    <img src="/pictures/cruise/oae_per.jpg">
                                    <div class="cards-text">
                                        <h2>{{$cruise->direction}}</h2>
                                        <p>на борту лайнера “{{$cruise->liner}}”</p>
                                        <h3>{{$cruise->price}} UAH</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="contact-info all">
                            <div class="tour-info-text cruise">
                                <p><strong>Напрямок:</strong> {{$cruise->direction}}</p>
                                <p><strong>Кількість ночей:</strong> {{$cruise->night_amount}} ночей </p>
                                <p><strong>Відправлення:</strong> {{$cruise->arrive_data}}</p>
                                <p><strong>Лайнер:</strong> “{{$cruise->liner}}”</p>
                                <p><strong>Маршрут:</strong> {{$cruise->waybill}}</p>
                            </div>
                            <a class="btn more-all" href="#">Детальніше</a>
                            @foreach($applications as $application)
                                <p class="contact-info-text-lighter cruise">Дата створення заявки: {{$application->date}}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="space"></div>
                @endforeach
        </form>
    </div>
</main>
@endsection
