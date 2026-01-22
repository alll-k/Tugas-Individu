<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data = Mahasiswa::all();

        return view('mahasiswa', compact('data'), [
            "title" => "Data Mahasiswa",
        ]);
    }

    public function tambahmahasiswa()
    {
        return view('tambahmahasiswa', [
            "title" => "Tambah Data Mahasiswa",
        ]);
    }

    public function insertdata(Request $request)
    {
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function tampildata($id)
    {
        $data = Mahasiswa::find($id);

        return view("edit", [
            "title" => "Edit Data Mahasiswa",
            "data" => $data,
        ]);
    }

    public function editdata(Request $request, $id)
    {
        $data = Mahasiswa::find($id);
        $data->update($request->all());

        return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Diedit');
    }

    // --- TAMBAHKAN KODE DI BAWAH INI ---

    public function delete($id)
    {
        $data = Mahasiswa::find($id);

        if ($data) {
            $data->delete();
            return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Dihapus');
        }

        return redirect()->route('mahasiswa')->with('error', 'Data tidak ditemukan');
    }
}