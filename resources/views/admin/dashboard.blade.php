@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <p>Aantal Nieuwsitems: {{ $newsCount }}</p>
    <p>Totaal aantal gebruikers: {{ $usersCount }}</p>
    <ul>
        <li><a href="{{ route('admin.users') }}">Gebruikers beheren</a></li>
    </ul>
</div>
@endsection
