@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Beasiswa
        <a href="{{route('mahasiswa.create')}}" class="btn btn-primary float-right">Tambah Data</a></h2>
    </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Jenis Beasiswa</th>
                        <th scope="col">Status Kerja</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($mahasiswas->count() > 0)
                    @foreach ($mahasiswas as $mahasiswa)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$mahasiswa->nama}}</td>
                        <td>{{$mahasiswa->email}}</td>
                        <td>{{$mahasiswa->no_hp}}</td>
                        <td>{{$mahasiswa->beastudi_id}}</td>
                        <td>{{$mahasiswa->status_kerja}}</td>
                        <th>
                            <a onclick="deleteHandle({{$mahasiswa}})" class="btn btn-danger">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>
                            <a href="{{route('mahasiswa.edit', $mahasiswa->id)}}" class="btn btn-warning mr-1">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a>
                        </th>
                     </tr>
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
        function deleteHandle(mahasiswa){
            var { id, nama} = mahasiswa

            $('#formDelete').attr('action', `mahasiswa/${id}`)
            $('#ket').html('mahasiswa'+nama)
            $('#modalDelete').modal('show')
        }
    </script>
@endsection
