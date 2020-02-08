@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Beasiswa
        <a href="{{route('beasiswa.create')}}" class="btn btn-primary float-right">Tambah Data</a></h2>
    </div>
        <div class="card-body">
            @if ($beasiswas->count() > 0)
                <div class="list-group">
                    @foreach ($beasiswas as $beasiswa)
                        <div class="list-group-item">
                            {{$beasiswa->nama}}
                            {{$beasiswa->keterangan}}
                            <a onclick="deleteHandle({{$beasiswa}})" class="btn btn-danger float-right">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>
                            <a href="{{route('beasiswa.edit', $beasiswa->id)}}" class="btn btn-warning float-right mr-1">
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
        function deleteHandle(beasiswa){
            var { id, nama} = beasiswa

            $('#formDelete').attr('action', `beasiswa/${id}`)
            $('#ket').html('beasiswa'+nama)
            $('#modalDelete').modal('show')
        }
    </script>
@endsection
