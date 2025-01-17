@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Profil de {{ $user->username }}</h1>
    <p><strong>Email :</strong> {{ $user->email }}</p>
    <p><strong>Rôle :</strong> {{ $user->role }}</p>
    <p><strong>Date de naissance :</strong> {{ $user->birthdate ?? 'Non renseignée' }}</p>
    <p><strong>À propos :</strong> {{ $user->about_me ?? 'Non renseigné' }}</p>
    <img src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : asset('images/default-profile.png') }}" alt="Photo de profil" style="max-width: 150px;">
    @if (Auth::id() === $user->id)
        <a href="{{ route('profile.edit') }}">Modifier votre profil</a>
    @endif
</div>
@endsection
