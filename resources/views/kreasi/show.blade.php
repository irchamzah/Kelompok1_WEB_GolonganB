@extends('layouts.front.app')
@section('content')

<br>
<br>
<br>
<section id="services" class="services section-bg">
    <div class="container">
        <div class="section-title">
            <a><h2>DETAIL {{$daurulang->nama}}</h2></a>
            <a target="_blank" href="{{$daurulang->keterangan}}">{{$daurulang->keterangan}}</a>
        </div>    
        <div class="row">
            <div class="img text-center">
                <a href="{{$daurulang->keterangan}}" target="_blank"><img src="{{asset('storage/'  . $daurulang->foto)}}" class="img-fluid" alt=""></a>
                <p class="description">{{$daurulang->keterangan_detail}}</p>
            </div>
        </div>
    </div>
</section>

</main>

@endsection
