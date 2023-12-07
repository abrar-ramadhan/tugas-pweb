<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswas.index', compact('mahasiswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'npm' => 'required|max:255',
            'tingkat' => 'required|max:255',
            'kelas' => 'required|max:255',
            'jurusan' => 'required|max:255',
        ]);

        Mahasiswa::create($validatedData);
        return redirect()->route('mahasiswas.index')->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswas.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'npm' => 'required|max:255',
            'tingkat' => 'required|max:255',
            'kelas' => 'required|max:255',
            'jurusan' => 'required|max:255',
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($validatedData);
        return redirect()->route('mahasiswas.index')->with('success', 'Data Mahasiswa Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Mahasiswa::destroy($id);
        return redirect()->route('mahasiswas.index')->with('success', 'Data Mahasiswa Berhasil Dihapus');
    }
}
