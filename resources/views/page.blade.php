<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.head')
</head>
<body>
    <div class="position-relative overflow-hidden">
        @yield('content')
    </div>
    @include('home.ajax')
</body>
</html>