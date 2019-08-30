<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title> @yield('titre') - {{ config('app.name', 'Laravel') }}</title>
  @include('backend.partials.css')
</head>

<body id="page-top">

  <div id="wrapper">

    @include('backend.partials.side')

    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">

       @include('backend.partials.top')

        <div class="container-fluid">

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">@yield('titre_page')</h1>
            </div>

            <div class="row">
                <div class="container">
                        @include('backend.partials.messages')
                </div>

                @yield('content')
            </div>

        </div>
      </div>

      @include('backend.partials.footer')

    </div>

  </div>


  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  @include('backend.partials.js')
</body>

</html>
