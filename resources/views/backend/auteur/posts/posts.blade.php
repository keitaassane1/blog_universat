@extends('backend.layout')


@section('titre_page')  Mes Articles
<a href="{{ route('auteur.create_post')  }}" class="btn btn-lg btn-primary">
    <i class="fa fa-plus" aria-hidden="true"></i>
    </a>
@endsection

@push('css')
  <link href="{{ asset('backend/js/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush





@section('content')


<div class="card shadow col-md-12">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Roles</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Titre</th>
                  <th>Description</th>
                  <th>Contenu</th>
                  <th>Etat</th>
                  <th>categorie</th>
                  <th>Image</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($posts as $p )
                    <tr>
                        <td>{{ $p->titre }}</td>
                        <td>{{ $p->description }}</td>
                        <td>{{ $p->contenu }}</td>
                        <td>{{ $p->status }}</td>
                        <td>{{ $p->categorie->name }}</td>
                        <td>
                            <img src="{{ asset('posts/'.Auth::user()->email.'/'.$p->image) }}" alt="">
                        </td>
                        <td>
                            <a href="">Edit</a> |
                            <a href="">Delete</a>
                        </td>
                    </tr>
                  @endforeach
              </tbody>
              <tfoot>
                <tr>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Contenu</th>
                        <th>Etat</th>
                        <th>categorie</th>
                        <th>Image</th>
                        <th>Actions</th>                </tr>
              </tfoot>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div>


@endsection
