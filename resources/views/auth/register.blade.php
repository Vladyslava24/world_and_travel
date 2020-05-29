@extends('layouts.app_light')

@section('content')
    <main>
        <div class="login-container">
            <div class="login-div">
                <div class="login-title">Реєстрація</div>
                <form method="POST" action="/register">
                    @include('inc.messages')
                    @csrf
                    <div class="row-4">
                        <div class="col-25">
                            <input type="text" id="fname" name="name" value="{{ old('name') }}" placeholder="Ім’я*">
                        </div>
                    </div>
                    <div class="row-4">
                        <div class="col-25">
                            <input type="text" id="email" name="email" value="{{ old('email') }}" placeholder="Email*">
                        </div>
                    </div>
                    <div class="row-4">
                        <div class="col-25">
                            <input type="password" id="pwd" name="password" placeholder="Пароль*">
                        </div>
                    </div>
                    <div class="row-4">
                        <div class="col-25">
                            <input type="password" id="pwd" name="password_confirmation" placeholder="Повторіть пароль*">
                        </div>
                    </div>
                    <div class="row-4">
                        <button class="btn btn-login" type="submit">Створити акаунт</button>
                    </div>
                </form>
                <div class="login-social-media-wrap">
                    <a href="#" class="btn login">
                        <div class="login-social-media">
                            <img src="img/icons/facebook.svg">
                            <h3>Facebook</h3>
                        </div>
                    </a>
                    <a href="#" class="btn login">
                        <div class="login-social-media">
                            <img src="img/icons/instagram.svg">
                            <h3>Instagram</h3>
                        </div>
                    </a>
                </div>
                <p class="login-p">Виконуючи реєстрацію, ви погоджуєтеся з нашими Умовами та Політикою конфіденційності.</p>
                <div class="register">Маєте акаунт?<a class="register-btn" href="/login"><strong>УВІЙТИ</strong></a></div>
            </div>
        </div>
    </main>
@endsection
