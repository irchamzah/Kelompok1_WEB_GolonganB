@extends('layouts.back.app')

@section('content')

@if (Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{Session::get('success')}}   
    </div>
  @endif

  <div class="container">

    <h2>TABEL KREASI</h2>
    <p>The .thead-dark class adds a black background to table headers, and the .thead-light class adds a grey background to table headers:</p>
    <a href="{{route('admin.kreasi.create')}}" class="btn btn-primary">Tambah Tutorial</a>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th>No</th>
          <!-- <th>Id User</th> -->
          <th>Nama Tutorial</th>
          <th>Foto Utama</th>
          <th>Keterangan</th>
          <th>Penjelasan Detail</th>
          <th>Dibuat Pada</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
      @foreach($daurulangs as $index=>$daurulang)
        <tr>
          <td>{{$index+1}}</td>
          <td>{{$daurulang->nama}}</td>
          <td><img src="{{asset('storage/'.$daurulang->foto)}}" alt="" width="200px"></td>
          <td>{{$daurulang->keterangan}}</td>
          <td>{{$daurulang->keterangan_detail}}</td>
          <td>{{$daurulang->created_at}}</td>
          <td>
          <a href="{{route('admin.kreasi.edit', $daurulang->id)}}" class="btn btn-primary"> Edit </a>
          <a href="{{route('admin.kreasi.delete', $daurulang->id)}}" class="btn btn-danger"> Delete </a>
          </td>
        </tr>
      @endforeach

      </tbody>
    </table>
  </div>

@endsection