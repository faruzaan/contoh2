@extends('templates/header')

@section('contents')
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Proses</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item active">Tambah Proses</li>
            {{-- {{empty($result) ? 'Tambah' : 'Edit'}} --}}
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
              <a href="{{url('proses/')}}" class="btn bg-purple">
                <i class="fa fa-chevron-left"></i>Kembali
              </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{url("proses/add")}}" class="form-horizontal" method="POST">
                    {{csrf_field()}}
                    {{-- <div class="form-group">
                        <label class="control-label col-sm-2">Produk</label>
                        <div class="col-sm-10">
                            <select name="id_produk" class="form-control">
                                <option value="" disabled selected hidden>Pilih Tipe</option>
                                @foreach (\App\Models\Produk::all() as $produk)
                                    <option value="{{@$produk->id_produk}}" {{@$result->id_produk == $produk->id_produk ? 'selected' : ''}}>
                                    {{@$produk->nama_produk}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> --}}
                    <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
                    <input type="hidden" name="id_produk" value="{{@$result->id_produk}}">
                    <input type="hidden" name="status" value="0">
                    <div class="form-group">
                        <label class="control-label col-sm-2">Nama User</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_user" class="form-control" value="{{Auth::user()->name}}" placeholder="{{Auth::user()->name}}" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">Produk</label>
                        <div class="col-sm-10">
                            <select name="id_produk" class="form-control" disabled>
                                <option value="{{@$result->id_produk}}" disabled selected>{{@$result->nama_produk}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">Varian</label>
                        <div class="col-sm-10">
                            <select name="id_varian" class="form-control">
                                <option value="" disabled selected hidden>Pilih Varian</option>
                                @foreach (\App\Models\Varian::all() as $varian)
                                    <option value="{{@$varian->id_varian}}" >
                                    {{@$varian->nama_varian}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">Proses</label>
                        <div class="col-sm-10">
                            <select name="id_dft_proses" class="form-control">
                                <option value="" disabled selected hidden>Pilih Proses</option>
                                @foreach (\App\Models\DaftarProses::all() as $dftproses)
                                    <option value="{{@$dftproses->id_dft_proses}}" {{@$result->id_dft_proses == $dftproses->id_dft_proses ? 'selected' : ''}}>
                                    {{@$dftproses->nama_proses}}</option>
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
