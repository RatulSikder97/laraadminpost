@extends('layouts.postlayout')



@section('content')
<!-- Blog Entries Column -->
<div class="col-md-8">

    <h1 class="my-4">Page Heading
      <small>Secondary Text</small>
    </h1>

    <!-- Blog Post -->
    @foreach ($posts as $post)
    <div class="card mb-4">
        <img class="card-img-top" src="/images/{{$post->image}}" alt="Card image cap">
        <div class="card-body">
          <h2 class="card-title">{{$post->title}}</h2>
          <p class="card-text">{{$post->body}}</p>
         <a href="{{route('post',$post->id)}}" class="btn btn-primary">Read More &rarr;</a>
        </div>
        <div class="card-footer text-muted">
         {{$post->created_at}}

        </div>
      </div>
    @endforeach






    <!-- Pagination -->
    <ul class="pagination justify-content-center mb-4">
        {{ $posts->links() }}
    </ul>

  </div>
@endsection
