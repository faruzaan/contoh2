@extends('templates/header')

@section('contents')
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>{{empty($result) ? 'Tambah' : 'Edit'}} Tipe User</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item active">{{empty($result) ? 'Tambah' : 'Edit'}} Tipe User</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
        @include('templates/feedback')
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <a href="{{url('TipeUser/')}}" class="btn bg-purple">
                <i class="fa fa-chevron-left"></i>Kembali
              </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ empty($result) ? url("TipeUser/add") : url("TipeUser/$result->id_tipe_user/edit")}}" class="form-horizontal" method="POST">
                    {{csrf_field()}}
                    @if (!empty($result))
                        {{method_field('patch')}}
                    @endif
                    <div class="form-group">
                        <label class="control-label col-sm-2">Nama Tipe User</label>
                        <div class="col-sm-10">
                            <input type="text" name="tipe_user" class="form-control" placeholder="Masukan Tipe User" value="{{@$result->tipe_user}}">
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
