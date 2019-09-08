@extends('frontend.layout')

@section('titre_post') {{ $post->titre }} @endsection

@section('description_post') {{ $post->description }} @endsection

@section('content')

<article>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                    {!! $post->contenu !!}
            </div>
          </div>
        </div>
      </article>

@endsection
