@extends('layout.index')
@section('title', 'Kelas')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>DATA KELAS</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Kelola Data</a></li>
                            <li class="breadcrumb-item active">Data Kelas</li>
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
                                <a href="{{ route('createkelas') }}" class="btn btn-primary" role="button" title="Tambah Data"><i
                                        class="fa fa-plus"></i>Tambah Kelas</a>

                                <div class="table-responsive">
                                    <table id="example" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kelas</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($kelas as $key => $item)

                                                <tr>
                                                    <td>{{ $key + 1 }} </td>
                                                    <td>{{ $item->nama_kelas }}</td>

                                                    <td>
                                                        <a href="{{ route('editkelas', $item->id_kelas) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit">
                                                                Edit</a></i> |
                                                        <a href="{{ route('hapuskelas', $item->id_kelas) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash">
                                                                Hapus</i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tfoot>
                                    </table>

                                </div>

                                <a id="cetak" href="" target="_blank" class="btn btn-primary" role="button"
                                    title="Cetak Data" style="float: right; margin: 30px 30px 0 0;"><i
                                        class="fas fa-print"></i> Cetak</a>
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
            cetak.addEventListener('click', function() {
                window.print();
            })
        </script>
        <!-- /.content -->
    </div>

@endsection
