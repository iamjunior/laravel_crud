@extends('layouts.app')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
    <h2>{{ $post->title }}</h2>
    <br><br><br>
    <p>{!! $post->body !!}</p>
@endsection