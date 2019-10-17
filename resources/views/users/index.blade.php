@extends('layouts.app')

@section('title')
    Users
@endsection

@section('content')
    <div class="container">
        <h2>Users</h2>
        <table class ="table">
            <thead>
            <tr>
                <th>name</th>
                <th>surname</th>
                <th>email</th>
                <th>poste</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->name }}</td>
                    <td>{{$user->surname }}</td>
                    <td>{{$user->email }}</td>
                    <td>{{$user->position }}</td>
                    <td><form method="POST" action="/users/{{$user->id}}">
                            {{method_field('DELETE')}}
                            {{csrf_field()}}
                            <div class="field">
                                <div class="contral">
                                    <button type="submit" class="btn btn-secondary">Supprimer</button>
                                </div>
                            </div>
                        </form></td>

                    <td><a class="btn btn-secondary" href="{{route('auth.custom.registration.edit', $user)}}" >modifier</a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{route('auth.custom.Registration')}}">Create User</a>
    </div>
@endsection
