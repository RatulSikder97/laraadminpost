@extends('layouts.postlayout')



@section('content')
<!-- Blog Entries Column -->
<div class="col-md-8">


<h2>{{$post->title}}</h2>
<img src="/images/{{$post->image}}" alt="pic">
<p>{{$post->body}}</p>







</div>
@endsection
