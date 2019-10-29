@extends('layouts.app')

@section('content')
<br />
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <a href="/posts/create" class = "btn btn-primary">Create Posts</a>
                    <br>
                    <br>
                <h3> Your Blog Posts</h3>
                @if(count($posts) > 0)
                <table class="table table-striped">
                    <tr>
                        <th>Title</th>
                        <th></th>
                    </tr>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->title}}</td>
                        <td><a href="/posts/{{$post->id}}/edit" class="btn btn-lg btn-primary">Edit</a></td>
                        <td>{{Form::submit('Delete', ['class' =>'btn btn-lg btn-danger'])}}
                            {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST' , 'class'=>'pull-right'])!!}
                            {{Form::hidden('_method','DELETE')}}
                            {!!Form::close()!!}</td>
                    </tr>
                @endforeach
                </table>
                @else
                    <p>You have no posts</p>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
