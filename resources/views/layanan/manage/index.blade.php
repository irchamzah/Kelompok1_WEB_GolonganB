@extends('layouts.front.app')
@section('content')
<br>
<br>
<br>
<section id="services" class="services section-bg">
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="mt-4">JUAL SAMPAH</h1>
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
            <p class="lead"><a href="{{ url('/layanan/create', $user->id)}}">BUAT PESANAN BARU</a> </p>
            <h2 class="mt-4">Daftar Riwayat Pesanan</h2>
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

</section>
@endsection