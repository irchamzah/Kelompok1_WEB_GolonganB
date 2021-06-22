@extends('layouts.back.app')

@section('content')

@if (Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{Session::get('success')}}   
    </div>
  @endif

  <div class="container">
    <h2>TABEL NOTIFIKASI</h2>
    <p>The .thead-dark class adds a black background to table headers, and the .thead-light class adds a grey background to table headers:</p>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th>No</th>
          <th>Notifikasi Untuk</th>
          <th>Judul Notifikasi</th>
          <th>Keterangan Notifikasi</th>
          <th>Dibuat Pada</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
      @foreach($notifikasis as $index=>$notifikasi)
        <tr>
          <td>{{$index+1}}</td>
          <td>{{$notifikasi->user->name}}</td>
          <td>{{$notifikasi->title}}</td>
          <td>{{$notifikasi->keterangan}}</td>
          <td>{{$notifikasi->created_at}}</td>
          <td>
          <a href="" class="btn btn-primary"> Edit </a>
          <a href="" class="btn btn-danger"> Delete </a>
          </td>
        </tr>
      @endforeach

      </tbody>
    </table>
  </div>

@endsection