@extends('backend.layout')

@section('titre_page') Modifier Catégorie @endsection

@section('content')


        <form action="{{ route('admin.update_categorie') }}" method="post">
            @csrf

            <input type="hidden" name="categorie_id" value="{{ $categorie->id }}">

            <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Catégorie</label>
                    <div class="col-md-8">
                        <input id="name" type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ $categorie->name }}" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">  <strong>{{ $message }}</strong> </span>
                        @enderror
                    </div>
            </div>

            <div class="form-group row">
                <label for="description" class="col-md-4 col-form-label text-md-right">Catégorie</label>
                <div class="col-md-8">
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control  @error('description') is-invalid @enderror" name="description"  autofocus>{{ $categorie->description }}</textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert">  <strong>{{ $message }}</strong> </span>
                    @enderror
                </div>
             </div>

             <button type="submit" class="btn btn-success btn-lg col-md-12">Enregister</button>

        </form>

@endsection
