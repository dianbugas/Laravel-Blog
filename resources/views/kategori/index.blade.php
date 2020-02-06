@extends('layouts.app')
@section('content')    
<div class="card">
    <div class="card-header">
        <h2>Kategori
        <a href="{{route('kategori.create')}}" class="btn btn-primary float-right">Tambah Data</a></h2>
    </div>
        <div class="card-body">
            @if ($kategoris->count() > 0)
                <div class="list-group">
                    @foreach ($kategoris  as $kategori)
                        <div class="list-group-item">
                            {{$kategori->name}}
                        </div>
                    @endforeach
                </div>
            @else
                <div class="alert alert-info">
                    Data tidak ditemukan
                </div>
        @endif
    </div>
</div>
@endsection