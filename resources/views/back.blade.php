<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
  </head>
  <body>

  <div class="row">
    <div class="col-md-2">
        @include('back.nav')
    </div>
    <div class="col-md-10">
      @yield('content')
    </div>
  </div>

  @include('partials._javascript')
  </body>
</html>
