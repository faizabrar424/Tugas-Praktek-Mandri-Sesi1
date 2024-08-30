@extends('template')
@section('main')
    <h1>Ini Halaman Post</h1>
    <a href="{{ url('post/create') }}" class="btn btn-primary">Tambah Post</a>
    {{-- <a href="{{ route('siswa/create') }}" class="btn btn-primary">Tambah Siswa Route</a> --}}
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Content</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->content }}</td>
                    <td>
                        <a href="{{ route('post.edit', $item->id) }}" class="btn btn-warning">Update</a>
                        <form action="{{ route('post.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
