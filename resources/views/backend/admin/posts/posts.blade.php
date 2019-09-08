@extends('backend.layout')


@section('titre_page') Gestion des Articles @endsection

@push('css')
  <link href="{{ asset('backend/js/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush



@section('content')


<div class="card shadow col-md-12">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Artices</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Auteur</th>
                  <th>Titre</th>
                  <th>Description</th>
                  <th>Etat</th>
                  <th>Categorie</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($posts as $p )
                    <tr>
                        <td>{{ $p->user->email }}</td>
                        <td>{{ $p->titre }}</td>
                        <td>{{ $p->description }}</td>
                        <td> @if($p->status == 1)
                                <span class="alert alert-success">Activé</span>
                             @elseif($p->status == 0)
                             <span class="alert alert-danger">Non Activé</span>
                             @endif
                        </td>
                        <td>{{ $p->categorie->name }}</td>
                        <td>
                            @if($p->status == 0)
                                <a class="btn btn-block btn-success" href="{{ route('admin.update_status_post', $p->id) }}">Aciver</a>
                            @elseif($p->status == 1)
                                <a class="btn btn-block btn-danger" href="{{ route('admin.update_status_post', $p->id) }}">Desactiver</a>
                            @endif
                        </td>
                    </tr>
                  @endforeach
              </tbody>
              <tfoot>
                <tr>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Etat</th>
                        <th>Categorie</th>
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

@push('js')
<script src="{{ asset('backend/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/js/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script>
  $(document).ready(function() {
      $('#dataTable').DataTable();
  });
</script>
@endpush
