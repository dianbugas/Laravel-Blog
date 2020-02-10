@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Post
        <a href="{{route('post.create')}}" class="btn btn-primary float-right">Tambah Data</a></h2>
    </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Cover</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Tanggal Publis</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @if ($posts->count() > 0)
                    @foreach ($posts as $index=>$post)
                    <tr>
                        <th>{{$index + 1}}</th>
                        <td><img src="{{asset('storage/'.$post->cover)}}" width="200px">
                        </td>
                        <td>{{$post->judul}}</td>
                        <td>{{$post->deskripsi}}</td>
                        <td>{{$post->tgl_publis}}</td>
                        <th>
                            <a onclick="deleteHandle({{$post}})" class="btn btn-danger">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>
                            <a href="{{route('post.edit', $post->id)}}" class="btn btn-warning mr-1">
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
        function deleteHandle(post){
            var { id, nama} = post

            $('#formDelete').attr('action', `post/${id}`)
            $('#ket').html('post'+nama)
            $('#modalDelete').modal('show')
        }
    </script>
@endsection
