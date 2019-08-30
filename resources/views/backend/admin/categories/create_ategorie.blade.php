@extends('backend.layout')

@section('titre_page') Nouvelle Categorie @endsection

@section('content')


        <form action="{{ route('admin.CreateCategorie') }}" method="post">
            @csrf

            <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Catégorie</label>
                    <div class="col-md-8">
                        <input id="name" type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">  <strong>{{ $message }}</strong> </span>
                        @enderror
                    </div>
            </div>

            <div class="form-group row">
                <label for="description" class="col-md-4 col-form-label text-md-right">Catégorie</label>
                <div class="col-md-8">
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control  @error('description') is-invalid @enderror" name="description" autofocus>{{ old('description') }}</textarea>

                    @error('description')
                        <span class="invalid-feedback" role="alert">  <strong>{{ $message }}</strong> </span>
                    @enderror
                </div>
             </div>

             <button type="submit" class="btn btn-primary btn-lg col-md-12">Submit</button>

        </form>

@endsection
