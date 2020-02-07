@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>
                @if (isset($kategori))
                    Ubah
                @else    
                    Tambah 
                @endif
                    Kategori</h2>
        </div>
        <div class="card-body">
        <form action="{{isset($kategori)? route('kategori.update', $kategori->id) : route('kategori.store')}}" method="POST">
            @csrf
            @if (isset($kategori))
                @method('PATCH')
            @endif
            <div class="form-group">
                <label for="name">Nama Kategori</label>
            <input type="text" name="name" id="name" class="form-control" value="{{isset($kategori)? $kategori->name : old('name')}}">
            </div>
            <div class="form-group">
                <input type="submit" value="{{isset($kategori)? 'Ubah' : 'Simpan'}}" class="btn btn-primary">
            </div>
        </form>
        </div>
    </div>

@endsection