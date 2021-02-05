<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data['result'] = \App\Models\User::all();
        return view('user/index')->with($data);
    }
    public function create()
    {
        return view('user/form');
    }
    public function store(Request $request)
    {
        $rules = [
            'id_tipe_user' => 'required|max:100',
            'name' => 'required|max:100',
            'email' => 'required|max:100',
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
    public function update(Request $request,$id)
    {
        $rules = [
            'id_tipe_user' => 'required|max:100',
            'name' => 'required|max:100',
            'email' => 'required|max:100',
            'password' => 'required|max:100'
        ];
        $this->validate($request, $rules);

        $input = $request->all();
        $result = \App\Models\User::where('id', $id)->first();
        $status = $result->update($input);

        if ($status) return redirect('/user')->with('success','Data Berhasil Diubah');
        else return redirect('/user')->with('error','Data Gagal Diubah');
    }
    public function destroy(Request $request,$id)
    {
        $result = \App\Models\User::where('id',$id)->first();
        $status = $result->delete();

        if ($status) return redirect('/user')->with('success','Data Berhasil Dihapus');
        else return redirect('/user')->with('error','Data Gagal Dihapus');
    }
}
