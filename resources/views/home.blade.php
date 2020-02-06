@extends('layouts.app')

@section('konten')
<div class="card">
    <div class="card-header">Dashboard</div>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

       Selamat Datang admin
    </div>
</div>
@endsection

@section('header')
    HEADER
@endsection
