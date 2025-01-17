@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Alle Nieuwsartikelen</h1>
    @foreach($news as $article)
        <div>
            <h2>{{ $article->title }}</h2>
            <p>Door: {{ $article->user->name }}</p>
            <p>{{ Str::limit($article->content, 150) }}</p>
            <p>Aantal likes: {{ $article->likedBy->count() }}</p>
            <a href="{{ route('news.show', $article) }}">Lees meer</a>
        </div>
    @endforeach
</div>
@endsection
