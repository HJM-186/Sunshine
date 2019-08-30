@extends('home')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@section('content')
    <div class="container"style="margin-bottom:5% ">
        <form method="post" action="{{route('update-post',$post->id)}}">
            @csrf
            @method('PUT')
            <h1>Edit Post: {{$post->id}}</h1>
            <label>Title :</label>
            <input type="text" name="titleUpdate"class="form-control" value="{{$post->title}}">
            <br>
            <label>Body :</label>
            <input type="text" style="padding-bottom:20%" name="bodyUpdate" class="form-control" value="{{$post->body}}">
            </br>
            <button class="form-control" style="background-color: #28a745;color:white"><b>Update</b></button>
        </form>
    </div>
@endsection
