@extends('layouts.app')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
    <h2>{{ $post->title }}</h2>
    <br><br><br>
    <p>{!! $post->body !!}</p>
    <br>
    <form action="{{ route('post.destroy', $post->id) }}" method="POST">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE">
        <a href="{{ route('post.edit', $post->id) }}">Edit</a>
        <input type="submit" value="Delete">
    </form>
@endsection