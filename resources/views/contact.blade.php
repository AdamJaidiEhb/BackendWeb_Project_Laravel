<form method="POST" action="{{ route('contact.submit') }}">
    @csrf
    <label for="name">Naam</label>
    <input type="text" id="name" name="name" required>

    <label for="email">E-mail</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Bericht</label>
    <textarea id="message" name="message" required></textarea>

    <button type="submit">Verstuur</button>
</form>
