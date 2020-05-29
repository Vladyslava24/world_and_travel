@extends('layouts.app_dark')

@section('title')
    Тури
@endsection

@section('content')
    <main>
        <div class="search">
            <div class="title"><span>Пошук турів</span></div>
            <div class="container-form">
                <form>
                    <div class="forms">
                        <div class="form-block">
                            <div class="form_text"><span>Країна</span></div>
                            <select class="form-control mr-sm-2"id="country" name="country">
                                <option value="egypt">Єгипет</option>
                                <option value="greece">Греція</option>
                                <option value="spain">Іспанія</option>
                                <option value="oae">ОАЕ</option>
                                <option value="shri-lanka">Шрі-Ланка</option>
                            </select>
                        </div>
                        <div class="form-block">
                            <div class="form_text">
                                <span>Виїзд з</span>
                            </div>
                            <select class="form-control mr-sm-2"id="country" name="country">
                                <option value="kiev">Київ</option>
                                <option value="dnipro">Дніпро</option>
                                <option value="kharkiv">Харків</option>
                                <option value="odesa">Одеса</option>
                                <option value="vinitsia">Віниця</option>
                                <option value="lviv">Львів</option>
                            </select>
                        </div>
                        <div class="form-block">
                            <div class="form_text"><span>Тривалість</span></div>
                            <input class="form-control date" type="date" name="calendar" value="2020-06-01"
                                   max="2020-09-04" min="2020-05-29">
                        </div>
                        <div class="form-block s">
                            <a class="search-btn search" href="#">Пошук</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="tours-container">
            <div class="title">Всі тури</div>
            <div class="items-container">
                @foreach($tour_containers as $tour_container)
                    <div class="cards-tours tour1">
                        <img src="pictures/tour/{{$tour_container->images[0]['img']}}" alt="{{$tour_container->country}}">
                        <div class="text-block">
                            <h2>{{$tour_container->country}}</h2>
                            <h3>{{$tour_container->hotel}}</h3>
                            <p>від {{$tour_container->price}} UAH</p>
                            <a class="search-btn more" href="{{route('tour-data', $tour_container->id)}}">Дізнатись більше</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection

