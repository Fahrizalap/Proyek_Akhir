<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\makul;

class MakulController extends Controller
{
    public function index(){
        $data = makul::all();
        return view('readmakul', compact('data'));
    }

    public function create(){
        return view('createmakul');
    }

    public function insert(Request $request){
        makul::create($request->all());
        return redirect()->route('readmakul')->with('success','Data Berhasil Ditambahkan!');
    }

    public function edit($id){
        $data = makul::find($id); 
        return view('editmakul', compact('data'));
    }

    public function update(Request $request, $id) {
        $data = makul::find($id);
        $data->update($request->all());
        return redirect()->route('readmakul')->with('success','Data Berhasil Diperbarui!');
    }

    public function delete($id){
        $data = makul::find($id);
        $data->delete();
        return redirect()->route('readmakul')->with('success','Data Berhasil Dihapus!');
    }
}
