@extends('layouts.app')
@section('content')

<form action="{{ route('store.inhabitant') }}" method="POST">
    @csrf
    <div class="form-group row">
        <label for="Nim" class="col-sm-2 col-form-label">No. KK</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="no_kk" placeholder="No KK" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="Nama" class="col-sm-2 col-form-label">Nik</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="nik" placeholder="Nik" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="Program Studi" class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="Program Studi" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="jenis_kelamin" placeholder="Jenis Kelamin" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="Program Studi" class="col-sm-2 col-form-label">Tempat Lahir</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="Program Studi" class="col-sm-2 col-form-label">Tanggal / Bulan / Tahun Lahir</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" name="ttl" placeholder="TTL" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="Program Studi" class="col-sm-2 col-form-label">Golongan Darah</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="golongan_darah" placeholder="Golongan Darah" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="Program Studi" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="Jenis Kelamin" class="col-sm-2 col-form-label">Status Perkawinan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="status_perkawinan" placeholder="Status Perkawinan" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="Email" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="pendidikan_terakhir" placeholder="Pendidikan Terakhir" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="Email" class="col-sm-2 col-form-label">Status Pekerjaan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="status_pekerjaan" placeholder="Status Pekerjaan" required>
        </div>
    </div>

    <input type="submit" class="btn btn-success" value="Simpan">
</form>

@endsection