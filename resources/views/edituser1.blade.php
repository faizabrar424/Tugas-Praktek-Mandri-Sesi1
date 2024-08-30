@extends('template')
@section('main')
    <h1>Edit User</h1>
    <form action="{{ route('user1.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>User</label>
            <input type="text" class="form-control" name="nama" value="{{ $data->nama }}">
            @error('nama')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
