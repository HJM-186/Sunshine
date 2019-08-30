
<!doctype html>
<html lang="en">
<head>
    <!-- Required css meta + tags -->
     @include('includes/css')
     <title>Admin</title>
</head>
<body>
    {{--Header--}}
    @include('includes/header')
    {{--NavBar--}}
    @include('includes/nav')
    {{--Body--}}
    @yield('content')
    {{--Footer--}}
    @include('includes/footer')
    <!--JavaScript -->
    @include('includes/javascript')
</body>
</html>
