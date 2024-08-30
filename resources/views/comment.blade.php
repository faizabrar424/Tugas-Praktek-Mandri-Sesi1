@extends('template')
@section('main')
    <h1>Ini Halaman Comment</h1>
    <a href="{{ url('comment/create') }}" class="btn btn-primary">Tambah Comment</a>
    {{-- <a href="{{ route('siswa/create') }}" class="btn btn-primary">Tambah Siswa Route</a> --}}
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Comment</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->comment }}</td>
                    
                    <td>
                        <a href="{{ route('comment.edit', $item->id) }}" class="btn btn-warning">Update</a>
                        <form action="{{ route('comment.destroy', $item->id) }}" method="POST">
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
