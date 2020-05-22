@extends('layouts.app')

@section('title')
    Акції
@endsection

@section('content')
    <div class="page">

        <section class="section_blue">
            <div class="tours-text_blue">Акції і спеціальні пропозиції</div>
            <div class="row">
                @foreach($sales as $sale)
                <div class="column">
                    <div class="cards-tours_blue card1">

                        <img src="img_desc_sale/s1.jpg">
                        <div class="text-block_blue">
                            <h2>{{$sale->hotel}} пропонує неймовірні знижки!</h2>
                            <p>Оберіть маршрут по Середземномор'ю, Північній Європі і Еміратам з датами відправлення: весна 2020 - зима 2021.</p>
                            <p>Забронюйте свій круїз до 31 березня, щоб отримати чудову знижку до 50%!</p>
                            <p>ПЕРІОД ДІЇ: з 04.03.2020 по 31.08.2020</p>
                            <form action="{{route ('sale-data', $sale->id)}}" method="POST">
                                @csrf
                                <button class="btn sale" type="submit"><span>Дізнатись більше</span></button>
                            </form>
                        </div>

                    </div>



<!--
                    <div class="cards-tours_blue card1">
                        <img src="img_desc_sale/s3.jpg">
                        <div class="text-block_blue">
                            <h2>MSC надає пакет Dine & Drink безкоштовно!</h2>
                            <p>У пакет входять різні вина, які подаються келихом, мінеральна вода, газовані напої і фруктові соки. </p>
                            <p>Пакет з напоями доступний всім пасажирам, які подорожують у каютах з можливостями Bella і Fantastica.</p>
                            <p>ПЕРІОД ДІЇ: з 04.05.2020 по 31.08.2020</p>
                            <button class="btn sale"><span>Дізнатись більше</span></button>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="cards-tours_blue card1">
                        <img src="img_desc_sale/s2.jpg">
                        <div class="text-block_blue">
                            <h2>Замов круїзи на лайнерах класу LUX
                                на Azamara!</h2>
                            <p>Акція поширюється на всі категорії кают, на всі круїзи Azamara з відправленнями c 14.04.2020 по 21.11.2021 року</p>
                            <p>Вартість вказана вже з урахуванням акції при виборі відповідного тарифу.</p>
                            <p>ПЕРІОД ДІЇ: по 29.05.2020</p>
                            <button class="btn sale"><span>Дізнатись більше</span></button>
                        </div>
                    </div>
                    <div class="cards-tours_blue card1">
                        <img src="img_desc_sale/s4.jpg">
                        <div class="text-block_blue">
                            <h2>FUN & SUN в Єгипті - віза за наш рахунок!</h2>
                            <p>Щоб сімейний відпустку став ще більш вигідним з World&Travel, ми підготували спеціальну акцію - віза за наш рахунок!</p>
                            <p>Ми компенсуємо вартість візи в розмірі 25 $ при бронюванні одного з готелів з сімейної концепцією в Хургаді!</p>
                            <p>ПЕРІОД ДІЇ: з 01.04.2020 </p>
                            <button class="btn sale"><span>Дізнатись більше</span></button>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <div class="book-tour">
            <div class="hero-text">
                <div class="book-text">Подорожувати з нами - завжди вигідно! </div>
                <div class="book-text">World&Travel</div>
            </div>-->
        </div>
                @endforeach
    </div>
        </section>
    </div>
@endsection
