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
                            <a onclick="deleteHandle({{$kategori}})" class="btn btn-danger float-right"> 
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>
                            <a href="{{route('kategori.edit', $kategori->id)}}" class="btn btn-warning float-right mr-1"> 
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a>
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

@section('script')
    <script>
        function deleteHandle(kategori){
            var { id, name} = kategori

            $('#formDelete').attr('action', `kategori/${id}`)
            $('#ket').html('kategori'+name)
            $('#modalDelete').modal('show')
        }
    </script>
@endsection