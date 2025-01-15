<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profiel</title>
</head>
<body>
    <h1>{{ $user->username }}</h1>
    <p>Geboortedatum: {{ $user->birthdate }}</p>
    <p>Over mij: {{ $user->about_me }}</p>
    <img src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : asset('images/default-profile.png') }}" alt="Profielfoto">
    <a href="{{ route('profile.edit') }}">Profiel bewerken</a>
</body>
</html>
