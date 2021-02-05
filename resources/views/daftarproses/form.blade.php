@extends('templates/header')

@section('contents')
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>{{empty($result) ? 'Tambah' : 'Edit'}} Daftar Proses</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item active">{{empty($result) ? 'Tambah' : 'Edit'}} Daftar Proses</li>
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
              <a href="{{url('dftproses/')}}" class="btn bg-purple">
                <i class="fa fa-chevron-left"></i>Kembali
              </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ empty($result) ? url("dftproses/add") : url("dftproses/$result->id_dft_proses/edit")}}" class="form-horizontal" method="POST">
                    {{csrf_field()}}
                    @if (!empty($result))
                        {{method_field('patch')}}
                    @endif
                    <div class="form-group">
                        <label class="control-label col-sm-2">Nama Proses</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_proses" class="form-control" placeholder="Masukan Nama Proses" value="{{@$result->nama_proses}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2">Tempat Proses</label>
                        <div class="col-sm-10">
                            <input type="text" name="tempat_proses" class="form-control" placeholder="Masukan Tempat Proses" value="{{@$result->tempat_proses}}">
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
