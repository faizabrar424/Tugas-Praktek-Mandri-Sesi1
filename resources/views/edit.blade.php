@extends('template')
@section('main')
    <form action="{{ route('siswa.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>NIS</label>
            <input type="number" class="form-control" name="nis" value="{{ $data->nis }}">
            @error('nis')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" value="{{ $data->nama }}">
            @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" name="alamat" value="{{ $data->alamat }}">
            @error('alamat')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Sekolah</label>
            <select class="form-control" name="sekolah_id">
                @foreach ($sekolah as $item)
                    <option value="{{ $item->id }}" @selected($data->sekolah_id == $item->id)>{{ $item->nama_sekolah }}
                    </option>
                @endforeach
            </select>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
