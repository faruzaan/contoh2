<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarProsesController extends Controller
{
    public function index()
    {
        $data['result'] = \App\Models\DaftarProses::all();
        return view('daftarproses/index')->with($data);
    }
    public function create()
    {
        return view('daftarproses/form');
    }
    public function store(Request $request)
    {
        $rules = [
            'nama_proses' => 'required|max:100',
            'tempat_proses' => 'required|max:100'
        ];
        $this->validate($request, $rules);

        $input = $request->all();
        $status = \App\Models\DaftarProses::create($input);

        if ($status) return redirect('/dftproses')->with('success','Data Berhasil Ditambahkan');
        else return redirect('/dftproses')->with('error','Data Gagal Ditambahkan');
    }
    public function edit($id)
    {
        $data['result'] = \App\Models\DaftarProses::where('id_dft_proses',$id)->first();
        return view('daftarproses/form')->with($data);
    }
    public function update(Request $request,$id)
    {
        $rules = [
            'nama_proses' => 'required|max:100',
            'tempat_proses' => 'required|max:100'
        ];
        $this->validate($request, $rules);

        $input = $request->all();
        $result = \App\Models\DaftarProses::where('id_dft_proses',$id)->first();
        $status = $result->update($input);

        if ($status) return redirect('/dftproses')->with('success','Data Berhasil Diubah');
        else return redirect('/dftproses')->with('error','Data Gagal Diubah');
    }
    public function destroy(Request $request,$id)
    {
        $result = \App\Models\DaftarProses::where('id_dft_proses',$id)->first();
        $status = $result->delete();

        if ($status) return redirect('/dftproses')->with('success','Data Berhasil Dihapus');
        else return redirect('/dftproses')->with('error','Data Gagal Dihapus');
    }
}
