<!-- resources/views/kasir/create.blade.php -->
@extends('layouts.app')

@section('title', 'Tambah Kasir')

@section('content')     
    <h1>Tambah Kasir</h1>

    <form action="{{ url('/kasir/tambah') }}" method="post">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>
        <br>
        <label for="alamat">Alamat:</label>
        <textarea name="alamat" required></textarea>
        <br>
        <!-- Tambahkan input lain sesuai kebutuhan -->
        <br>
        <button type="submit">Simpan</button>
    </form>
@endsection
