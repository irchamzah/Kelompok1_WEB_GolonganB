@extends('layouts.back.app')

@section('content')

@if (Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{Session::get('success')}}   
    </div>
  @endif

  <div class="container">
    <h2>TABEL USER</h2>
    <p>The .thead-dark class adds a black background to table headers, and the .thead-light class adds a grey background to table headers:</p>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th>No</th>
          <!-- <th>Id User</th> -->
          <th>nama</th>
          <th>Email</th>
          <th>Alamat</th>
          <th>No.HP</th>
          <th>Dibuat Pada</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
      @foreach($users as $index=>$user)
        <tr>
          <td>{{$index+1}}</td>
          <!-- <td>{{$user->id}}</td> -->
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->alamat}}</td>
          <td>{{$user->nohp}}</td>
          <td>{{$user->created_at}}</td>
          <td>
          <a href="{{route('admin.profiluser.detail', $user->id)}}" class="btn btn-primary"> Lihat Detail </a>
          </td>
        </tr>
      @endforeach

      </tbody>
    </table>
  </div>

@endsection