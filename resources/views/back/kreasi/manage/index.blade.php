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
    <a href="{{route('admin.kreasi.create')}}" class="btn btn-primary">TAMBAH TUTORIAL</a>
    <form action="/admin/kreasi" method="get" class="form-inline my-2 my-lg-0">
      <input type="search" name="cari" placeholder="Cari NAMA TUTORIAL" aria-label="Search" class="form-control mr-sm-2">
      <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Cari</button>
    </form>
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
          <td><button type="button" class="btn" data-toggle="modal" data-target="#myModal{{$daurulang->id}}"><img src="{{asset('storage/'.$daurulang->foto)}}" alt="" width="200px"></button></td>
          <td>{{$daurulang->keterangan}}</td>
          <td>{{$daurulang->keterangan_detail}}</td>
          <td>{{$daurulang->created_at}}</td>
          <td>
          <a href="{{route('admin.kreasi.edit', $daurulang->id)}}" class="btn btn-primary"> EDIT </a>
          <a href="{{route('admin.kreasi.delete', $daurulang->id)}}" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');"> DELETE </a>
          </td>
        </tr>

        <!-- The Modal -->
        <div class="modal fade" id="myModal{{$daurulang->id}}">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Gambar Diperbesar</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body" align="center">
              <img class="img" width="1000px" src="{{asset('storage/'  . $daurulang->foto)}}" alt="" >
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>

            </div>
          </div>
        </div>
      @endforeach

      </tbody>
    </table>
  </div>

@endsection