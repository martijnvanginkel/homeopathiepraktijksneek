<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
  </head>
  <body>
    <div class="row">
      <div class="col-md-2">
        @include('partials._nav')
      </div>
      <div class="col-md-10">
        @yield('content')
        @include('partials._footer')
      </div>
    </div>
    @include('partials._javascript')
  </body>
</html>
