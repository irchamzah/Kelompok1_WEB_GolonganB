@extends('layouts.front.app')
@section('content')
<br>
<br>
<br>
<section id="services" class="services section-bg">
<div class="container">
    <div class="row">
        <div class="col-md-15">
            <h1 class="mt-4">JUAL SAMPAH</h1>
            <div class="col-md-12">
            @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('success')}}
                            </div>
                        @endif
                <div class="card">
                    <div class="card-body">
                    @if (empty($user->alamat))
                        <button type="button" class="btn btn-secondary" disabled>BUAT PESANAN BARU</button>
                        <font class="alert alert-danger" size="2">Harap Lengkapi Data Profil Terlebih Dahulu Sebelum Memesan! <a href="{{url('/profil')}}">Lengkapi Data Disini!</a></font>
                    @elseif(empty($user->nohp))
                        <button type="button" class="btn btn-secondary" disabled>BUAT PESANAN BARU</button>
                        <font class="alert alert-danger" size="2">Harap Lengkapi Data Profil Terlebih Dahulu Sebelum Memesan! <a href="{{url('/profil')}}">Lengkapi Data Disini!</a></font>
                    @else
                        <a href="{{ url('/layanan/create', $user->id)}}" class="btn btn-primary"> BUAT PESANAN BARU </a>
                    @endif
                        <h4>Daftar Riwayat Pesanan</h4><hr>
                        <table class="table table-sm">
                            <thead class="thead-dark">
                                <tr align="center">
                                    <th scope="col">No</th>
                                    <th scope="col">Nama User</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Nomor Telepon</th>
                                    <!-- <th scope="col">ID Pesanan</th> -->
                                    <th scope="col">Jenis Sampah</th>
                                    <th scope="col">Foto Sampah</th>
                                    <th scope="col">Tanggal Jemput</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Status Pesanan</th>
                                    <th scope="col">Pendapatan</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <body>
                                @foreach($layanan_details as $index=>$layanan_detail)
                                    <tr align="center">
                                        <td scope="row">{{$index+1}}</td>
                                        <td scope="row">{{$user->name}}</td>
                                        <td scope="row">{{$user->alamat}}</td> 
                                        <td scope="row">{{$user->nohp}}</td>
                                        <!-- <td scope="row">{{$layanan_detail->id}}</td> -->
                                        <td scope="row">{{$layanan_detail->category->name}}</td>
                                        <td scope="row"><button type="button" class="btn" data-toggle="modal" data-target="#myModal{{$layanan_detail->id}}"><img class="img" width="200px" src="{{asset('storage/'  . $layanan_detail->file)}}" alt=""></button></td> 
                                        <td scope="row">{{$layanan_detail->tanggaljemput}}</td>
                                        <td scope="row">{{$layanan_detail->keterangan}}</td>
                                        <td scope="row"><STRONG>{{$layanan_detail->status_pesanan->name}}</STRONG></td>
                                        <td scope="row">Rp. {{$layanan_detail->pendapatan}}</td>
                                        <td scope="row">
                                        @if ($layanan_detail->status_id == 1)
                                        <a href="{{url('layanan/edit', $layanan_detail->id)}}" class="btn btn-primary"> EDIT </a>
                                        <a href="{{url('layanan/delete', $layanan_detail->id)}}" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');"><font size="2"> BATALKAN PESANAN </font></a>
                                        @elseif ($layanan_detail->status_id == 2)
                                        <font><a href="{{url('/notifikasi')}}" class="btn btn-success"> PERIKSA PESANAN </a></font>
                                        @elseif ($layanan_detail->status_id == 3)
                                        <a href="{{url('layanan/delete', $layanan_detail->id)}}" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');"> DELETE </a>
                                        @else ($layanan_detail->status_id == 4)
                                        <font><a href="{{url('/notifikasi')}}" class="btn btn-secondary"> PERIKSA PESANAN </a></font>
                                        <a href="{{url('layanan/delete', $layanan_detail->id)}}" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');"> DELETE </a>
                                        @endif
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
                            </body>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</section>
@endsection