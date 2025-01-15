@extends('layouts.app')

@section('content')
    <h1>FAQ-item Bewerken</h1>
    <form method="POST" action="{{ route('faq.update', $faq->id) }}">
        @csrf
        <div>
            <label for="category">Categorie</label>
            <input type="text" id="category" name="category" value="{{ $faq->category }}" required>
        </div>
        <div>
            <label for="question">Vraag</label>
            <textarea id="question" name="question" required>{{ $faq->question }}</textarea>
        </div>
        <div>
            <label for="answer">Antwoord</label>
            <textarea id="answer" name="answer" required>{{ $faq->answer }}</textarea>
        </div>
        <button type="submit">Bijwerken</button>
    </form>
@endsection
