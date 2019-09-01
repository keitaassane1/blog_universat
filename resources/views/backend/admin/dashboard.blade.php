@extends('backend.layout')

@section('content')


        <!-- All User Info -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Utilisateurs</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\User::count()  }}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-users fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- All Role Info -->
        <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Roles</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Role::count()  }}</div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-shield-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    </div>
                </div>
        </div>

        <!-- All Post Info -->
        <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Articles</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Post::count()  }}</div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-sticky-note fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    </div>
               </div>
        </div>

        <!-- All Role Info -->
        <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> <a href="{{ route('admin.liste_categories') }}">Catégories</a> </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Categorie::count()  }}</div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    </div>
                </div>
        </div>

@endsection
