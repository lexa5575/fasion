@extends('layouts.main')

@section('content')
<form action="{{route('post.store')}}" method="post">
    @csrf
    <div class="mb-3">
      <label for="title">Title</label>
      <input type="text" name="title" class="form-control" id="title" placeholder="Title">
    </div>
    <div class="mb-3">
        <label for="content">Content</label>
        <textarea name="content" input class="form-control" id="content" placeholder="Content"></textarea>
      </div>
      <div class="mb-3">
        <label for="image">Image</label>
        <input name="image" type="text" class="form-control" id="image" placeholder="Image">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
