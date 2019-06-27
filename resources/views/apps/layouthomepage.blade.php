<!DOCTYPE html>
<html lang="en">
  <head>
   @include('partials.headhomepage')
  </head>
  <body>
	  @include('partials.navmenuhomepage')
    <!-- END nav -->
	 @yield('content')
	 @include('partials.footerhomepage')
	 @include('partials.scripthomepage')
  </body>
</html>