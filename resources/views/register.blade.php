<form action="{{ route('register.post') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Full Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Register</button>
    @if ($errors->has('registration'))
        <p>{{ $errors->first('registration') }}</p>
    @endif
</form>
