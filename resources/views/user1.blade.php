@extends('template')
@section('main')
    <h1>Ini Halaman User</h1>
    <a href="{{ url('user1/create') }}" class="btn btn-primary">Tambah User</a>
    {{-- <a href="{{ route('siswa/create') }}" class="btn btn-primary">Tambah Siswa Route</a> --}}
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">User</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->nama }}</td>
                    
                    <td>
                        <a href="{{ route('user1.edit', $item->id) }}" class="btn btn-warning">Update</a>
                        <form action="{{ route('user1.destroy', $item->id) }}" method="POST">
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
