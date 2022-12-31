<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dosen;

class DosenController extends Controller
{
    public function index(){
        $data = dosen::all();
        return view('readdosen', compact('data'));
    }

    public function create(){
        return view('createdosen');
    }

    public function insert(Request $request){
        dosen::create($request->all());
        return redirect()->route('readdosen')->with('success','Data Berhasil Ditambahkan!');
    }

    public function edit($id){
        $data = dosen::find($id); 
        return view('editdosen', compact('data'));
    }

    public function update(Request $request, $id) {
        $data = dosen::find($id);
        $data->update($request->all());
        return redirect()->route('readdosen')->with('success','Data Berhasil Diperbarui!');
    }

    public function delete($id){
        $data = dosen::find($id);
        $data->delete();
        return redirect()->route('readdosen')->with('success','Data Berhasil Dihapus!');
    }
}
