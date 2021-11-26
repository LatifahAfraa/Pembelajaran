@extends('layout.index')
@section('title', 'Mahasiswa')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>DATA MAHASISWA</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Kelola Data</a></li>
                <li class="breadcrumb-item active">Data Mahasiswa</li>
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
                  <a href="{{ route('createmahasiswa') }}" class="btn btn-primary" role="button" title="Tambah Data"><i class="fa fa-plus"></i>Tambah Mahasiswa</a>

                  <div class="table-responsive">
                      <table id="example" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Dosen</th>
                          <th>NPM</th>
                          <th>Tempat Lahir</th>
                          <th>Tanggal Lahir</th>
                          <th>Jenis Kelamin</th>
                          <th>Alamat</th>
                          <th>No HP</th>
                          <th>Kelas</th>
                          <th>Email</th>
                          {{-- <th>Password</th> --}}
                          <th>Foto</th>
                          <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($mahasiswa as $key => $item)

                                    <tr>
                                        <td>{{  $key+1 }} </td>
                                        <td>{{ $item->nama_mhs }}</td>
                                        <td>{{ $item->npm }}</td>
                                        <td>{{ $item->tempat_lahir_mhs}}</td>
                                        <td>{{ $item->tanggal_lahir_mhs }}</td>
                                        <td>{{ $item->jk_mhs }}</td>
                                        <td>{{ $item->alamat_mhs }}</td>
                                        <td>{{ $item->nohp_mhs }}</td>
                                        <td>{{ $item->nama_kelas }}</td>
                                        <td>{{ $item->email_mhs }}</td>
                                        {{-- <td>{{ $item->password_admin }}</td> --}}
                                        <td>
                                            <img src="{{ asset('gambar').'/'.$item->foto_mhs }}" alt="" style="width: 50px">
                                        </td>
                                        <td>
                                            <a href="{{ route('editmahasiswa', $item->id_mhs) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"> Edit</a></i> |
                                            <a href="{{ route('hapusmahasiswa', $item->id_mhs) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"> Hapus</i></a>
                                        </td>
                                    </tr>
                            @endforeach
                        </tfoot>
                      </table>

                  </div>

                  <a id="cetak" href="" target="_blank" class="btn btn-primary" role="button" title="Cetak Data"  style="float: right; margin: 30px 30px 0 0;"><i class="fas fa-print"></i> Cetak</a>
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
      <script>
        cetak.addEventListener('click', function () {
          window.print();
        })
      </script>
    <!-- /.content -->
  </div>

@endsection
