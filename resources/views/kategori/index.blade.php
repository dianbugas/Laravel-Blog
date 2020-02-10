@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Kategori
        <a href="{{route('kategori.create')}}" class="btn btn-primary float-right">Tambah Data</a></h2>
    </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @if ($kategoris->count() > 0)
                    @foreach ($kategoris as $index=>$kategori)
                    <tr>
                        <th >{{$index + 1}}</th>
                        <td>{{$kategori->name}}
                            |    {{ $kategori->posts->count() }} post
                        </td>


                        <th>
                            <a onclick="deleteHandle({{$kategori}})" class="btn btn-danger">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>
                            <a href="{{route('kategori.edit', $kategori->id)}}" class="btn btn-warning mr-1">
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
        function deleteHandle(kategori){
            var { id, nama} = kategori

            $('#formDelete').attr('action', `kategori/${id}`)
            $('#ket').html('kategori'+nama)
            $('#modalDelete').modal('show')
        }
    </script>
@endsection
