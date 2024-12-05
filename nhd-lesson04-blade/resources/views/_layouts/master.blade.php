<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

@include('_layouts.header') <!-- Chèn header -->

<body>
    @include('_layouts.navbar') <!-- Chèn navbar -->
    
    <div class="container mt-4">
        @yield('content') <!-- Nội dung động từ các trang con -->
    </div>

    @include('_layouts.footer') <!-- Chèn footer -->
</body>
</html>
