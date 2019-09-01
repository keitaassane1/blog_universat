@extends('backend.layout')

@section('titre_page') Create Post @endsection

@section('content')

        <div class="row container">
            <div class="col-md-12">


                    <form action="{{ route('auteur.create_post') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                    <label for="titre" class="col-md-4 col-form-label text-md-right">Titre</label>
                                    <div class="col-md-8">
                                        <input id="titre" type="text" class="form-control  @error('titre') is-invalid @enderror" name="titre" value="{{ old('titre') }}" autofocus>
                                        @error('titre')
                                            <span class="invalid-feedback" role="alert">  <strong>{{ $message }}</strong> </span>
                                        @enderror
                                    </div>
                            </div>


                            <div class="form-group row">
                                    <label for="titre" class="col-md-4 col-form-label text-md-right">Description</label>
                                    <div class="col-md-8">
                                        <input id="description" type="text" class="form-control  @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" autofocus>
                                        @error('description')
                                            <span class="invalid-feedback" role="alert">  <strong>{{ $message }}</strong> </span>
                                        @enderror
                                    </div>
                            </div>


                            <div class="form-group row">
                                    <label for="contenu" class="col-md-4 col-form-label text-md-right">Contenu</label>
                                    <div class="col-md-8">
                                        <input id="contenu" type="text" class="form-control  @error('contenu') is-invalid @enderror" name="contenu" value="{{ old('contenu') }}" autofocus>
                                        @error('contenu')
                                            <span class="invalid-feedback" role="alert">  <strong>{{ $message }}</strong> </span>
                                        @enderror
                                    </div>
                            </div>

                            <div class="form-group row">
                                    <label for="image" class="col-md-4 col-form-label text-md-right">Image</label>
                                    <div class="col-md-8">
                                        <input id="image" type="file" class="form-control  @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" autofocus>
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">  <strong>{{ $message }}</strong> </span>
                                        @enderror
                                    </div>
                            </div>



                            <div class="form-group row">
                                    <label for="categorie_id" class="col-md-4 col-form-label text-md-right">Categorie</label>
                                    <div class="col-md-8">
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

                             <button type="submit" class="btn btn-primary btn-lg col-md-12">Submit</button>

                        </form>

            </div>
        </div>


@endsection
