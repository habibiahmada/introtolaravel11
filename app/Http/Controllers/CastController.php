<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $casts = DB::table('casts')->get();
        return view('cast.index', compact('casts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cast.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|min:5',
        ]);

        // query untuk save data
        $query = DB::table('casts')->insert([
            "name" => $request["name"],
            "age" => $request["age"],
            "bio" => $request["bio"]
        ]);

        return redirect()->route('cast.index')->with('success', 'Genre berhasil ditambahkan');
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
    public function edit(string $id)
    {
        //
        $cast = DB::table('casts')->where('id', $id)->first();
        return view('cast.update', compact('cast'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        //validasi data inputan data wajib diisi dan minimal 5 karakter
        $request->validate([
          'name'  => 'required|min:5',
        ]);
        // Query Untuk mengupdate data
        $query = DB::table('casts')
        ->where('id', $id)
        ->update([
            'name'  => $request['name'],
        ]);
        // Jika data disimpan maka di redirect ke halaman index
        return redirect()->route('cast.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $query = DB::table('casts')
        ->where('id', $id)
        ->delete();

        return redirect()->route('cast.index');
    }
}
