<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title>Site</title>
  </head>
  <body>
       @include('layouts.sidebar')
    <p>Start content</p>

    @yield('content')

    <p>End content</p>



  </body>
</html>
