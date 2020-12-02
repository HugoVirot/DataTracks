@extends ('layouts.app')

@section('title')
    Créer une campagne
@endsection

@section('content')

    <main class="container">
        <div class="row bg-dark text-light font-weight-bold p-2 mb-4 m-4">Créer une campagne</div>
        <div class="col m-auto">
            <div class="container">
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
            <div class="container">
                <div class="table-info border border-dark p-5 mb-2">
                    <form class="row mx-auto mb-2 pl-4 pr-4 text-center" action="{{ route('campaigns.store') }}" method="POST">
                        @csrf
                        {{-- @method('PUT')--}}
                        <div class="col-6">
                            <div class="form-group w-75 pl-3">
                                <label for="content">Nom de la campagne</label>
                                <input required class="form-control" type="text" name="description" id="description">
                            </div>
                            <div class="form-group w-75 pl-3">
                                <label for="nom">Date de début</label>
                                <input required type="text" class="form-control" name="date_start" id="date_start"
                                       placeholder="YYYY-MM-DD">
                            </div>
                            <div class="form-group w-75 pl-3">
                                <label class="label">Date de fin</label>
                                <div class="control">
                                    <input required class="form-control" type="text" name="date_end" id="date_end"
                                           placeholder="YYYY-MM-DD">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="content">Produits</label>
                                {{--                            <input required  class="form-control" type="text" name="products" id="products">--}}
                                @foreach ($products as $product)
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input"
                                               name="product{{ $product -> id }}"
                                               value={{ $product -> id }}  id="product{{ $product -> id }}">
                                        <label class="custom-control-label"
                                               for="product{{ $product -> id }}">{{ $product -> name }}</label>
                                    </div>
                                    {{--                                        onclick="addToList({{ $product -> name }}); showList()"--}}
                                @endforeach
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                            <div class="col-4"></div>
                            <div class="col-4">
                                <a class="btn btn-secondary" href="{{ route('campaigns.index') }}">
                                    Annuler
                                </a>
                                <button type="submit" class="btn btn-secondary">Valider</button>
                            </div>
                            <div class="col-4"></div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    {{--<script>--}}
    {{--    var chosenProducts = {};--}}

    {{--function addToList(name) {--}}
    {{--    chosenProducts.push(name);--}}
    {{--    return chosenProducts--}}
    {{--}--}}

    {{--function showList(){--}}
    {{--    for (var product in chosenProducts)--}}
    {{--    {--}}
    {{--        document.getElementById(chosenProducts).innerHTML += product;--}}
    {{--    }--}}
    {{--}--}}

    {{--</script>--}}

@endsection


