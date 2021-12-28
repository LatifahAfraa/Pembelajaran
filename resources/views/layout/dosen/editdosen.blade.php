@extends('layout.index')
@section('title', 'EDIT DOSEN')
@section('content')



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Data Dosen</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit Data Dosen</li>
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
                                    <h2>Form Edit Data Dosen</h2>
                                </center>
                                <form action="{{ route('prosesdosen', $dosen->id_dosen) }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="nama_dosen" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama_dosen" class="form-control" id="nama_dosen"
                                            value="{{ $dosen->nama_dosen }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nidn" class="col-sm-2 col-form-label">NIDN</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nidn" class="form-control" id="nidn"
                                            value="{{ $dosen->nidn }}">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="tempat_lahir_dosen" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="tempat_lahir_dosen" class="form-control" id="tempat_lahir_dosen"
                                            value="{{ $dosen->tempat_lahir_dosen }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="tanggal_lahir_dosen" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="date" name="tanggal_lahir_dosen" class="form-control" id="tanggal_lahir_dosen" value="{{ $dosen->tanggal_lahir_dosen }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="jk_dosen" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="jk_dosen">
                                                <option value="{{ $dosen->jk_dosen }}"> {{ $dosen->jk_dosen }}</option>
                                                <option>=====Pilih Jenis Kelamin=====</option>
                                                <option value="Pria">Pria</option>
                                                <option value="Wanita">Wanita</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="alamat_dosen" class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <textarea type="text" name="alamat_dosen" class="form-control" id="alamat_admin"
                                            >{{ $dosen->alamat_dosen }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nohp_dosen" class="col-sm-2 col-form-label">No Hp</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="nohp_dosen" class="form-control" id="nohp_dosen"
                                            value="{{ $dosen->nohp_dosen }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email_dosen" class="col-sm-2 col-form-label">Email Dosen</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="email_dosen" class="form-control" id="email_dosen"
                                            value="{{ $dosen->email_dosen }}">
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
                                             <img src="{{ asset('gambar').'/'.$dosen->foto_dosen }}" alt="" style="width: 50px">
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
