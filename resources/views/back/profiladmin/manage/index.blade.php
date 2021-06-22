@extends('layouts.back.app')

@section('content')

@if (Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{Session::get('success')}}   
    </div>
  @endif

  <div class="container">
    <h2>TABEL ADMIN</h2>
    <p>The .thead-dark class adds a black background to table headers, and the .thead-light class adds a grey background to table headers:</p>
    <a href="{{route('admin.profiladmin.register')}}" class="btn btn-primary">Tambah Akun Admin</a><br>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th>No</th>
          <th>nama</th>
          <th>Email</th>
          <th>Dibuat pada</th>
          <!-- <th>Alamat</th>
          <th>No.HP</th> -->
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
      @foreach($admins as $index=>$admin)
        <tr>
          <td>{{$index+1}}</td>
          <td>{{$admin->name}}</td>
          <td>{{$admin->email}}</td>
          <td>{{$admin->created_at}}</td>
          <!-- <td>{{$admin->alamat}}</td>
          <td>{{$admin->nohp}}</td> -->
          <td>
          <a href="{{route('admin.profiladmin.edit', $admin->id)}}" class="btn btn-primary"> Edit </a>
          <a href="{{route('admin.profiladmin.delete', $admin->id)}}" class="btn btn-danger"> Delete </a>
          </td>
        </tr>
      @endforeach

      </tbody>
    </table>
  </div>

@endsection