@extends('layouts.app')

@section('content')
    <h1>FAQ</h1>
    @foreach ($faqs as $faq)
        <div>
            <h2>{{ $faq->category }}</h2>
            <p><strong>Vraag:</strong> {{ $faq->question }}</p>
            <p><strong>Antwoord:</strong> {{ $faq->answer }}</p>
        </div>
    @endforeach
@endsection
