@extends('layouts.app')

@section('content')

<h1>Posts</h1>

@forelse ($posts as $post)
   <p> {{ $post->title }} </p>

@empty
    <p>Nenhum registro</p>

@endforelse

@endsection