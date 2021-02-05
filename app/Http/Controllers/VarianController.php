<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VarianController extends Controller
{
    public function index()
    {
        $data['result'] = \App\Models\Varian::all();
        return view('varian/index')->with($data);
    }
    public function create()
    {
        return view('varian/form');
    }
    public function store(Request $request)
    {
        $rules = [
            'nama_varian' => 'required|max:100'
        ];
        $this->validate($request, $rules);

        $input = $request->all();
        $status = \App\Models\Varian::create($input);

        if ($status) return redirect('/varian')->with('success','Data Berhasil Ditambahkan');
        else return redirect('/varian')->with('error','Data Gagal Ditambahkan');
    }
    public function edit($id)
    {
        $data['result'] = \App\Models\Varian::where('id_varian',$id)->first();
        return view('varian/form')->with($data);
    }
    public function update(Request $request,$id)
    {
        $rules = [
            'nama_varian' => 'required|max:100'
        ];
        $this->validate($request, $rules);

        $input = $request->all();
        $result = \App\Models\Varian::where('id_varian', $id)->first();
        $status = $result->update($input);

        if ($status) return redirect('/varian')->with('success','Data Berhasil Diubah');
        else return redirect('/varian')->with('error','Data Gagal Diubah');
    }
    public function destroy(Request $request,$id)
    {
        $result = \App\Models\Varian::where('id_varian',$id)->first();
        $status = $result->delete();

        if ($status) return redirect('/varian')->with('success','Data Berhasil Dihapus');
        else return redirect('/varian')->with('error','Data Gagal Dihapus');
    }
}
