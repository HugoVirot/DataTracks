@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row no-gutter">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-12">
                <div class="card card-flat">
                    <div class="card-body-user">
                        <div class="w-100  title-card  pb-3">
                            <div class="h1T w-100 flex-row justify-content-center">
                                <span>Créer nouvel utilisateur </span>
                                <i class="iT fas fa-user badge-light"></i>
                            </div>
                        </div>
                        <div class="login d-flex align-items-center py-5 modify">
                            <div class="container">
                                <div class="row">
                        <div class="col-md-9 col-lg-8 mx-auto">
                            <form action="{{url('post-registration')}}" method="POST" id="regForm">
                                {{ csrf_field() }}
                                <div class="form-label-group">
                                    <label for="inputName">Name</label>
                                    <input type="text" id="inputName" name="name" class="form-control" placeholder="Entrez le nom" autofocus>


                                    @if ($errors->has('name'))
                                        <span class="error">{{ $errors->first('name') }}</span>
                                    @endif

                                </div>

                                <div class="form-label-group">
                                    <label for="inputSurName">SurName</label>
                                    <input type="text" id="inputSurName" name="surname" class="form-control" placeholder="Entrez le prénom" autofocus>


                                    @if ($errors->has('surname'))
                                        <span class="error">{{ $errors->first('surname') }}</span>
                                    @endif

                                </div>

                                <div class="form-label-group">
                                    <label for="inputPosition">Poste</label>
                                    <input type="text" id="inputPosition" name="position" class="form-control" placeholder="Entrez le Poste occupé" autofocus>


                                    @if ($errors->has('position'))
                                        <span class="error">{{ $errors->first('position') }}</span>
                                    @endif

                                </div>

                                <div class="form-label-group">
                                    <label for="inputEmail">Email address</label>
                                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" >


                                    @if ($errors->has('email'))
                                        <span class="error">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="form-label-group">
                                    <label for="inputPassword">Password</label>
                                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">


                                    @if ($errors->has('password'))
                                        <span class="error">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <a class="btn btn-secondary btn-login text-uppercase font-weight-bold mb-2" href="{{url('users')}}" >
                                    Retour
                                </a>

                                <button class="btn btn-primary btn-login text-uppercase font-weight-bold mb-2" type="submit">
                                Valider
                                </button>

                            </form>
                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
