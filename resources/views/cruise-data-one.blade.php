@extends('layouts.app_light')

@section('title')
    Круїз
@endsection

@section('content')
<main>
    <form action="{{route('cruise-data-one', $cruise->id)}}" method="POST">
        @csrf
    <div class="image-section">
        <div class="hotel">
            <div class="hotel-title">{{$cruise->direction}}</div>
        </div>
        <p>25.04.21–28.04.21, 3 ночі, 2 дорослих</p>
        <div class="img-hotel">
            @foreach($cruise->images as $img)
                <div class="Slides">
                    <!--<div class="numbertext">1 / 6</div> -->
                    <img src="/pictures/cruise/{{$img['img']}}" style="width:100%">
                </div>
            @endforeach
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
            <div class="caption-container">
                <p id="caption"></p>
            </div>
            <div class="row-2">
                @foreach($cruise->images as $img)
                    <div class="column-2">
                        <img class="demo cursor" src="/pictures/cruise/{{$img['img']}}" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="description">
        <div class="title">Опис</div>
        <div class="description-section">
            <p>Costa Fascinosa - інноваційний, суперсучасний лайнер компанії NCL, на борту якого навіть досвідчені мандрівники відкриють для себе нові грані круїзного відпочинку! Тут Ви зможете насолоджуватися розвагами «нон-стоп» - бродвейські шоу, концерти, комедійні та циркові вистави не залишать Вам ні хвилини на нудьгу.
                Корпус лайнера прикрашений оригінальним різнобарвним орнаментом, інтер'єр виконаний в тому ж стилі - яскраві барви для яскравих емоцій. На борту гості зможуть відчути себе як на повноцінному курорті - тут можна від душі повеселитися в аквапарку, пізнати спавжній релакс в Mandara Spa, продовжити життя сміхом в Comedy Club і, звичайно, відпочити після насиченого дня в одному з численних барів, потягуючи улюблений напій. Крім того, на борту передбачено все для сімейного відпочинку - дитячий басейн, зал відеоігор, міні-клуби для дітей різного віку.</p>
            <p>Харчування на лайнері:
                Два основних ресторани (харчування включено у вартість круїзу):
                The Manhattan Room (592 місця) - двопалубний ресторан, нагадує витончений клуб в стилі арт-деко з танцполом і живою музикою. Особливо вражають величезні скляні вікна на всю висоту стіни з виглядом на море.
                Taste (526 місць) - європейський ресторан в стилі ретро з цегляним оздобленням, оксамитовими шторами і стравами інтернаціональної кухні.
            </p>
            <p>
                Альтернативні ресторани і кафе (включені у вартість круїзу):
                Garden Café (680 місць) - місткий альтернативний ресторан з великим вибором закусок і десертів.
                Great Outdoors (366 місць) - велике відкрите кафе зі стравами світової кухні.
                Spice H2O (166 місць) - відкрите кафе для дорослих з різноманітністю страв азіатської та латиноамериканської кухонь.
                O'Sheehan's Neighbourhood Bar & Grill (275 місць) - класичний американський спорт-бар і гриль, відкритий 24 години на добу. Поруч розташований боулінг на три доріжки.
                Shanghai's Chinese Restaurant (94 місця) - ресторан, де поєднуються традиційні страви китайської та інших азіатських кухонь.
                Shanghai's Noodle Bar - в меню локшина, дімсам1 та інші страви.
                24-H Room Service - цілодобова доставка їжі в каюту (доставка континентального сніданку з 6:30 до 10:00 - безкоштовно, в інший час стягується плата в розмірі $ 7.95 за замовлення).  1Дімсам - легкі страви, які в китайській традиції чаювання подають до столу разом з чашкою китайського чаю сорту пуер, як правило, до обіду. Дімсам - це свого роду «далекі родичі пельменів», їх начинки різноманітні, барвисті. Кожен дімсам - витвір мистецтва у вигляді розкладених на блюдцях невеликих порцій десертів, фруктів, овочів, морепродуктів. Ласувати ними - дійство в Китаї хоч і щоденне, але подібне ритуалу.
            </p>
        </div>
    </div>
        <div class="application cruise">
            <div class="title">Заявка</div>
            <div class="application-card">
                <div class="proposition">
                    <div class="card-text">Вибрана пропозиція</div>
                    <div class="cards card3">
                        <img src="/pictures/cruise/{{$cruise->images[0]['img']}}">
                        <div class="cards-text">
                            <h2>{{$cruise->direction}}</h2>
                            <h4>на борту лайнера</h4>
                            <h5>“{{$cruise->liner}}”</h5>
                            <h3>від {{$cruise->price}} UAH</h3>
                        </div>
                    </div>
                </div>
                <div class="contact-info">
                    <div class="card-text">Ваші контакти</div>
                    <form action="{{route('application-data-cruise', $cruise->id)}}" method="POST">
                        @csrf
                        @include('inc.messages')
                        <div class="row-4">
                            <div class="col-25">
                                <label for="fname">Ім’я*</label>
                                <input type="text" id="name" name="name" placeholder="Ведіть ваше ім’я">
                            </div>
                        </div>
                        <div class="row-4">
                            <div class="col-25">
                                <label for="fname">Email*</label>
                                <input type="text" id="phone" name="email"  value="{{ old('email') }}" placeholder="Ведіть ваш email">
                            </div>
                        </div>
                        <div class="row-4">
                            <input class="btn" type="submit" value="Відправити заявку">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
</main>
@endsection
