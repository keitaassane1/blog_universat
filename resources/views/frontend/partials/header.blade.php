  <header class="masthead" style="background-image: url({{ asset('frontend/img/home-bg.jpg') }})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1> @yield('titre_post', env('APP_NAME'))</h1>
            <span class="subheading">
                    @yield('description_post',  env('APP_TITRE_DESCRIPTION'))
            </span>
          </div>
        </div>
      </div>
    </div>
  </header>
