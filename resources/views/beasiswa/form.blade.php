@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>
                @if (isset($beasiswa))
                    Ubah
                @else
                    Tambah
                @endif
                    Beasiswa</h2>
        </div>
        <div class="card-body">
        <form action="{{isset($beasiswa)? route('beasiswa.update', $beasiswa->id) : route('beasiswa.store')}}" method="POST">
            @csrf
            @if (isset($beasiswa))
                @method('PATCH')
            @endif
            <div class="form-group">
                <label for="name">Nama Beasiswa</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{isset($beasiswa)? $beasiswa->nama : old('nama')}}">
            </div>
            <div class="form-group">
                <label for="name">Kepanjangan</label>
                <input type="text" name="keterangan" id="keterangan" class="form-control" value="{{isset($beasiswa)? $beasiswa->keterangan : old('keterangan')}}">
            </div>
            <div class="form-group">
                <input type="submit" value="{{isset($beasiswa)? 'Ubah' : 'Simpan'}}" class="btn btn-primary">
            </div>
        </form>
        </div>
    </div>

@endsection
