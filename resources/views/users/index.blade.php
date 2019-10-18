@extends('layouts.app')

@section('title')
    Users
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-12">
                <div class="card card-flat">

                <span class="card-body-user">

                   <div class="w-100  title-card  pb-3">
                        <div class="h1T w-100 flex-row justify-content-center">
                            <span>Liste des utilisateurs </span>
                                <i class="iT fas fa-user badge-light"></i>
                        </div>
                   </div>
                   <div class="w-100  title-card-2  pb-3">
                        <div class="h2T w-100 flex-row justify-content-center">
                                 <i class="iT2 fas fa-user badge-light"></i>
                                    <span>Liste des utilisateurs</span>
                       </div>
                   </div>
                    <table class ="table">
                        <thead>
                        <tr class="tab-card">
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
                                <tr class = "tab-ligne">
                                <td>{{$user->name }}</td>
                                <td>{{$user->surname }}</td>
                                <td>{{$user->email }}</td>
                                <td>{{$user->position }}</td>
                                <td>@if(Auth::user()->isSuperAdmin(Auth::user()))
                                        <form method="POST" action="/users/{{$user->id}}">
                                        {{method_field('DELETE')}}
                                            {{csrf_field()}}
                                        <div class="field">
                                            <div class="contral">
                                                <button type="submit" class="btn btn-secondary">Supprimer</button>
                                            </div>
                                        </div>
                                    </form>
                                    @endif
                                </td>

                                <td>@if(Auth::user()->isSuperAdmin(Auth::user()))
                                        <a class="btn btn-secondary" href="{{route('auth.custom.registration.edit', $user)}}" >modifier</a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </span>

                </div>
                @if(Auth::user()->isSuperAdmin(Auth::user()))
                    <a class= "btn btn-secondary" href="{{route('auth.custom.Registration')}}">Create User</a>
                @endif
            </div>
        </div>
    </div>

@endsection
