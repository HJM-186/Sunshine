@include('includes/css')
@include('includes/header')
<div style="background-color:#1b1e21;padding-left:87%">
    <a class="btn btn-success"  href="{{route('login')}}">Login</a>
    <a class="btn btn-success"  href="{{route('register')}}">Register</a>
</div>
<div class="container">
    @component('components/flex')

    @endcomponent
    @component('components/group')

    @endcomponent
</div>

@include('includes/javascript')
@include('includes/footer')

