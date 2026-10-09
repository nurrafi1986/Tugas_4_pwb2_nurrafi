@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Peserta</h2>
    <a href="{{ route('peserta.create') }}" class="btn btn-primary mb-3">Tambah Peserta</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th><th>Nama</th><th>Email</th><th>No HP</th><th>Alamat</th><th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peserta as $p)
            <tr>
                <td>{{ $p->id_peserta }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->email }}</td>
                <td>{{ $p->no_hp }}</td>
                <td>{{ $p->alamat }}</td>
                <td>
                    <a href="{{ route('peserta.edit', $p->id_peserta) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('peserta.destroy', $p->id_peserta) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus peserta ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
