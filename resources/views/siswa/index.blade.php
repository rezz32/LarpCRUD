<h1>Students Data</h1>

<a href="/siswa/create">Add Student</a>

<form action="/logout" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>

<table border="1" cellpadding="8">
     <tr>
        <th>NIS</th>
        <th>Nama</th>
        <th>Rombel</th>
        <th>Rayon</th>
        <th>No. Telepon</th>
        <th>Alamat</th>
        <th>Action</th>
     </tr>

     @foreach ($siswa as $s)
     <tr>
            <td>{{ $s->nis }}</td>
            <td>{{ $s->nama }}</td>
            <td>{{ $s->rombel }}</td>
            <td>{{ $s->rayon }}</td>
            <td>{{ $s->no_telp }}</td>
            <td>{{ $s->alamat }}</td>
            <td>
                <a href="/siswa/{{ $s->id }}/edit">Edit</a>

                <form action="/siswa/{{ $s->id }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
