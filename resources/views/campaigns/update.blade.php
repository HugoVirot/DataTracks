@extends ('layouts.app')

@section('title')
    Ajouter produit
@endsection

@section('content')

    <main class="container">
        <div class="container text-center">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div>
            <div class="row bg-dark text-light font-weight-bold p-2 mb-4">Modifier les produits de la campagne</div>
            <div class=" container table-info border border-dark p-5 mb-2">
                <form class="col-3 mx-auto" action="{{ route('campaigns.update', $campaign) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        @foreach ($products as $product)
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                       @foreach ($campaignProductsIDs as $cP)
                                       @if ($product->id == $cP->product_id))
                                       checked="checked"
                                       @break
                                       @endIf
                                       @endforeach
                                       class="custom-control-input" name="product{{ $product->id }}"
                                       value={{ $product -> id }}  id="product{{ $product->id }}">
                                <label class="custom-control-label"
                                       for="product{{ $product->id }}">{{ $product->name }}</label>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <input type="hidden" name="id" id="id" value="{{ $campaign->id }}">
                        </div>
                        <div class="col-6">
                            <a class="btn btn-secondary" href="{{ route('campaigns.index') }}">
                                Annuler
                            </a>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-secondary">Valider</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

@endsection
