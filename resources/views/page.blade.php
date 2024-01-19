<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.head')
</head>
<body>
    <div class="position-relative overflow-hidden">
        @include('home.navbar')
        @yield('content')
    </div>
    @include('home.footer')
</body>
</html>