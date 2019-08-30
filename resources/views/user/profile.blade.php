@extends('home')
@section('content')

    {{--Form for button--}}
    <a class="btn btn-success" href="{{route('create-post')}}"style="width:25.2%;margin-left:-2%" >Create Post </a>
    {{--End of Form for button--}}
        <div class="row">
            <div class="col-md-3">
                @include('includes/sidebar'){{--SideBar--}}
            </div>
            {{--Main Data Part--}}
            <div class="col-md-9">
                 <table class="table">
                     <tr style="font-size:large">
                         <th>No :</th>
                         <th>Title :</th>
                         <th>Body :</th>
                     </tr>

{{--                     <tr>--}}
{{--                         <td>01</td>--}}
{{--                         <td>Hamza</td>--}}
{{--                         <td>hahaoih</td>--}}
{{--                     </tr>--}}
                    @foreach($user_posts as $post)

                         <tr>
                         <td style="color: #1b4b72">{{$no++}}</td>
                         <td>{{$post->title}}</td>

                         <td>{{str_limit($post->body, 25)}}</td>
                         <td>
                             {{-- Can be don through <a>--}}
                             <form method="post" action="{{route('edit-post',$post->id)}}">
                              @csrf
                              @method('PUT')
                              <button class="btn btn-warning">Edit</button>
                          </form>
                         </td>
                         <td>
                             <form method="post" action="{{route('delete-post',$post->id)}}">
                                 @csrf
                                 @method('DELETE')
                                 <button class="btn btn-danger">Delete</button>
                             </form>
                         </td>
                     </tr>
                    @endforeach
                 </table>

            </div>
        </div>

@endsection
