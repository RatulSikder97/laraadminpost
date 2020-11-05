@extends('layouts.postlayout')

@section('content')
<div class="col-md-8">
<form action="/posts/{{$post->id}}" method="post">

        @csrf
        @method('put')

        <div class="form-group">
          <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Enter title" value="{{$post->title}}"  aria-describedby="helpId"

        >
        </div>

        <div class="form-group">
          <label for="body">Body</label>
        <textarea class="form-control" name="body" id="body" rows="3">{{$post->body}}</textarea>
        </div>





          <div class="from-group">
              @foreach ($tags as $tag)
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="tags[]" id="tags" value="{{$tag->tag}}"
                  {{ $post->tags == $tag->id ? 'checked' : '' }} >
                  {{$tag->tag}}

                </label>
              </div>
              @endforeach
          </div>
       <input name="update" id="update" class="btn btn-primary" type="submit" value="Update">
    </form>
</div>


@endsection
