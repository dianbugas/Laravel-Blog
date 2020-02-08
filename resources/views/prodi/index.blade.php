@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Prodi
        <a href="{{route('prodi.create')}}" class="btn btn-primary float-right">Tambah Data</a></h2>
    </div>
        <div class="card-body">
            @if ($prodis->count() > 0)
                <div class="list-group">
                    @foreach ($prodis  as $prodi)
                        <div class="list-group-item">
                            {{$prodi->nama}}
                            <a onclick="deleteHandle({{$prodi}})" class="btn btn-danger float-right">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>
                            <a href="{{route('prodi.edit', $prodi->id)}}" class="btn btn-warning float-right mr-1">
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
        function deleteHandle(prodi){
            var { id, nama} = prodi

            $('#formDelete').attr('action', `prodi/${id}`)
            $('#ket').html('prodi'+nama)
            $('#modalDelete').modal('show')
        }
    </script>
@endsection
