@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Tambah Kategori</h2>
        </div>
        <div class="card-body">
        <form action="{{route('kategori.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama Kategori</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>
        </form>
        </div>
    </div>

@endsection