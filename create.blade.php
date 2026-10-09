@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Peserta</h2>
    <form action="{{ route('peserta.store') }}" method="POST">
        @csrf
        <div class="mb-3"><label>Nama</label><input type="text" name="nama" class="form-control"></div>
        <div class="mb-3"><label>Email</label><input type="email" name="email" class="form-control"></div>
        <div class="mb-3"><label>No HP</label><input type="text" name="no_hp" class="form-control"></div>
        <div class="mb-3"><label>Alamat</label><textarea name="alamat" class="form-control"></textarea></div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
