@extends('layouts.main')
@section('content')
    <div>
        {{ $post->id }}. {{ $post->title}}
        {{ $post->content}}
    </div>
@endsection
