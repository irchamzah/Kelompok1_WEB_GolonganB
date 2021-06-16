@extends('layouts.front.app')
@section('content')
<div class="col-lg-8">
    <h1 class="mt-4">BUAT PESANAN</h1>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif

    <form method="POST" action="{{route('layanan.store')}}">
        @csrf
        <div class="form-group">
            <label for="">Nama Penanggung Jawab</label>
                <input type="text" class="form-control" name="namapj">
        </div>
        <div class="form-group">
            <label for="">Alamat Rumah</label>
                <input type="text" class="form-control" name="alamat">
        </div>
        <div class="form-group">
            <label for="">Nomor Telepon</label>
                <input type="text" class="form-control" name="notelp">
        </div>
        <div class="form-group">
            <label for="">Kategori</label>
            <select class="form-control" name="category" id="">
                <option value="">Pilih Jenis Sampah</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Foto Sampah</label>
                <input type="text" class="form-control" name="fotosampah">
        </div>
        <div class="form-group">
            <label for="">Tanggal Jemput</label>
                <input type="text" class="form-control" name="tanggaljemput">
        </div>
        <div class="form-group">
            <label for="">Status Pesanan</label>
                <input type="text" class="form-control" name="statuspesanan">
        </div>
        <div class="form-group">
            <label for="">Pendapatan</label>
                <input type="text" class="form-control" name="pendapatan">
        </div>
        
        <button type="submit" class="btn btn-primary">Buat Pesanan</button>
    </form>
    
</div>


@endsection