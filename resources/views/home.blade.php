@extends('layouts.app')


@section('content')
    <div class="flex-center position-ref full-height">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class=" d-flex flex-sm-column flex-lg-row justify-content-center align-items-center">
                        <h1 class="ml-5 h1-color"> Administration </h1>
                        <h1 class="ml-5 h1-color">DataTracks</h1>
                    </div>
                    <hr>
                    <h1 class="ml-5 d-flex align-items-center">
                        <div class="vapor">Dashboard</div>
                    </h1>
                </div>
            </div>
            <div class="row mt-0">
                <div class="col-12 text-center mb-3 border-2 rounded">
                    <i class="fas fa-database w-100 big-icon text-light"></i>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <a class="a-no-decoration" href="{{route('users.index')}}">
                        <div class="card mb-3 card-admin">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <i class="far fa-address-book big-icon"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Utilisateurs <strong></strong></h5>
                                        <p class="card-text">Gestion des Utilisateurs </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-12 col-lg-4">
                    <a class="a-no-decoration" href="">
                        <div class="card mb-3 card-admin">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <i class="fas fa-archive big-icon"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Campagnes <strong></strong></h5>
                                        <p class="card-text">Gestion des campagnes </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-12 col-lg-4">
                    <a class="a-no-decoration" href="">
                        <div class="card mb-3 card-admin">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <i class="far far fa-sticky-note big-icon"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Logs <strong></strong></h5>
                                        <p class="card-text">Gestion des logs erreur</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
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
@endsection




