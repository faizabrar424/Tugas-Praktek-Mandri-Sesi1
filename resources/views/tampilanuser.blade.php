@extends('template')
@section('main')
<h1>Halo {{ Auth::user()->name }}</h1>
<h2>Halaman User</h2>
@endsection