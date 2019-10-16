@extends ('layouts.app')

@section('title')
    Créer une campagne
@endsection

@section('content')
    <main class="container">
        <div class="col-md-10 m-auto">
            <div class="container-fluid">
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
                <div class=" row border border-dark p-3 mb-2">
                    <form class="col-12 mx-auto mb-2 text-center" action="{{ route('campaigns.store') }}" method="POST">
                        @csrf
                        {{-- @method('PUT')--}}
                        <div class="form-group">
                            <label for="content">Nom de la campagne</label>
                            <input required  class="form-control" type="text" name="description" id="description">
                        </div>
                        <div class="row">
                            <div class="col-6 form-group">
                                <label for="nom">Date de début</label>
                                <input required type="text" class="form-control" name="date_start" id="date_start">
                            </div>
                            <div class="col-6 form-group">
                                <label class="label">Date de fin</label>
                                <div class="control">
                                    <input required class="form-control" type="text" name="date_end" id="date_end">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content">Produits</label>
                            <input required  class="form-control" type="text" name="products" id="products">
                        </div>
                        <button type="submit" class="btn btn-secondary">Valider</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection

{{--                    @if($errors->has('password_confirmation'))--}}
{{--                        <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>--}}
{{--                    @endif--}}
