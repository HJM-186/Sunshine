@extends('home')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container"style="margin-bottom:5% ">
        <form method="post" action="{{route('store-post')}}">
            @csrf
            <h1>Create Post</h1>
            <label>Title :</label>
            <input type="text" name="title"class="form-control">
            <br>
            <label>Body :</label>
            <textarea style="padding-bottom:20%"name="body"class="form-control"></textarea>
             </br>
            <button class="form-control" style="background-color: #28a745;color:white"><b>Create</b></button>
        </form>
    </div>
@endsection
