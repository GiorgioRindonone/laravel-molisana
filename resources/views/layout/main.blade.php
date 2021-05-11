<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('pageTitle')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/0ae8af7e4e.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">    @yield('style')
    
  </head>
  <body>
    @include('parts.header')
    <main>
      <!-- facciamo il dd per far apparire l'array del database e fare un check -->
      @yield('contentMain')

    </main>
    @include('parts.footer')
  </body>
  @yield('jsPage')
</html>
