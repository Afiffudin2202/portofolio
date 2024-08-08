<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Portofolio</title>

    <link rel="stylesheet" href="{{ asset('/') }}assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    @include('layouts.navbar')
    @yield('content')
    @include('layouts.footer')
</body>
    <script src="{{ asset('/') }}assets/js/bootstrap.js"></script>
</html>