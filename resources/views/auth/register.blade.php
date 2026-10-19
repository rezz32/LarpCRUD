<h2> Register </h2>

@if ($errors->any())
  @foreach($errors->all() as $error)
  <p>{{ $error}}</p>
  @endforeach
@endif

<form action="/register" method="POST">
    @csrf

    <input name="name" placeholder="name"
        value="{{ old('name') }}" required>
    
    <input type="email" name="email"
     placeholder="Email"
        value="{{ old('email') }}" required>

    <input type="password" name="password" placeholder="password"required>

    <input type="password" name="password_confirmation"
    placeholder="Confirm Password" required>
    
    <button type="submit">Register</button>
</form>

<a href="/login">Already have an account? Login</a>