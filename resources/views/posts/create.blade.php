@extends('layouts.postlayout')

@section('content')
<div class="col-md-8">
    <form action="/posts" method="post">

        @csrf

        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" id="title" class="form-control" placeholder="Enter title" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="body">Body</label>
          <textarea class="form-control" name="body" id="body" rows="3"></textarea>
        </div>

        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="tags[]" id="tags" value="checkedValue" >
            Display value
          </label>
        </div>



          <div class="from-group">
              @foreach ($tags as $tag)
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="tags[]" id="tags" value="{{$tag->tag}}" >
                  {{$tag->tag}}
                </label>
              </div>
              @endforeach
          </div>
       <input name="save" id="save" class="btn btn-primary" type="submit" value="save">
    </form>
</div>


@endsection
