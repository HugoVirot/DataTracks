@extends('layouts.app')


@section('content')
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-12">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <a class="btn btn-lg btn-secondary btn-block btn-login text-uppercase font-weight-bold mb-2" href="{{url('users')}}" >
                                Retour
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                @foreach($users as $user)

                                    <h3 class="login-heading mb-4">Modifier Utilisateur </h3>
                                    <form action="{{url('post-registration')}}" method="POST" id="regForm">
                                        {{ csrf_field() }}
                                        <div class="form-label-group">
                                            <label for="inputName">Name</label>
                                            <input type="text" id="inputName" name="name" class="form-control" value=$user->name autofocus>


                                            @if ($errors->has('name'))
                                                <span class="error">{{ $errors->first('name') }}</span>
                                            @endif

                                        </div>

                                        <div class="form-label-group">
                                            <label for="inputSurName">SurName</label>
                                            <input type="text" id="inputSurName" name="surname" class="form-control" value=$user->surname autofocus>


                                            @if ($errors->has('surname'))
                                                <span class="error">{{ $errors->first('surname') }}</span>
                                            @endif

                                        </div>

                                        <div class="form-label-group">
                                            <label for="inputPosition">Poste</label>
                                            <input type="text" id="inputPosition" name="position" class="form-control" value=$user->position autofocus>


                                            @if ($errors->has('position'))
                                                <span class="error">{{ $errors->first('position') }}</span>
                                            @endif

                                        </div>

                                        <div class="form-label-group">
                                            <label for="inputEmail">Email address</label>
                                            <input type="email" name="email" id="inputEmail" class="form-control" value=$user->email >


                                            @if ($errors->has('email'))
                                                <span class="error">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>

                                        <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">
                                            Valider
                                        </button>

                                    </form>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
