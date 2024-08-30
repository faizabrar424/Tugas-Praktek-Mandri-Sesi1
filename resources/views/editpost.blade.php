@extends('template')
@section('main')
    <form action="{{ route('post.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control" name="judul" value="{{ $data->judul }}">
            @error('judul')
                <div class="alert alert-danger">{{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Content</label>
            <input type="text" class="form-control" name="content" value="{{ $data->content }}">
            @error('content')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
