<h1>Add Student</h1>

@if ($errors->any())
  @foreach($errors->all() as $error)
  <p>{{$error}}</p>
  @endforeach
@endif

<form action="/siswa" method="POST">
    @csrf

 <input name="nis" placeholder="NIS"
 value="{{ old('nis') }}" required><br>

 <input name="nama" placeholder="Nama"
 value="{{ old('nama') }}" required><br>
 
 <input name="rombel" placeholder="Rombel"
 value="{{old ('rombel') }}" required><br>

 <input name="rayon" placeholder="Rayon"
 value="{{ old('rayon') }}" required><br>

 <input name="no_telp" placeholder="No.Telepon"
 value="{{ old('no_telp') }}" required><br>

 <textarea name="alamat" placeholder="Alamat"
 required>{{ old('alamat') }}</textarea><br>

 <button type="submit">Save</button>
</form>

<a href="/siswa">back</a>