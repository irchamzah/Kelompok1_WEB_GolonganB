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
                        <a href="{{ url('/layanan/create', $user->id)}}" class="btn btn-primary">BUAT PESANAN BARU</a>
                        <h4>Daftar Riwayat Pesanan</h4><hr>
                        <table class="table table-sm">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama User</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Nomor Telepon</th>
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
                                    <tr>
                                        <td scope="row">{{$index+1}}</td>
                                        <td scope="row">{{$user->name}}</td>
                                        <td scope="row">{{$user->alamat}}</td> 
                                        <td scope="row">{{$user->nohp}}</td>
                                        <td scope="row">{{$layanan_detail->category->name}}</td>
                                        <td scope="row"><img class="img" width="200px" src="{{asset('storage/'  . $layanan_detail->file)}}" alt=""></td> 
                                        <td scope="row">{{$layanan_detail->tanggaljemput}}</td>
                                        <td scope="row">{{$layanan_detail->keterangan}}</td>
                                        <td scope="row">{{$layanan_detail->status}}</td>
                                        <td scope="row">Rp. {{$layanan_detail->pendapatan}}</td>
                                        <td scope="row">
                                        <a href="{{url('layanan/edit', $layanan_detail->id)}}"> Edit </a>
                                        <a href="{{url('layanan/delete', $layanan_detail->id)}}"> Delete </a>
                                        </td>
                                    </tr>
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