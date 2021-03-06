@extends('backend.layout')

@section('content')

        <!-- All User Info -->
        <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Total Articles</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Post::where('user_id',Auth::user()->id)->count()  }}</div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-file-alt fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

                      <!-- All User Info -->
        <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Articles Actifs</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Post::where('user_id',Auth::user()->id)->where('status',1)->count()  }}</div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-file-alt fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

                      <!-- All User Info -->
        <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Articles Non-Actifs</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Post::where('user_id',Auth::user()->id)->where('status',0)->count()  }}</div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-file-alt fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

@endsection
