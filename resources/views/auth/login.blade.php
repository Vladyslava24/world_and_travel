@extends('layouts.app_light')

@section('content')
    <!-- resources/views/auth/login.blade.php -->
    <main>
        <div class="login-container">
            <div class="login-div">
                <div class="login-title">Увійти</div>
                <form method="POST" action="/login">
                    @csrf
                    @include('inc.messages')
                    <div class="row-4">
                        <div class="col-25">
                            <input type="text" id="fname" name="email" value="{{ old('email') }}" placeholder="Email*">
                        </div>
                    </div>
                    <div class="row-4">
                        <div class="col-25">
                            <input type="password" id="pwd" name="password" placeholder="Пароль*">
                        </div>
                    </div>
                    <div class="row-4">
                        <!--<a class="btn btn-login" type="submit">Увійти</a>-->
                        <button class="btn btn-login" type="submit">Увійти</button>
                    </div>
                </form>
                <div class="login-social-media-wrap">
                    <a href="/login" class="btn login">
                        <div class="login-social-media">
                            <img src="img/icons/facebook.svg">
                            <h3>Facebook</h3>
                        </div>
                    </a>
                    <a href="/login" class="btn login">
                        <div class="login-social-media">
                            <img src="img/icons/instagram.svg">
                            <h3>Instagram</h3>
                        </div>
                    </a>
                </div>
                <p class="login-p">Виконуючи вхід в акаунт, ви погоджуєтеся з нашими Умовами та Політикою конфіденційності.</p>
                <div class="register">Немає акаунту?<a class="register-btn" href="/register"><strong>ЗАРЕЄСТРУВАТИСЯ</strong></a></div>
            </div>
        </div>
    </main>
@endsection
