@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>
                @if (isset($prodi))
                    Ubah
                @else
                    Tambah
                @endif
                    Kategori</h2>
        </div>
        <div class="card-body">
        <form action="{{isset($prodi)? route('prodi.update', $prodi->id) : route('prodi.store')}}" method="POST">
            @csrf
            @if (isset($prodi))
                @method('PATCH')
            @endif
            <div class="form-group">
                <label for="name">Nama Prodi</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{isset($prodi)? $prodi->nama: old('nama')}}">
            </div>
            <div class="form-group">
                <input type="submit" value="{{isset($prodi)? 'Ubah' : 'Simpan'}}" class="btn btn-primary">
            </div>
        </form>
        </div>
    </div>

@endsection
