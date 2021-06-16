@extends('layouts.front.app')
@section('content')
<div class="col-lg-8">
    <h1 class="mt-4">UBAH PESANAN</h1>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif

    <form method="POST" action="{{route('layanan.update', $layanans->id)}}">
        @csrf
        <div class="form-group">
            <label for="">Nama Penanggung Jawab</label>
                <input type="text" class="form-control" name="namapj" value="{{old('namapj', $layanans->namapj)}}">
        </div>
        <div class="form-group">
            <label for="">Alamat Rumah</label>
                <input type="text" class="form-control" name="alamat" value="{{old('alamat', $layanans->alamat)}}">
        </div>
        <div class="form-group">
            <label for="">Nomor Telepon</label>
                <input type="text" class="form-control" name="notelp" value="{{old('notelp', $layanans->notelp)}}">
        </div>
        <div class="form-group">
            <label for="">Kategori</label>
            <select class="form-control" name="category">
                <option value="">Pilih Jenis Sampah</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}" @if(old('category', $layanans->category_id)==$category->id) selected="selected" @endif>{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Foto Sampah</label>
                <input type="text" class="form-control" name="fotosampah" value="{{old('fotosampah', $layanans->fotosampah)}}">
        </div>
        <div class="form-group">
            <label for="">Tanggal Jemput</label>
                <input type="text" class="form-control" name="tanggaljemput" value="{{old('tanggaljemput', $layanans->tanggaljemput)}}">
        </div>
        <div class="form-group">
            <label for="">Status Pesanan</label>
                <input type="text" class="form-control" name="statuspesanan" value="{{old('statuspesanan', $layanans->statuspesanan)}}">
        </div>
        <div class="form-group">
            <label for="">Pendapatan</label>
                <input type="text" class="form-control" name="pendapatan" value="{{old('pendapatan', $layanans->pendapatan)}}">
        </div>
        
        <button type="submit" class="btn btn-primary">Perbarui Data!</button>
    </form>
    
</div>


@endsection