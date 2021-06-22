@extends('layouts.back.app')

@section('content')

@if (Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{Session::get('success')}}   
    </div>
  @endif

  <div class="container">
    <h2>DAFTAR PESANAN</h2>
    <p>The .thead-dark class adds a black background to table headers, and the .thead-light class adds a grey background to table headers:</p>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th>No</th>
          <!-- <th>Layanan Id</th> -->
          <th>Nama User</th>
          <th>Jenis Sampah</th>
          <th>Foto Sampah</th>
          <th>Dibuat Pada Tanggal</th>
          <th>Tanggal Jemput</th>
          <th>Keterangan Dari User</th>
          <th>Status</th>
          <th>Pendapatan</th>
          <!-- <th>Alamat</th>
          <th>No.HP</th> -->
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
      @foreach($layanan_details as $index=>$layanan_detail)
        <tr>
          <td>{{$index+1}}</td>
          <!-- <td>{{$layanan_detail->layanan_id}}</td> -->
          <td><a href="{{route('admin.profiluser.detail', $layanan_detail->user->id)}}">{{$layanan_detail->user->name}}</a></td>
          <td>{{$layanan_detail->category->name}}</td>
          <td><button type="button" class="btn" data-toggle="modal" data-target="#myModal{{$layanan_detail->id}}"><img class="img" width="200px" src="{{asset('storage/'  . $layanan_detail->file)}}" alt=""></button></td>
          <td>{{$layanan_detail->created_at}}</td>
          <td>{{$layanan_detail->tanggaljemput}}</td>
          <td>{{$layanan_detail->keterangan}}</td>
          <td>{{$layanan_detail->status_pesanan->name}}</td>
          <td>Rp. {{$layanan_detail->pendapatan}}</td>
          <td>
            <div class="btn-group btn-group-vertical">
              @if ($layanan_detail->status_id == 1)
              
              <a href="{{route('admin.home.konfirmasi', $layanan_detail->id)}}">
                <button type="button" class="btn btn-primary">
                  PERIKSA PESANAN
                </button>
              </a>

              @elseif ($layanan_detail->status_id == 2)

              <a href="{{route('admin.home.konfirmasi', $layanan_detail->id)}}">
                <button type="button" class="btn btn-success">
                  SELESAIKAN PESANAN
                </button>
              </a>

              @else ($layanan_detail->status_id == 3)

              <button type="button" class="btn btn-success" disabled>
                    PESANAN SELESAI
                  </button>
                  
              @endif

              <a href=" {{route('admin.home.konfirmasi.destroy', $layanan_detail->id)}}">
                <button type="button" class="btn btn-danger">
                  DELETE
                </button>
              </a>
              
              
            </div>
          </td>
        </tr>

        <!-- The Modal -->
        <div class="modal fade" id="myModal{{$layanan_detail->id}}">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Gambar Diperbesar</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body" align="center">
              <img class="img" width="1000px" src="{{asset('storage/'  . $layanan_detail->file)}}" alt="" >
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