<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return response($data 200);
        return response([
            'massage' => 'Data berhasil ditamplkan',
            'data' => Siswa::all()
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'nis' => 'required|integer',
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'sekolah_id' => 'required|integer',
        ]);
        return response([
            'message' => 'Data berhasil diinputkan',
            'data' => Siswa::create($validator)
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response([
            'massage' => 'Data berhasil ditampilkan',
            'data' => Siswa::find($id)
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = $request->validate([
            'nis' => 'required|integer',
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'sekolah_id' => 'required|integer',
        ]);

        $data = Siswa::find($id);
        $data->update($validator);

        return response([
            'message' => 'Data berhasil diupdate',
            'data' => $data
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Siswa::find($id)->delete();

        return response([
            'message' => 'Data berhasil delete'
        ], 200);
    }
}
