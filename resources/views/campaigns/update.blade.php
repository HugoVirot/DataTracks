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
            <form class="col-12 mx-auto" action="{{ route('campaigns.update', $campaign) }}" method="POST">
                @csrf
                @method('PUT')
                Modifier les produits
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
                <div class="form-group">
                    <input type="hidden" name="id" id="id" value="{{ $campaign->id }}">
                </div>
                <button type="submit" class="btn btn-primary">Valider</button>
            </form>
        </div>
    </main>

@endsection
