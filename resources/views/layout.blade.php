<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
  <h1>@yield('heading')</h1>
  <li><a href="{{ route('student_home') }}">home</a></li>
  <li><a href="{{ route('student_about') }}">about</a></li>

  @yield('main-content')
</body>
</html>