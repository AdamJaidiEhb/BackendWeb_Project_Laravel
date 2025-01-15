@extends('layouts.app')

@section('content')
    <h1>Nieuwe FAQ-item</h1>
    <form method="POST" action="{{ route('faq.store') }}">
        @csrf
        <div>
            <label for="category">Categorie</label>
            <input type="text" id="category" name="category" required>
        </div>
        <div>
            <label for="question">Vraag</label>
            <textarea id="question" name="question" required></textarea>
        </div>
        <div>
            <label for="answer">Antwoord</label>
            <textarea id="answer" name="answer" required></textarea>
        </div>
        <button type="submit">Opslaan</button>
    </form>
@endsection
