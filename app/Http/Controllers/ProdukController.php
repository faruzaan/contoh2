<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $data['result'] = \App\Models\Produk::all();
        return view('produk/index')->with($data);
    }
    public function create()
    {
        return view('produk/form');
    }
    public function store(Request $request)
    {
        $rules = [
        ];
        $this->validate($request, $rules);

        $input = $request->all();
        $status = \App\Models\Produk::create($input);

        if ($status) return redirect('/produk')->with('success','Data Berhasil Ditambahkan');
        else return redirect('/produk')->with('error','Data Gagal Ditambahkan');
    }
    public function edit($id)
    {
        $data['result'] = \App\Models\Produk::where('id_produk',$id)->first();
        return view('produk/form')->with($data);
    }
    public function update(Request $request,$id)
    {
        $rules = [
        ];
        $this->validate($request, $rules);

        $input = $request->all();
        $result = \App\Models\Produk::where('id_produk',$id)->first();
        $status = $result->update($input);

        if ($status) return redirect('/produk')->with('success','Data Berhasil Diubah');
        else return redirect('/produk')->with('error','Data Gagal Diubah');
    }
    public function destroy(Request $request,$id)
    {
        $result = \App\Models\Produk::where('id_produk',$id)->first();
        $status = $result->delete();

        if ($status) return redirect('/produk')->with('success','Data Berhasil Dihapus');
        else return redirect('/produk')->with('error','Data Gagal Dihapus');
    }
}
