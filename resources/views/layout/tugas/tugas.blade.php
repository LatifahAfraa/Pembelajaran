@extends('layout.index')
@section('title', 'Tugas')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>DATA TUGAS</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Kelola Data</a></li>
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

                <!-- /.card-header -->
                <div class="card-body">
                  {{-- <div class="table-responsive"> --}}
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>Judul Tugas</th>
                          <th>Tengat Tugas</th>
                          <th>Keterangan Tugas</th>
                          <th>File Tugas</th>
                          <th>Pertemuan Tugas</th>
                          <th>Tipe Tugas</th>
                          <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($tugas as $key => $item)

                                    <tr>
                                        <td>{{  $key+1 }} </td>
                                        <td>{{ $item->judul_tugas }}</td>
                                        <td>{{ $item->tenggat_tugas }}</td>
                                        <td>{{ $item->keterangan_tugas}}</td>
                                        <td>{{ $item->file_tugas }}</td>
                                        <td>{{ $item->pertemuan_tugas }}</td>
                                        <td>{{ $item->tipe_tugas }}</td>
                                        <td>
                                            <a href="{{ route('hapustugas', $item->id_tugas) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"> Hapus</i></a>
                                        </td>
                                    </tr>
                            @endforeach
                        </tfoot>
                      </table>
                      {{-- <a id="cetak" href="" target="_blank" class="btn btn-primary" role="button" title="Cetak Data"  style="float: right; margin: 30px 30px 0 0;"><i class="fas fa-print"></i> Cetak</a> --}}
                  {{-- </div> --}}


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
      {{-- <script>
        cetak.addEventListener('click', function () {
          window.print();
        })
      </script> --}}
    <!-- /.content -->
  </div>

@endsection
@push('js')
    <script>
        $(function () {

            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });

            $('#example2_filter').addClass("float-right")
            $('#example2_paginate').addClass("float-right")
        })
    </script>
@endpush
