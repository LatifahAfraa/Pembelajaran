@extends('layout.index')
@section('title', 'EDIT ADMIN')
@section('content')



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Data Admin</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit Data Admin</li>
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
                                    <h2>Form Edit Admin</h2>
                                </center>
                                <form action="{{ route('prosesEditAdmin', $admin->id_admin) }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="nama_admin" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama_admin" class="form-control" id="nama_admin"
                                            value="{{ $admin->nama_admin }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="tempat_lahir_admin" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="tempat_lahir_admin" class="form-control" id="tempat_lahir_admin"
                                            value="{{ $admin->tempat_lahir_admin }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="tanggal_lahir_admin" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="date" name="tanggal_lahir_admin" class="form-control" id="tanggal_lahir_admin" value="{{ $admin->tanggal_lahir_admin }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="jk_admin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="jk_admin">
                                                <option value="{{ $admin->jk_admin }}"> {{ $admin->jk_admin }}</option>
                                                <option>=====Pilih Jenis Kelamin=====</option>
                                                <option value="Pria">Pria</option>
                                                <option value="Wanita">Wanita</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="alamat_admin" class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <textarea type="text" name="alamat_admin" class="form-control" id="alamat_admin"
                                            >{{ $admin->alamat_admin }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nohp_admin" class="col-sm-2 col-form-label">No Hp</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="nohp_admin" class="form-control" id="nohp_admin"
                                            value="{{ $admin->nohp_admin }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email_admin" class="col-sm-2 col-form-label">Email Admin</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="email_admin" class="form-control" id="email_admin"
                                            value="{{ $admin->email_admin }}">
                                        </div>
                                    </div>

                                    {{-- <div class="form-group row">
                                        <label for="password_admin" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="password_admin" class="form-control" id="password_admin"
                                                placeholder="Masukan Password" required>
                                        </div>
                                    </div> --}}

                                    <div class="form-group row">
                                        <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                                        <div class="col-sm-10">
                                             <img src="{{ asset('gambar').'/'.$admin->foto_admin }}" alt="" style="width: 50px">
                                            <input type="file" name="foto" id="foto" placeholder="foto">
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
