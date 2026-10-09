@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Peserta</h2>
    <form action="{{ route('peserta.update', $peserta->id_peserta) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3"><label>Nama</label><input type="text" name="nama" value="{{ $peserta->nama }}" class="form-control"></div>
        <div class="mb-3"><label>Email</label><input type="email" name="email" value="{{ $peserta->email }}" class="form-control"></div>
        <div class="mb-3"><label>No HP</label><input type="text" name="no_hp" value="{{ $peserta->no_hp }}" class="form-control"></div>
        <div class="mb-3"><label>Alamat</label><textarea name="alamat" class="form-control">{{ $peserta->alamat }}</textarea></div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
