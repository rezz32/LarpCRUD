<h2> Login </h2>

@if (session('error'))
<p>{{ session('error') }}</p>
@endif

@if ($errors->any())
  @foreach($errors->all() as $error)
  <p>{{$error}}</p>
  @endforeach
@endif

<form action="/login" method="POST">
    @csrf
    
    <input type="email" name="email"
        placehoder=Email" required>

    <input type="password" name="password"
        placeholder="Password" required>
    
    <button type="submit">login</button>
</form>

<a href="/register">dont have an account? Register</a>