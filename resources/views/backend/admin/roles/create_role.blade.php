@extends('backend.layout')

@section('titre_page') Ajout Role @endsection

@section('content')


        <form action="{{ route('admin.create_role') }}" method="post">
            @csrf

            <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Role</label>
                    <div class="col-md-8">
                        <input id="name" type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">  <strong>{{ $message }}</strong> </span>
                        @enderror
                    </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Abreviation</label>
                <div class="col-md-8">
                    <input id="slug" type="text" class="form-control  @error('slug') is-invalid @enderror" name="slug" value="{{ old('slug') }}" autofocus>
                    @error('slug')
                        <span class="invalid-feedback" role="alert">  <strong>{{ $message }}</strong> </span>
                    @enderror
                </div>
        </div>

             <button type="submit" class="btn btn-primary btn-lg col-md-12">Submit</button>

        </form>

@endsection
