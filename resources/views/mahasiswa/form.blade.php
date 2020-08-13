@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>
                @if (isset($mahasiswa))
                    Ubah
                @else
                    Tambah
                @endif
                    Mahasiswa</h2>
        </div>
        <div class="card-body">
        <form action="{{isset($mahasiswa)? route('mahasiswa.update', $mahasiswa->id) : route('mahasiswa.store')}}" method="POST">
            @csrf
            @if (isset($mahasiswa))
                @method('PATCH')
            @endif
            <div class="form-group">
                <label for="name">Nama Mahasiswa</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{isset($mahasiswa)? $mahasiswa->nama : old('nama')}}">
            </div>
            <div class="form-group">
                <label for="name">Jenis Kelamin</label>
                <input type="text" name="jk" id="jk" class="form-control" value="{{isset($mahasiswa)? $mahasiswa->jk : old('jk')}}">
            </div>
            <div class="form-group">
                <label for="name">Tempat Lahir</label>
                <input type="text" name="tmp_lahir" id="tmp_lahir" class="form-control" value="{{isset($mahasiswa)? $mahasiswa->tmp_lahir : old('tmp_lahir')}}">
            </div>
            <div class="form-group">
                <label for="name">Tanggal Lahir</label>
                <input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control" value="{{isset($mahasiswa)? $mahasiswa->tgl_lahir : old('tgl_lahir')}}">
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{isset($mahasiswa)? $mahasiswa->email : old('email')}}">
            </div>
            <div class="form-group">
                <label for="name">NO HP</label>
                <input type="number" name="no_hp" id="no_hp" class="form-control" value="{{isset($mahasiswa)? $mahasiswa->no_hp : old('no_hp')}}">
            </div>
            <div class="form-group">
                <label for="name">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" value="{{isset($mahasiswa)? $mahasiswa->alamat : old('alamat')}}">
            </div>
            <div class="form-group">
                <label for="name">Foto</label>
                <input type="text" name="foto" id="foto" class="form-control" value="{{isset($mahasiswa)? $mahasiswa->foto : old('foto')}}">
            </div>
            <div class="form-group">
                <label for="name">Angkatan</label>
                <input type="text" name="angkatan" id="angkatan" class="form-control" value="{{isset($mahasiswa)? $mahasiswa->angkatan : old('angkatan')}}">
            </div>
            <div class="form-group">
                <label for="name">Status Kerja</label>
                <input type="text" name="status_kerja" id="status_kerja" class="form-control" value="{{isset($mahasiswa)? $mahasiswa->status_kerja : old('status_kerja')}}">
            </div>
            <div class="form-group">
                <label for="name">Tempat Kerja</label>
                <input type="text" name="tmp_kerja" id="tmp_kerja" class="form-control" value="{{isset($mahasiswa)? $mahasiswa->tmp_kerja : old('tmp_kerja')}}">
            </div>
            <div class="form-group">
                <label for="name">Pilih Jenis Beastudi</label>
                <input type="text" name="beastudi_id" id="beastudi_id" class="form-control" value="{{isset($mahasiswa)? $mahasiswa->beastudi_id : old('beastudi_id')}}">
            </div>
            <div class="form-group">
                <label for="name">Pilih Jenis Prodi</label>
                <input type="text" name="prodi_id" id="prodi_id" class="form-control" value="{{isset($mahasiswa)? $mahasiswa->prodi_id : old('prodi_id')}}">
            </div>

            <div class="form-group">
                <input type="submit" value="{{isset($mahasiswa)? 'Ubah' : 'Simpan'}}" class="btn btn-primary">
            </div>
        </form>
        </div>
    </div>

@endsection
