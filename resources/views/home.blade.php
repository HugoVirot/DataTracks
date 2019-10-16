@extends('layouts.app')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DataTracks</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 84px;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
    ​ <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
            @endauth
        </div>
    @endif
    ​
    <div class="content">
        <div class="title m-b-md">
            DataTracks
        </div>
        ​
        <div class="links">
            <a href="">Utilisateurs</a>
            <a href="">Campagnes</a>
            <a href="">Logs</a>
        </div>
    </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrapper-logo-admin d-flex flex-sm-column flex-lg-row justify-content-center align-items-center">
                        <img src="{{asset('assets/imgs/logo-cre.svg')}}" class="adminImgLogo mt-1" alt="Global notes Logo">
                        <h1 class="ml-5 h1-color"> Administration </h1>
                        <h1 class="ml-5 h1-color">Code Reminder Encyclopedia</h1>
                    </div>
                    <hr>
                    <h1 class="ml-5 d-flex align-items-center">
                        <div class="vapor">Dashboard</div>
                    </h1>
                </div>
            </div>
            <div class="row mt-0 ">
                <div class="col-12 text-center mb-3 border-2 rounded">

                    <i class="fas fa-database w-100 big-icon text-light"></i>

                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="card mb-3 card-admin" >
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <i class="fas fa-folder big-icon"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Folders : <strong></strong></h5>
                                    <p class="card-text">Folders crées dans la base de données.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="card mb-3 card-admin" >
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <i class="fas fa-archive big-icon"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Blocknotes : <strong></strong></h5>
                                    <p class="card-text">Blocknotes presents dans la base de données. </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="card mb-3 card-admin" >
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <i class="far far fa-sticky-note big-icon"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Notes : <strong></strong></h5>
                                    <p class="card-text">Notes enregistrés dans la base de données.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="card mb-3 card-admin" >
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <i class="far fa-address-book big-icon"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Users : <strong>5</strong></h5>
                                    <p class="card-text">Utilisateurs presents dans la base de données.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="card mb-3 card-admin">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <i class="fas fa-fingerprint big-icon"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Rules : <strong>4</strong></h5>
                                    <p class="card-text">Droits presents dans la base de données.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row mt-1 mb-5">
                <div class="col-12 text-center mb-3 border-2 rounded">
                    <i class="fas fa-database w-100 big-icon text-light"></i>
                </div>
            </div>
        </div>
        <hr>
</div>
</body>
</html>
Réduire




