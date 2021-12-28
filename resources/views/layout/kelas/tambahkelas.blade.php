@extends('layout.index')
@section('title', 'TAMBAH KELAS')
@section('content')



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Data Kelas</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tambah Data Kelas</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <center>
                                    <h2>Form Tambah Kelas</h2>
                                </center>
                                <form action="{{ route('tambahkelas') }}" method="POST" >
                                    @csrf

                                    <div class="form-group row">
                                        <label for="nama_kelas" class="col-sm-2 col-form-label">Nama Kelas</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama_kelas" class="form-control" id="nama_kelas"
                                                placeholder="Masukan Nama Kelas" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="simpan" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
                                        </div>
                                    </div>

        </section>
        </form>
    </div>

@endsection
