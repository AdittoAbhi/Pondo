@extends('layouts.app')

@section('content')
    <h1>Posts</h1>


    @if(count($posts) > 0)
        <table class="table table-striped">
            <tr>
                <th>Investment Title</th>
                <th>Company</th>
                <th>Amount (PHP)</th>
                <th>Quantity Left</th>
                <th></th>
            </tr>
            @foreach($posts as $post)
                <tr>
                    <td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
                    <td>{{$post->user->business->name}}</td>
                    <td>{{$post->price}}</td>
                    <td>{{$post->quantity}}</td>
                    <td>

                        {{Form::submit('Buy', ['class' => 'btn btn-success'])}}
                        {!!Form::close()!!}
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <p>You have no posts</p>
    @endif


   {{-- @if(count($posts))--}}
   {{--     @foreach($posts as $post)--}}
   {{--         <div class="well">--}}
   {{--             <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>--}}
   {{--             <small>Written on {{$post->created_at}}</small>--}}
   {{--         </div>--}}
   {{--     @endforeach--}}
   {{-- @else--}}
   {{--     <p> No post found</p>--}}
   {{-- @endif--}}
@endsection