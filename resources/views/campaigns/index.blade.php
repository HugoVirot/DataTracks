@extends ('layouts.app')

@section('title')
    Liste des campagnes
@endsection

@section('content')

    <main class="container">
        <div class="container text-center mt-3">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (isset ($messages)) && (if ($messages->any()))
            <div class="alert alert-success">
                <ul>
                    @foreach ($messages->all() as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <div class="container text-center mt-3">
            <div class="row bg-dark text-light font-weight-bold p-2 mb-4 m-1">Liste des campagnes</div>
            <a href="{{ route('campaigns.create') }}">
                <button type="submit" class="btn btn-secondary mb-3"><i class="fas fa-plus-circle"></i> Créer une
                    campagne
                </button>
            </a>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Date début</th>
                    <th scope="col">Date fin</th>
                    <th scope="col">produits</th>
                    <th scope="col">options</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($campaigns as $campaign)
                    <tr class="table-info">
                        <th scope="row">{{ $campaign->description }}</th>
                        <td> {{ $campaign->date_start}}</td>
                        <td>{{ $campaign->date_end}}</td>
                        <td>
                            @foreach ($campaign -> products as $product)
                                {{ $product->name }}<br>
                            @endforeach
                        </td>
                        <td class="row w-75">
                            <div class="col-6">
                                <a href="{{ route('campaigns.edit', $campaign) }}">
                                    <button type="submit" class="btn btn-secondary mb-3"><i class="fas fa-pen"></i>
                                    </button>
                                </a>
                            </div>
                            <div class="col-6">
                                <form action="{{ route('campaigns.destroy', $campaign) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-secondary mb-3"><i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>

@endsection
