@extends('layouts.front.app')
@section('content')

<br>
<br>
<br>
<section id="services" class="services section-bg">
    <div class="container">
        <div class="section-title">
            <a href="/kreasi"><h2>KREASI</h2></a>
            <p>Klik gambar untuk detail!</p>
        </div>    
        <div class="row">
            @foreach($daurulangs as $index=>$daurulang)
            <div class="col-lg-4 col-md-6">
                <div class="icon-box">
                    <div class="img-thumbnail"><a href="{{url('kreasi/detail', $daurulang->id)}}"><img src="{{asset('storage/'  . $daurulang->foto)}}" class="img-fluid" alt=""></a></div>
                    <h4 class="title"><a href="{{url('kreasi/detail', $daurulang->id)}}">{{$daurulang->nama}}</a></h4>
                    <p class="description">{{$daurulang->keterangan}}</p>
                </div>
            </div>
            @endforeach 
        </div>
    </div>
</section>

</main>

@endsection
