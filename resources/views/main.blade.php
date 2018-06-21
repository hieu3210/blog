<!DOCTYPE html>
<html lang="en">

  <head>

  @include('partials._head')
  
  <!-- Private Stylesheets -->
  @yield('stylesheets')

  <title>TBit Blog | @yield('title')</title> <!-- change for each page -->

  </head>

  <body>

    @include('partials._nav')

    <div class="container">

      @include('partials._messages')

      @yield('content')

      @include('partials._footer')

    </div> <!-- end Container -->

    @include('partials._javascript')

    <!-- Private Scripts -->
    @yield('scripts')

  </body>
</html>