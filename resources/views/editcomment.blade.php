@extends('template')
@section('main')
    <h1>Tambah Comment</h1>
    <form action="{{ route('comment.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Comment</label>
            <input type="text" class="form-control" name="comment" value="{{ $data->comment }}">
            @error('comment')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
