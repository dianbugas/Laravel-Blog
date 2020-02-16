@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>Users
        <a href="#" class="btn btn-primary float-right">Tambah Data</a></h2>
    </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if ($users->count() > 0)
                            @foreach ($users as $user)
                          <tr>
                          <th scope="row">{{$user->id}}</th>
                            <td>{{ $user->name}}</td>
                            <td>{{ $user->email }}</td>
                          <td>{{implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                            <td>
                                @can('edit-users')
                                    <a href="{{route('admin.users.edit', $user->id)}}"><button type="button" class="btn btn-primary float-left">Edit</button></a>
                                @endcan
                                @can('delete-users')
                                    <form action="{{route('admin.users.destroy', $user)}}" method="POST" class="float-left">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="button" class="btn btn-warning">Delete</button>
                                @endcan
                            </form>
                            </td>
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
              function deleteHandle(user){
                  var { id, nama} = user

                  $('#formDelete').attr('action', `user/${id}`)
                  $('#ket').html('user'+nama)
                  $('#modalDelete').modal('show')
              }
          </script>
      @endsection
