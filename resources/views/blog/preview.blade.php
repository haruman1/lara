@extends('layouts.app')

@section('content')
    <article class="prose mx-auto p-6">
        <h1>{{ $post->title }}</h1>
        <p><small>Kategori: {{ $post->category->name }}</small></p>
        {!! $post->content !!}
    </article>
@endsection
