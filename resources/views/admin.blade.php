@extends('layouts.app')

@section('content')

<div class="center">
    <a name="crate" id="create" class="btn btn-primary m-2 p-2" href="/posts/create" role="button">Create New Post</a>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header" style="background: #51e79c">User Dashboard - Post CRUD</div>

                <div class="card-body">
                @foreach ($posts as $post)
                <a  href="/posts/{{$post->id}}" class="row">
                    <div class="col-mg-2">
                        <img src="/images/{{$post->image}}" alt="">
                    </div>
                  <div  class="col-mg-6 p-3 h3">
                        {{$post->title}}
                    </div>

                    <div class="col-mg-3 p-3">
                        <a href="/posts/{{$post->id}}" class="btn inline btn-primary">View</a>
                        <a href="/posts/{{$post->id}}/edit" class="btn inline btn-warning">Edit</a>

                    <form action="/posts/{{$post->id}}" method="post" class="inline" style="display: inline" >
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn inline-block btn-danger" value="Delete">
                        </form>
                    </div>
                </a>

                @endforeach


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
