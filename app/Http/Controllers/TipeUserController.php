<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipeUserController extends Controller
{
    public function index()
    {
        $data['result'] = \App\Models\TipeUser::all();
        return view('TipeUser/index')->with($data);
    }
    public function create()
    {
        return view('TipeUser/form');
    }
    public function store(Request $request)
    {
        $rules = [
            'tipe_user' => 'required|max:100'
        ];
        $this->validate($request, $rules);

        $input = $request->all();
        $status = \App\Models\TipeUser::create($input);

        if ($status) return redirect('/TipeUser')->with('success','Data Berhasil Ditambahkan');
        else return redirect('/TipeUser')->with('error','Data Gagal Ditambahkan');
    }
    public function edit($id)
    {
        $data['result'] = \App\Models\TipeUser::where('id_tipe_user',$id)->first();
        return view('TipeUser/form')->with($data);
    }
    public function update(Request $request,$id)
    {
        $rules = [
            'tipe_user' => 'required|max:100'
        ];
        $this->validate($request, $rules);

        $input = $request->all();
        $result = \App\Models\TipeUser::where('id_tipe_user',$id)->first();
        $status = $result->update($input);

        if ($status) return redirect('/TipeUser')->with('success','Data Berhasil Diubah');
        else return redirect('/TipeUser')->with('error','Data Gagal Diubah');
    }
    public function destroy(Request $request,$id)
    {
        $result = \App\Models\TipeUser::where('id_tipe_user',$id)->first();
        $status = $result->delete();

        if ($status) return redirect('/TipeUser')->with('success','Data Berhasil Dihapus');
        else return redirect('/TipeUser')->with('error','Data Gagal Dihapus');
    }
}
