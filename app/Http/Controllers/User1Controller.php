<?php

namespace App\Http\Controllers;

use App\Models\User1;
use Illuminate\Http\Request;

class User1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User1::all();
        return view('user1', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambahuser1');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'nama' => 'required|string',
        ]);
        User1::create($validator);
        return redirect('user1');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $data = User1::find($id);
        return view('edituser1', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = $request->validate([
            'nama' => 'required|string',
        ]);
        User1::find($id)->update($validator);
        return redirect('user1');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User1::find($id)->delete();
        return redirect('user1');
    }
}
