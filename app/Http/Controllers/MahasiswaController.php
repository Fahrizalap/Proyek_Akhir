<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;

class MahasiswaController extends Controller
{
    public function index(){
        $data = mahasiswa::all();
        return view('readmahasiswa', compact('data'));
    }

    public function create(){
        return view('createmahasiswa');
    }

    public function insert(Request $request){
        mahasiswa::create($request->all());
        return redirect()->route('readmahasiswa')->with('success','Data Berhasil Ditambahkan!');
    }

    public function edit($id){
        $data = mahasiswa::find($id); 
        return view('editmahasiswa', compact('data'));
    }

    public function update(Request $request, $id) {
        $data = mahasiswa::find($id);
        $data->update($request->all());
        return redirect()->route('readmahasiswa')->with('success','Data Berhasil Diperbarui!');
    }

    public function delete($id){
        $data = mahasiswa::find($id);
        $data->delete();
        return redirect()->route('readmahasiswa')->with('success','Data Berhasil Dihapus!');
    }
}
