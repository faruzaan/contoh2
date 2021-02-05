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
          <h1>Data Produk</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item active">Data Produk</li>
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
              <a href="{{url('produk/add')}}" class="btn btn-success">
                <i class="fa fa-plus-circle"></i>Tambah
              </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>User</th>
                    <th>Nama Produk</th>
                    <th>Status</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($result as $row)
                    <tr>
                        <td>{{ !empty($i) ? ++$i : $i = 1 }}</td>
                        <td>{{@$row->user->name}} {{@$row->user->nama_belakang}}</td>
                        <td>{{@$row->nama_produk}}</td>
                        <td>
                            @if (@$row->status == 0)
                                Dibuat
                            @else
                                Selesai
                            @endif
                        </td>
                        <td>
                            @if (Auth::user()->id_tipe_user == 1)
                            <a href="{{url("proses/$row->id_produk/add")}}" class="btn btn-sm btn-success">
                                <i class="fa fa-plus"></i>
                            </a>
                            <a href="{{url("produk/$row->id_produk/edit")}}" class="btn btn-sm btn-warning">
                                <i class="fa fa-edit"></i>
                            </a>
                            <form action="{{url("produk/$row->id_produk/delete")}}" method="POST" style="display: inline;">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>
                            </form>
                            @else
                            <a href="{{url("proses/$row->id_produk/add")}}" class="btn btn-sm btn-success">
                                <i class="fa fa-plus"></i>
                            </a>
                            @endif

                        </td>
                    </tr>
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
