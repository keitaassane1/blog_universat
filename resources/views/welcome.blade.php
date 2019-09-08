@extends('frontend.layout')


@section('content')

<div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
              @foreach (\App\Post::where('status',1)->orderBy('created_at', 'desc')->take(10)->get() as $p )
                 <div class="post-preview">
                    <a href="post.html">
                      <h2 class="post-title">
                        <a href="{{  route('read_post', $p->id  ) }}">{{ strtoupper($p->titre) }}</a>
                      </h2>
                      <h3 class="post-subtitle">{{ $p->description }}</h3>
                    </a>

                    <img src="{{ 'posts/'.$p->user->email.'/'.$p->image }}" height="300px" class="img-responsive img-rounded" />

                    <p class="post-meta">Auteur
                      <a href="#">{{ $p->user->email  }}</a>
                      {{ $p->created_at  }}</p>
                  </div>
                  <hr>

              @endforeach
            <div class="clearfix">
              <a class="btn btn-primary float-right" href="#">Plus d'articles &rarr;</a>
            </div>
          </div>
        </div>
      </div>

@endsection
