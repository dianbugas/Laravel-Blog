@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>
                @if (isset($post))
                    Ubah
                @else
                    Tambah
                @endif
                    Post</h2>
        </div>
        <div class="card-body">
        <form action="{{isset($post)? route('post.update', $post->id) : route('post.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @if (isset($post))
                @method('PATCH')
            @endif
            <div class="form-group">
                <label for="name">Judul</label>
                @error('judul') <span style="color:red">{{$message}}</span>@enderror
            <input type="text" name="judul" id="judul" class="form-control" value="{{isset($post)? $post->judul : old('judul')}}">
            </div>

            <div class="form-group">
                <label for="name">Deskripsi</label>
                @error('deskripsi') <span style="color:red">{{$message}}</span>@enderror
            <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="{{isset($post)? $post->deskripsi : old('deskripsi')}}">
            </div>

            <div class="form-group">
                <label for="name">Konten</label>
                @error('konten') <span style="color:red">{{$message}}</span>@enderror
            <textarea name="konten" id="conten" class="form-control konten">{{old('judul')}}</textarea>
            </div>

            <div class="form-group">
                <label for="name">Cover</label>
                @error('cover') <span style="color:red">{{$message}}</span>@enderror
                <input type="file" name="cover" id="cover" class="form-control" value="{{isset($post)? $post->cover : old('cover')}}">
                <span>Upload Gambar sebaiknya memiliki rasio 1:1 dan berukuran tidak lebih dari 2MB.</span>
            </div>

            <div class="form-group">
                <label for="name">Kategori</label>
                @error('kategori_id') <span style="color:red">{{$message}}</span>@enderror
                <select name="kategori_id" id="kategori_id" class="form-control">
                    @foreach ($kategoris as $kategori)
                    <option value="{{$kategori->id}}"
                        @if ($kategori->id==old('$kategori_id'))
                            selected
                        @endif

                        >{{$kategori->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="name">Tanggal Publis</label>
                @error('tgl_publis') <span style="color:red">{{$message}}</span>@enderror
                <input type="date" name="tgl_publis" id="tgl_publis" class="form-control" value="{{isset($post)? $post->tgl_publis : old('tgl_publis')}}">
            </div>
            <div class="form-group">
                <input type="submit" value="{{isset($post)? 'Ubah' : 'Simpan'}}" class="btn btn-primary">
            </div>

        </form>
        </div>
    </div>

@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.2.0/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea.konten',
            hight:350
        })
    </script>
@endsection
