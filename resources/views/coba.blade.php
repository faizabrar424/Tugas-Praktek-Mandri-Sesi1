@extends('template')
@section('main')
    @for ($i = 1; $i <= 10; $i++)
        @if ($i % 2)
            <h1>Ini perulangan menggunakan blade</h1>
        @endif
    @endfor

    @php
        $no = 15;
        echo $no;
    @endphp

    <h1>Ini Halaman Coba</h1>

    <img src="{{ asset('img/foto.png') }}" width="200" alt="img">
@endsection

