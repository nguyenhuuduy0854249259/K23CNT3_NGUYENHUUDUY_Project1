<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- File CSS tùy chỉnh -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('_layouts.header')
    @include('_layouts.navbar')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                @yield('content')
            </div>
            <div class="col-md-3">
                @include('_layouts.sidebar')
            </div>
        </div>
    </div>
    @include('_layouts.footer')
</body>
</html>
