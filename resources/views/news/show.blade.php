@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $news->title }}</h1>
    <p>Door: {{ $news->user->name }}</p>
    <p>{{ $news->content }}</p>
    <p>Aantal likes: {{ $news->likedBy->count() }}</p>
</div>
@endsection
