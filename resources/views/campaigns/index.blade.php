@extends ('layouts.app')

@section('title')
    Liste des campagnes
@endsection

@section('content')

    <main class="container">
        <div class="container text-center mt-3">
            <h2 class="mb-3">Liste des campagnes</h2>
            <a href="{{ route('campaigns.create') }}"><button class="btn btn-primary mb-3">Créer une campagne</button></a>
            <div class="row">
                <div class="col-3">
                   Nom
                </div>
                 <div class="col-2">
                  Date début
                </div>
                <div class="col-2">
                    Date fin
                </div>
                <div class="col-5">
                    Liste des produits
                </div>
            </div>
            @foreach ($campaigns as $campaign)
                <div class="card">
                    <div class="row">
                        <div class="col-3">
                            {{ $campaign->description }}
                        </div>
                        <div class="col-2">
                            {{ $campaign->date_start}}
                        </div>
                        <div class="col-2">
                            {{ $campaign->date_end}}
                        </div>
                        <div class="col-5">
                            @foreach ($campaign -> products as $product)
                            {{ $product->name }}<br>
                            @endforeach
                        </div>
                    </div>
                    <a href="{{ route('campaigns.edit', $campaign) }}"><button class="btn btn-secondary mb-3">Ajouter un produit</button></a>
                </div>
            @endforeach
        </div>
    </main>

@endsection