<h1>Edit Student</h1>

@if ($errors->any())
  @foreach($errors->all() as $error)
  <p>{{$error}}</p>
  @endforeach
@endif

<form action="/siswa/{{$siswa->id}}" method="POST">
    @csrf
    @method('PUT')

    <input name="nis" value="{{ old('nis', $siswa->nis) }}"
        placeholder="NIS" required><br>

    <input name="nama" value="{{ old('nama', $siswa->nama) }}"
        placeholder="Nama" required><br>

    <input name="rombel" value="{{ old('rombel', $siswa->rombel) }}"
        placeholder="Rombel" required><br>

    <input name="rayon" value="{{ old('rayon', $siswa->rayon) }}"
        placeholder="Rayon" required><br>

    <input name="no_telp" value="{{ old('no_telp', $siswa->no_telp) }}"
        placeholder="No.Telepon" required><br>

    <textarea name="alamat" placeholder="Alamat"
       required>{{ old('alamat', $siswa->alamat) }}</textarea><br>

     <button type="submit">Save</button>
</form>

<a href="/siswa">back</a>