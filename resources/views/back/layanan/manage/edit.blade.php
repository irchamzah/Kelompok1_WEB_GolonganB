@extends('layouts.back.app')
@section('content')
<br>
<br>
<br>
<section id="services" class="services section-bg">
  <div class="container">
    <div class="col-lg-8">
      @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
          {{Session::get('success')}}
        </div>
      @endif
      <h1 class="mt-4">Pemesan dengan Nama: {{$layanan_detail->user->name}}</h1><br>
      <p>FOTO SAMPAH YANG DIKIRIM:</p><img class="img" width="1000px" src="{{asset('storage/'  . $layanan_detail->file)}}" alt="">

      @if ($layanan_detail->status_id == 1)

        <form method="POST" action="{{ route('admin.home.konfirmasi.pesanan', $layanan_detail->id) }}" enctype="multipart/form-data">
          @csrf
          <br><button type="submit">KONFIRMASI PESANAN</button><br><br><br><br><br>
        </form>

      @elseif ($layanan_detail->status_id == 2)

        <form method="POST" action="{{ route('admin.home.konfirmasi.update', $layanan_detail->id) }}" enctype="multipart/form-data">
          @csrf
          <br><p>isi pendapatan: </p>Rp.<input type="text" class="form-control @error('pendapatan') is-invalid @enderror" name="pendapatan" value="{{old('pendapatan', $layanan_detail->pendapatan)}}"><br><br><br>
          @error('pendapatan')
            <div class="alert alert-danger">{{$message}}</div>
          @enderror
          <button type="submit">SELESAIKAN PESANAN</button><br><br><br><br><br>
        </form>

      @endif


    </div>
  </div>
</section>

@endsection