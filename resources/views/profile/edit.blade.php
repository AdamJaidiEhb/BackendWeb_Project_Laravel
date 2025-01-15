<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profiel Bewerken') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('profile.update', $user->id) }}" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="username">Gebruikersnaam</label>
                    <input type="text" name="username" id="username" value="{{ old('username', $user->username) }}" required>
                </div>
                <div>
                    <label for="birthdate">Geboortedatum</label>
                    <input type="date" name="birthdate" id="birthdate" value="{{ old('birthdate', $user->birthdate) }}">
                </div>
                <div>
                    <label for="about_me">Over mij</label>
                    <textarea name="about_me" id="about_me">{{ old('about_me', $user->about_me) }}</textarea>
                </div>
                <div>
                    <label for="profile_picture">Profielfoto</label>
                    <input type="file" name="profile_picture" id="profile_picture">
                </div>
                <button type="submit">Opslaan</button>
            </form>
        </div>
    </div>
</x-app-layout>
