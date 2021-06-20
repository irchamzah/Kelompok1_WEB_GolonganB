@extends('layouts.front.app')
@section('content')

<br>
<br>
<br>
<section id="services" class="services section-bg">
  <div class="container">
    <div class="section-title">
      <a href="/kreasi"><h2>NOTIFIKASI</h2></a>
      <p>Update Notifikasi melalui Admin</p>
    </div>    
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">

              @foreach($notifikasis as $index=>$notifikasi)
                <table class="table table-borderless">
                  <tbody>
                    <tr>
                      <th>{{$index+1}}. {{$notifikasi->title}}</th>
                    </tr>
                    <tr>
                      <td>{{$notifikasi->keterangan}}<hr></td>
                    </tr>
                  </tbody>
                </table>
              @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</main>

@endsection
