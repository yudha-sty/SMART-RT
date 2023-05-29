@extends('layouts.app')
@section('content')

<form action="{{ route('update.inhabitant') }}" method="POST">
    @csrf
    @foreach($inhabitant as $i)

    <div class="form-group row">
        <label for="Nim" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="id" placeholder="Id" value="{{ $i->id }} readonly">
        </div>
    </div>
    <div class="form-group row">
        <label for="Nim" class="col-sm-2 col-form-label">No. KK</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="no_kk" placeholder="No KK" required value="{{ $i->no_kk }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="Nama" class="col-sm-2 col-form-label">Nik</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="nik" placeholder="Nik" value="{{ $i->nik }}" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="Program Studi" class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" value="{{ $i->nama_lengkap }}" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="Program Studi" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="jenis_kelamin" placeholder="Jenis Kelamin" value="{{ $i->jenis_kelamin }}" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="Program Studi" class="col-sm-2 col-form-label">Tempat Lahir</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" value="{{ $i->tempat_lahir }}" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="Program Studi" class="col-sm-2 col-form-label">Tanggal / Bulan / Tahun Lahir</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" name="ttl" placeholder="TTL" value="{{ $i->ttl }}" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="Program Studi" class="col-sm-2 col-form-label">Golongan Darah</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="golongan_darah" placeholder="Golongan Darah" value="{{ $i->golongan_darah }}" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="Program Studi" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{ $i->alamat }}" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="Jenis Kelamin" class="col-sm-2 col-form-label">Status Perkawinan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="status_perkawinan" placeholder="Status Perkawinan" value="{{ $i->status_perkawinan }}" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="Email" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="pendidikan_terakhir" placeholder="Pendidikan Terakhir" value="{{ $i->pendidikan_terakhir }}" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="Email" class="col-sm-2 col-form-label">Status Pekerjaan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="status_pekerjaan" placeholder="Status Pekerjaan" value="{{ $i->status_pekerjaan }}" required>
        </div>
    </div>
    <input type="submit" class="btn btn-success" value="Simpan">
    @endforeach
</form>
@endsection