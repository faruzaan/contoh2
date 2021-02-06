@push('style')
<link rel="stylesheet" href="{{asset('assets')}}//plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('assets')}}//plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
@endpush

@extends('templates/header')

@section('contents')
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Tugas</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item active">Data Tugas</li>
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
              {{-- <a href="{{url('user/add')}}" class="btn btn-success">
                <i class="fa fa-plus-circle"></i>Tambah
              </a> --}}
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Nama Varian</th>
                    <th>Tugas</th>
                    <th>User</th>
                    <th>Start</th>
                    <th>Finish</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($result as $row)
                    @if (@$row->id_user == Auth::user()->id)
                    <tr>
                        <td>{{ !empty($i) ? ++$i : $i = 1 }}</td>
                        <td>{{@$row->produk->nama_produk}}</td>
                        <td>{{@$row->varian->nama_varian}}</td>
                        <td>{{@$row->daftarproses->nama_proses}}</td>
                        <td>{{@$row->user->name}}</td>
                        <td>{{@$row->start}}</td>
                        <td>{{@$row->finish}}</td>
                        <td>
                            @if (@$row->start == 1)
                            <form action="{{url("tugas/$row->id_tugas/start")}}" method="POST" style="display: inline;">
                                {{csrf_field()}}
                                {{method_field('patch')}}
                                <button class="btn btn-sm btn-success">Mulai
                            </form>
                            @else
                            <form action="{{url("tugas/$row->id_tugas/finish")}}" method="POST" style="display: inline;">
                                {{csrf_field()}}
                                {{method_field('patch')}}
                                <button class="btn btn-sm btn-warning">Selesai
                            </form>
                            @endif


                        </td>
                    </tr>
                    @endif

                    @endforeach
                </tbody>
              </table>
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

@push('script')
<script src="{{asset('assets')}}//plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('assets')}}//plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('assets')}}//plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('assets')}}//plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
</script>

@endpush
