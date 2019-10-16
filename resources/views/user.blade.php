@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <form action="{{ route('user.show') }}" method="post">
                <div class="form-group">
                    <label for="login">Login</label>
                    <input type="email" login="login" id="login" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" login="password" id="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="surname">Prénon</label>
                    <input type="text" name="surname" id="surname" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="position">Poste</label>
                    <input type="text" name="position" id="position" class="form-control" required>
                </div>
                @csrf()
                <input type="submit" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection
