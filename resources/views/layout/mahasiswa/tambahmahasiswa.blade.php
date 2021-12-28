@extends('layout.index')
@section('title', 'TAMBAH MAHASISWA')
@section('content')



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Data Mahasiswa</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tambah Data Mahasiswa</li>
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
                                    <h2>Form Tambah Mahasiswa</h2>
                                </center>
                                <form action="{{ route('tambahmahasiswa') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="nama_mhs" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama_mhs" class="form-control" id="nama_mhs"
                                                placeholder="Masukan Nama Mahasiswa" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="npm" class="col-sm-2 col-form-label">NPM</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="npm" class="form-control" id="npm"
                                                placeholder="Masukan NPM" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="tempat_lahir_mhs" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="tempat_lahir_mhs" class="form-control" id="tempat_lahir_mhs"
                                                placeholder="Masukan Tempat Lahir Mahasiswa" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="tanggal_lahir_mhs" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="date" name="tanggal_lahir_mhs" class="form-control" id="tanggal_lahir_mhs">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="jk_mhs" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="jk_mhs">
                                                <option>=====Pilih Jenis Kelamin=====</option>
                                                <option value="Pria">Pria</option>
                                                <option value="Wanita">Wanita</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="alamat_mhs" class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <textarea type="text" name="alamat_mhs" class="form-control" id="alamat_mhs"
                                                placeholder="Masukkan Alamat Mahasiswa"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nohp_mhs" class="col-sm-2 col-form-label">No Hp</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="nohp_mhs" class="form-control" id="nohp_mhs"
                                                placeholder="Masukan No Hp Mahasiswa" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="id_kelas" class="col-sm-2 col-form-label">Kelas</label>
                                        <div class="col-sm-10">
                                            {{-- @dd($kelas) --}}
                                            <select class="form-control sl2" name="id_kelas">
                                               @foreach ($kelas as $kls )
                                                   <option value="{{ $kls->id_kelas }}">{{ $kls->nama_kelas }}</option>
                                               @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email_mhs" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="email_mhs" class="form-control" id="email_mhs"
                                                placeholder="Masukan Email Mahasiswa" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password_mhs" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="password_mhs" class="form-control" id="password_mhs"
                                                placeholder="Masukan Password" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                                        <div class="col-sm-10">
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
<script>
    $(document).ready(() => {
        $('.sl2').select2();
    })
</script>
@endsection
