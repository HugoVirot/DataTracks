@extends ('layouts.app')

@section('title')
    <h1>Liste des messages d'erreur</h1>
@endsection

@section('content')
    <div class="container">
        <div class="card-body-user bg-dataTrack text-light p-3 mb-2">
            <h1 class="h1T" >Logs</h1>
        </div>

        <div class="card card-flat">
            <div class="card-header">
                <form action="{{route('deleteAllLogs')}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger mb-1 w-25 float-right m-2"> <i class="far fa-minus-square"></i> Purge</button>
                </form>
            </div>
            <div class="card-body-logs">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Message</th>
                        <th>Date de création</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($logs as $log)
                        <tr>
                            <td>{{ $log->id }}</td>
                            <td>{{ $log->message }}</td>
                            <td>{{ $log->created_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
