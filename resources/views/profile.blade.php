<link rel="stylesheet" href="/css/style.css">

@extends('layout')

@section('title', 'Halaman About')

@section('content')
    <h1>Halaman About</h1>
    <p>Nama: {{ $nama }}</p>
    <p>Email: {{ $email }}</p>
    <p>Hobi: {{ $hobi }}</p>
    <p>Umur: {{ $umur }}</p>

    <button onclick="tampilkanUmur()">Tampilkan Umur</button>

    <script>
        function tampilkanUmur() {
            const umur = {{ $umur }};
            alert(`Umur: ${umur} tahun`);
        }
    </script>
@endsection
