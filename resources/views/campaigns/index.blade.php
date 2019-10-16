@extends ('layouts.app')

@section('title')
    Liste des campagnes
@endsection

@section('content')

    <main class="container">
        <div class="container text-center">
            Liste des campagnes
            <div class="row">
                <div class="col-4">
                   ID
                </div>
                <div class="col-4">
                   Nom
                </div>
                <div class="col-4">
                    Liste des produits
                </div>
            </div>
            @foreach ($campaigns as $campaign)
                <div class="card">
                    <div class="row">
                        <div class="col-4">
                            {{ $campaign->id }}
                        </div>
                        <div class="col-4">
                            {{ $campaign->description }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

@endsection
