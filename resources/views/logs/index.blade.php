@extends ('layouts.app')

@section('title')
<h1>Liste des messages d'erreur</h1>
@endsection

@section('content')
    <div class = "container">
        <h1>Logs</h1>
        <form action="{{route('deleteAllLogs')}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-danger"> Purge </button>
        </form>
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

@endsection
