@extends('layouts.app')

@section('content')
<br>
<br><br><br>
    <a href="/posts" class="btn btn-primary">Go Back</a>
    <h1>{{$post->title}}</h1>
    <img style="width:30%" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} </small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class ="btn btn-lg btn-primary">Edit</a>
        {{Form::submit('Delete', ['class' =>'btn btn-lg btn-danger'])}}
                            {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST' , 'class'=>'pull-right'])!!}
                            {{Form::hidden('_method','DELETE')}}
                            {!!Form::close()!!}
        
        {!!Form::close()!!}
        @endif
    @endif
@endsection