<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Clean Blog - Start Bootstrap Theme</title>
  @include('frontend.partials.css')
</head>
<body>

@include('frontend.partials.menu')

  @include('frontend.partials.header')
  <div class="container">
      @yield('content')
  </div>
  <hr>

@include('frontend.partials.footer')
@include('frontend.partials.js')

</body>
</html>