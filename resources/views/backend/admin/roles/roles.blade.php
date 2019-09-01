@extends('backend.layout')



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
                      <th>#</th>
                      <th>Role</th>
                      <th>Slug</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Role</th>
                        <th>Slug</th>
                        <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>
                        @foreach ($roles as $r)
                            <tr>
                                <td>{{  $r->id }}</td>
                                <td>{{  $r->name }}</td>
                                <td>{{  $r->slug }}</td>
                                <td>
                                    <a href="{{ route('admin.edit_role', $r->id) }}"><i class="fas fa-lg fa-edit"></i></a> |
                                    <a class="" onclick="return confirm('Êtes vous sûr de votree action ?')" href="{{  route('admin.delete_role', $r->id) }}">
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
