
<!doctype html>
<html lang="en">
<head>
    <!-- Required css meta + tags -->
    @include('includes/css')
    <title>User</title>
</head>
<body style="background: #f3f5f9">
<div style="margin:0% 1% 0% 1%;">
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
</div>
</body>
</html>
