<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProsesController extends Controller
{
    public function index()
    {
        $data['result'] = \App\Models\Proses::all();
        return view('proses/index')->with($data);
    }
    public function create($id)
    {
        $data['result'] = \App\Models\Produk::where('id_produk',$id)->first();
        return view('proses/form')->with($data);
    }
    public function store(Request $request)
    {
        $rules = [
        ];
        $this->validate($request, $rules);

        $input = $request->all();
        $status = \App\Models\Proses::create($input);
        $status = \App\Models\Tugas::create($input);

        if ($status) return redirect('/proses')->with('success','Data Berhasil Ditambahkan');
        else return redirect('/proses')->with('error','Data Gagal Ditambahkan');
    }
    public function edit($id)
    {
        $data['result'] = \App\Models\Proses::where('id_proses',$id)->first();
        return view('proses/form')->with($data);
    }
    public function update(Request $request,$id)
    {
        $rules = [
        ];
        $this->validate($request, $rules);

        $input = $request->all();
        $result = \App\Models\Proses::where('id_proses',$id)->first();
        $status = $result->update($input);

        if ($status) return redirect('/proses')->with('success','Data Berhasil Diubah');
        else return redirect('/proses')->with('error','Data Gagal Diubah');
    }
    public function destroy(Request $request,$id)
    {
        $result = \App\Models\Proses::where('id_proses',$id)->first();
        $status = $result->delete();

        if ($status) return redirect('/proses')->with('success','Data Berhasil Dihapus');
        else return redirect('/proses')->with('error','Data Gagal Dihapus');
    }
}
