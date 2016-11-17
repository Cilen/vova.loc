@extends('layouts.app')

@section('content')
    <video id="video"autoplay="autoplay" loop="loop" preload="auto">
        <source src="http://yakovets.mlmpult.com/external/5/video/video.mp4">
        <source src="http://yakovets.mlmpult.com/external/5/video/video.webm" type="video/webm">
    </video>

    <div class="welcome-header">
        <div class="container">
            <div class="row title-block">
                <div class="col-sm-10 col-lg-8 col-xs-offset-1 title-text">
                    <h1>КАК ВЫ МОЖЕТЕ ЗАРАБАТЫВАТЬ МНОГО, ЗАНИМАЯСЬ ЛЮБИМЫМ ДЕЛОМ В ИНТЕРНЕТ</h1>
                </div>
                <div class="col-sm-10 col-lg-8 col-xs-offset-1  subtitle-text">
                    <h2>Получите бесплатный доступ к серии видеоуроков по старту успешного бизнеса в интернет прямо сейчас!</h2>
                </div>

                <!--Форма зворотнього звязку-->
                <div class="col-xs-3 col-xs-offset-1">
                    <input type="text" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="col-xs-3 col-sm-4">
                    <input type="email" class="form-control" id="email" placeholder="E-mail">
                </div>
                <div class="col-xs-3 col-sm-2">
                    <button type="submit" class="form-control btn btn-success">Send</button>
                </div>
            </div>
        </div>
    </div>

    <div class="content">

    </div>


    <footer>
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <a href="#" rel="nofollow">Designed & Developed by Roman Khoma</a>
                </div>
            </div>
        </div>
    </footer>
@endsection