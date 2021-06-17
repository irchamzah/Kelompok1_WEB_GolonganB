@extends('layouts.front.app')
@section('content')
<br>
<br>
<br>
<section id="services" class="services section-bg">
  <div class="container">
<div class="col-lg-8">
    <h1 class="mt-4">UBAH PESANAN</h1>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif

    <form method="POST" action="{{route('layanan.update', $layanans->id)}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Nama Penanggung Jawab</label>
            <input type="text" class="form-control @error('namapj') is-invalid @enderror" name="namapj" value="{{old('namapj', $layanans->namapj)}}">
            @error('namapj')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Alamat Rumah</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{old('alamat', $layanans->alamat)}}">
            @error('alamat')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Nomor Telepon</label>
            <input type="text" class="form-control @error('notelp') is-invalid @enderror" name="notelp" value="{{old('notelp', $layanans->notelp)}}">
            @error('notelp')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Kategori</label>
            <select class="form-control @error('category') is-invalid @enderror" name="category">
                <option value="">Pilih Jenis Sampah</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}" @if(old('category', $layanans->category_id)==$category->id) selected="selected" @endif>{{$category->name}}</option>
                @endforeach
            </select>
            @error('category')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <!-- <div class="form-group">
            <label>File</label><br>
                <input type="file" class="form-control-form" name="file" accept="image/*">
        </div> -->
        <div class="form-group">
            <label>File</label><br>
            <p><img src="{{asset('storage/'.$layanans->file)}}" class="img-thumbnail " width="200" alt=""></p>
            <input type="file" class="form-control-form @error('file') is-invalid @enderror" name="file" accept="image/*">
            @error('file')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <!-- <div class="form-group">
            <label for="">Foto Sampah</label>
                <input type="text" class="form-control" name="fotosampah" value="{{old('fotosampah', $layanans->fotosampah)}}">
        </div> -->
        <div class="form-group">
            <label for="">Tanggal Jemput</label>
            <input type="text" class="form-control @error('tanggaljemput') is-invalid @enderror" name="tanggaljemput" value="{{old('tanggaljemput', $layanans->tanggaljemput)}}">
            @error('tanggaljemput')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <!-- <div class="form-group">
            <label for="">Status Pesanan</label>
            <input type="text" class="form-control @error('statuspesanan') is-invalid @enderror" name="statuspesanan" value="{{old('statuspesanan', $layanans->statuspesanan)}}">
            @error('statuspesanan')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div> -->
        <!-- <div class="form-group">
            <label for="">Pendapatan</label>
            <input type="text" class="form-control @error('pendapatan') is-invalid @enderror" name="pendapatan" value="{{old('pendapatan', $layanans->pendapatan)}}">
            @error('pendapatan')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div> -->
        
        <button type="submit" class="btn btn-primary">Perbarui Data!</button>
    </form>
    
</div>
</div>

</section>

@endsection