@extends ('layout.app')

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
        <div class="row">
            <div class="col-4">
            </div>
            <div class="col-4 text-center">
                <form class="col-12 mx-auto" action="{{ route('campaigns.update', $campaign) }}" method="POST">
                    @csrf
                    @method('PUT')
                Modifier les produits
                    <div class="form-group">
                        <label for="content">Produits</label>
                        @foreach ($products as $product)
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="product{{ $product -> id }} " value={{ $product -> id }}  id="product{{ $product -> id }}">
                                <label class="custom-control-label"
                                       for="product{{ $product -> id }}">{{ $product -> name }}</label>
                            </div>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" value="{{ $quack->id }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Valider</button>
                </form>
            </div>
            <div class="col-4">
            </div>
        </div>
    </main>

@endsection
