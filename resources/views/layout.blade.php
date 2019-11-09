<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('Title')</title>
    @yield('style')
</head>
<body>
@include('nav')
@yield('content')
</body>
</html>