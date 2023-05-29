@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Penduduk</h4>
            <a href="/create-inhabitant"><button class="btn btn-primary">Tambah Data Penduduk</button></a>
            <div class="table-responsive">
                <br>
                <table id="example" class="table table-striped table-bordered no-wrap">
                    <thead>
                        <tr>
                            <th>No. KK</th>
                            <th>Nik</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal/Bulan/Tahun Lahir</th>
                            <th>Golongan Darah</th>
                            <th>Alamat</th>
                            <th>Status Perkawinan</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Status Pekerjaan</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($inhabitant as $i)
                        <tr>
                            <td>{{ $i->no_kk }}</td>
                            <td>{{ $i->nik }}</td>
                            <td>{{ $i->nama_lengkap }}</td>
                            <td>{{ $i->jenis_kelamin }}</td>
                            <td>{{ $i->tempat_lahir }}</td>
                            <td>{{ $i->ttl }}</td>
                            <td>{{ $i->golongan_darah }}</td>
                            <td>{{ $i->alamat }}</td>
                            <td>{{ $i->status_perkawinan }}</td>
                            <td>{{ $i->pendidikan_terakhir }}</td>
                            <td>{{ $i->status_pekerjaan }}</td>
                            <td>
                                <form action="destroy-inhabitant/{{ $i->id }}" method="Post">
                                    <a class="btn btn-primary" href="/edit-inhabitant/{{ $i->id }}">Edit</a>
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No. KK</th>
                            <th>Nik</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal/Bulan/Tahun Lahir</th>
                            <th>Golongan Darah</th>
                            <th>Alamat</th>
                            <th>Status Perkawinan</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Status Pekerjaan</th>
                            <th>action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
    
@endsection