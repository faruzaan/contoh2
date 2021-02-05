@extends('templates/header')

@section('contents')
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>{{empty($result) ? 'Tambah' : 'Edit'}} User</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item active">{{empty($result) ? 'Tambah' : 'Edit'}} User</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <a href="{{url('user/')}}" class="btn bg-purple">
                <i class="fa fa-chevron-left"></i>Kembali
              </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ empty($result) ? url("user/add") : url("user/$result->id/edit")}}" class="form-horizontal" method="POST">
                    {{csrf_field()}}
                    @if (!empty($result))
                        {{method_field('patch')}}
                    @endif

                    <div class="form-group">
                        <label class="control-label col-sm-2">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" placeholder="Masukan Nama" value="{{@$result->name}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2">Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" class="form-control" placeholder="Masukan Email" value="{{@$result->email}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2">Password</label>
                        <div class="col-sm-10">
                            <input type="text" name="password" class="form-control" placeholder="Masukan Password" value="{{@$result->password}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2">Tipe User</label>
                        <div class="col-sm-10">
                            <select name="id_tipe_user" class="form-control">
                                <option value="" disabled selected hidden>Pilih Tipe</option>
                                @foreach (\App\Models\TipeUser::all() as $tipeuser)
                                    <option value="{{@$tipeuser->id_tipe_user}}" {{@$result->id_tipe_user == $tipeuser->id_tipe_user ? 'selected' : ''}}>
                                    {{@$tipeuser->tipe_user}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>
                            Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
@endsection
