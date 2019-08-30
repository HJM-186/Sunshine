@extends('admin')
@section('content')
    <center><h1 style="background-color: #38c172;color: #dee2e6">All Users in DataBase </h1></center>
    <table class="table">
         <tr>
             <th>ID</th>
             <th>Name</th>
             <th>Email</th>
             <th>Role</th>
         </tr>
        @foreach( $users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td> @if($user->role==1) Admin @else User @endif</td>
            <td> @if($user->role==0)

                    <a style="margin-left:-30%"href="{{route('makeAdmin',$user->id)}}"><button class="btn btn-warning">Make Admin</button></a>
                    <form method="post" action="{{route('removeUser',$user->id)}}">@csrf @method('DELETE')
                        <button style="margin:-22% 0 0 12%;" class="btn btn-danger">Remove User</button>
                    </form>
                    <form method="get" action="{{route('viewAllPost',$user->id)}}">
                        @csrf
                        <button style="margin:-22% 0 15% 55%;" class="btn btn-primary">View all Post</button>
                    </form>

                @endif</td>
        </tr>
         @endforeach
    </table>
@endsection
