@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Beasiswa
        <a href="{{route('beasiswa.create')}}" class="btn btn-primary float-right">Tambah Data</a></h2>
    </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Singkatan</th>
                    <th scope="col">Kepanjangan</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @if ($beasiswas->count() > 0)
                    @foreach ($beasiswas as $beasiswa)
                    <th scope="row">1</th>
                    <td>{{$beasiswa->nama}}</td>
                    <td>{{$beasiswa->keterangan}}</td>
                    <th>
                        <a onclick="deleteHandle({{$beasiswa}})" class="btn btn-danger">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </a>
                        <a href="{{route('beasiswa.edit', $beasiswa->id)}}" class="btn btn-warning mr-1">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                    </th>
                    @endforeach
                    @else
                        <div class="alert alert-info">
                            Data tidak ditemukan
                        </div>
                    @endif
                </tbody>
            </table>
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
