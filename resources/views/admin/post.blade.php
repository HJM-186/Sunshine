@extends('admin')
@section('content')


            <table class="table">
                <tr>
                    <th>ID :</th>
                    <th>Title :</th>
                    <th>Body :</th>
                </tr>


            @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->body}}</td>
                    </tr>
            @endforeach





@endsection
