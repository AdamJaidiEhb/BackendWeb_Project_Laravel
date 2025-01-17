@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gebruikers beheren</h1>
    @foreach ($users as $user)
        <p>{{ $user->username }} ({{ $user->role }})</p>
        @if ($user->role !== 'admin')
            <form method="POST" action="{{ route('admin.makeAdmin', $user->id) }}">
                @csrf
                <button type="submit">Maak Admin</button>
            </form>
        @endif
    @endforeach
</div>
@endsection
