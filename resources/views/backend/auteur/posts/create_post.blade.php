@extends('backend.layout')

@section('titre_page') Nouvelle Article @endsection

@push('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
@endpush

@section('content')

        <div class="row container">


                    <form action="{{ route('auteur.create_post') }}"  class="col-md-12"  method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                    <div class="col-md-12">
                                        <input readonly type="text" class="form-control"  value="AUTEUR : {{ strtoupper(Auth::user()->nom).' '.strtoupper(Auth::user()->prenom).' / '.strtoupper(Auth::user()->email)  }}" autofocus>
                                    </div>
                            </div>


                            <div class="row">
                                    <div class="form-group col-md-4">
                                                <input id="titre" placeholder="TITRE ARTICLE" type="text" class="form-control  @error('titre') is-invalid @enderror" name="titre" value="{{ old('titre') }}" autofocus>
                                                @error('titre')
                                                    <span class="invalid-feedback" role="alert">  <strong>{{ $message }}</strong> </span>
                                                @enderror
                                    </div>
                                    <div class="form-group col-md-8">
                                                <input id="description" placeholder="DESCRIPTION ARTICLE" type="text" class="form-control  @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" autofocus>
                                                @error('description')
                                                    <span class="invalid-feedback" role="alert">  <strong>{{ $message }}</strong> </span>
                                                @enderror
                                    </div>
                            </div>

                            <div class="form-group row">
                                    <div class="col-md-12">
                                        <textarea class="form-control @error('contenu') is-invalid @enderror" id="contenu" name="contenu"></textarea>

                                        @error('contenu')
                                            <span class="invalid-feedback" role="alert">  <strong>{{ $message }}</strong> </span>
                                        @enderror
                                    </div>
                            </div>

                            <div class="row">
                                    <div class="form-group col-md-6">
                                                <input id="image" type="file" class="form-control  @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" autofocus>
                                                @error('image')
                                                    <span class="invalid-feedback" role="alert">  <strong>{{ $message }}</strong> </span>
                                                @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                                <select name="categorie_id" id="categorie_id"  class="form-control @error('categorie_id') is-invalid @enderror" id="categorie_id">
                                                     <option value="">Sectionner la categorie</option>
                                                     @foreach (\App\Categorie::all() as $c )
                                                       <option value="{{  $c->id }}"> {{  $c->name }}</option>
                                                     @endforeach
                                                </select>
                                                @error('categorie_id')
                                                    <span class="invalid-feedback" role="alert">  <strong>{{ $message }}</strong> </span>
                                                @enderror
                                    </div>
                            </div>



                             <button type="submit" class="btn btn-success btn-lg col-md-12">Enregister</button>

                        </form>

        </div>


@endsection


@push('js')
<script src="{{ asset('js/app.js') }}"></script>
<script>
$('#contenu').summernote({
    tabsize: 2,
    height: 200
});
</script>
@endpush
