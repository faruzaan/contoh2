<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index()
    {
        $data['result'] = \App\Models\Tugas::all();
        return view('tugas/index')->with($data);
    }
    public function create()
    {
        return view('user/form');
    }
    public function store(Request $request)
    {
        $rules = [
            'id_tipe_user' => 'required|max:100',
            'nama_depan' => 'required|max:100',
            'nama_belakang' => 'required|max:100',
            'email' => 'required|max:100',
            'username' => 'required|max:100',
            'password' => 'required|max:100'
        ];
        $this->validate($request, $rules);

        $request->password = bcrypt($request->password);
        $input = $request->all();
        $status = \App\Models\User::create($input);

        if ($status) return redirect('/user')->with('success','Data Berhasil Ditambahkan');
        else return redirect('/user')->with('error','Data Gagal Ditambahkan');
    }
    public function edit($id)
    {
        $data['result'] = \App\Models\User::where('id',$id)->first();
        return view('user/form')->with($data);
    }
    public function start(Request $request,$id)
    {
        $request->start = '3';
        $input = $request->all();
        $result = \App\Models\Tugas::where('id_tugas', $id)->first();
        $status = $result->update($input);

        if ($status) return redirect('/tugas')->with('success','Data Berhasil Diubah');
        else return redirect('/tugas')->with('error','Data Gagal Diubah');
    }
    public function finish(Request $request,$id)
    {
        // $rules = [
        //     'id_tipe_user' => 'required|max:100',
        //     'nama_depan' => 'required|max:100',
        //     'nama_belakang' => 'required|max:100',
        //     'email' => 'required|max:100',
        //     'username' => 'required|max:100',
        //     'password' => 'required|max:100'
        // ];
        // $this->validate($request, $rules);
        $request->status = '3';
        $input = $request->all();
        $result = \App\Models\Proses::where('id_proses', $id)->first();
        $status = $result->update($input);

        if ($status) return redirect('/tugas')->with('success','Data Berhasil Diubah');
        else return redirect('/tugas')->with('error','Data Gagal Diubah');
    }
    public function destroy(Request $request,$id)
    {
        $result = \App\Models\User::where('id',$id)->first();
        $status = $result->delete();

        if ($status) return redirect('/user')->with('success','Data Berhasil Dihapus');
        else return redirect('/user')->with('error','Data Gagal Dihapus');
    }
}
