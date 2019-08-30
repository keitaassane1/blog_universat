@extends('backend.layout')

@section('titre_page') Liste Categorie
<a href="{{ route('admin.CreateCategorie')}}" class="btn btn-lg btn-primary">
    <i class="fa fa-plus" aria-hidden="true"></i>
    </a>
@endsection

@push('css')
  <link href="{{ asset('backend/js/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush


@section('content')

        <div class="card shadow col-md-12">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Catégories</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                        @foreach ($categories as $c)
                            <tr>
                                <td>{{  $c->name }}</td>
                                <td>{{ str_limit($c->description, $limit = 50, $end = ' ... etc ...') }}</td>
                                <td>
                                    <a href="{{ route('admin.edit_categorie', $c->id) }}"><i class="fas fa-lg fa-edit"></i></a> |
                                    <a class="" onclick="return confirm('Êtes vous sûr de votree action ?')" href="{{  route('admin.delete_categorie', $c->id) }}">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
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
