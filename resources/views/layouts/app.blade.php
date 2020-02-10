<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        th{
            text-align: center;
        }
    </style>

    <!-- Favicon -->
   <link href="{{ asset('assets/img/brand/favicon.png') }}" rel="icon" type="{{ asset('assets/image/png') }}">
   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
   <!-- Icons -->
   <link href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
   <link href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
   <!-- Argon CSS -->
   <link type="text/css" href="{{asset('assets/css/argon.css?v=1.1.1')}}" rel="stylesheet">
   <!-- Docs CSS -->
   <link type="text/css" href="{{ asset('assets/css/docs.min.css')}}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        {{-- <div class="bg-danger">
            @yield('header')
        </div> --}}
        <div class="container mt-5">
            <div class="row">
                @auth
                    <div class="col-md-3">
                        <div class="list-group">
                            <div class="list-group-item">
                            <a href="{{route('kategori.index')}}">Kategori
                            </div></a>
                            <div class="list-group-item">
                                <a href="{{route('mahasiswa.index')}}">Mahasiswa
                            </div></a>
                            <div class="list-group-item">
                                <a href="{{route('prodi.index')}}">Prodi
                            </div></a>
                            <div class="list-group-item">
                                <a href="{{route('beasiswa.index')}}">Beasiswa
                            </div></a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        @if (session()->has('sukses'))
                            <div class="alert alert-info">
                                {{session()->get('sukses')}}
                            </div>
                        @endif
                        @yield('content')
                    </div>
                    @else
                    <div class="col-md-12">
                        @yield('content')
                    </div>
                @endauth
            </div>
        </div>
    </div>

    <div class="modal" id="modalDelete" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <form action="" method="POST" id="formDelete">
              @csrf
              @method('DELETE')
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Konformasi Delete</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Apakah anda yakin menghapus <span id="ket"></span> ?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">Ok Delete</button>
                </div>
              </div>
          </form>
        </div>
      </div>

      @yield('script')
</body>
</html>






