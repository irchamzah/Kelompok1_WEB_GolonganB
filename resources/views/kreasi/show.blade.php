@extends('layouts.front.app')
@section('content')

<br>
<br>
<br>
<section id="services" class="services section-bg">
    <div class="container">
        <div class="section-title">
            <a href="/kreasi"><h2>DETAIL {{$daurulang->nama}}</h2></a>
            <p>{{$daurulang->keterangan}}</p>
        </div>    
        <div class="row">
            <div class="img">
                <img src="{{asset('storage/'  . $daurulang->foto)}}" class="img-fluid" alt="">{{$daurulang->foto}}
                <p class="description">{{$daurulang->keterangan_detail}}</p>
            </div>
        </div>
    </div>
</section>

</main>

@endsection
