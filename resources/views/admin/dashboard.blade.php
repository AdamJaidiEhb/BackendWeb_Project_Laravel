@extends('layouts.app')

@section('content')
    <h1>Admin Dashboard</h1>
    <p>Welkom bij het admin-dashboard. Gebruik de onderstaande links om onderdelen te beheren.</p>

    <h2>Beheer</h2>
    <ul>
        <li><a href="{{ route('admin.users') }}">Gebruikers beheren</a></li>
        <li><a href="{{ route('news.create') }}">Nieuws toevoegen</a></li>
        <li><a href="{{ route('faq.create') }}">FAQ-item toevoegen</a></li>
    </ul>
@endsection
