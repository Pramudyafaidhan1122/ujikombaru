<!-- resources/views/kasir/index.blade.php -->
@extends('layouts.app')

@section('title', 'Data Kasir')

@section('content')
    <h1>Data Kasir</h1>
    <a href="{{ url('/kasir/create') }}">Tambah Kasir</a>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kasirs as $kasir)
            <tr>
                <td>{{ $kasir->id }}</td>
                <td>{{ $kasir->nama }}</td>
                <td>{{ $kasir->alamat }}</td>
                <td>
                    <a href="{{ url('/kasir/edit/'.$kasir->id) }}">Edit</a>
                    <a href="{{ url('/kasir/hapus/'.$kasir->id) }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
