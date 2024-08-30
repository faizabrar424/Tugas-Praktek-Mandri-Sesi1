@extends('template')
@section('main')
    <h1>Tambah User</h1>
    <form action="{{ route('user1.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>User</label>
            <input type="text" class="form-control" name="nama">
            @error('nama')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
