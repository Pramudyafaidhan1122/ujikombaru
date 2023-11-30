<!-- resources/views/kasir/edit.blade.php -->
@extends('layouts.app')

@section('title', 'Edit Kasir')

@section('content')
    <h1>Edit Kasir</h1>

    <form action="{{ url('/kasir/edit/'.$kasir->id) }}" method="post">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="{{ $kasir->nama }}" required>
        <br>
        <label for="alamat">Alamat:</label>
        <textarea name="alamat" required>{{ $kasir->alamat }}</textarea>
        <br>
        <!-- Tambahkan input lain sesuai kebutuhan -->
        <br>
        <button type="submit">Simpan</button>
    </form>
@endsection
