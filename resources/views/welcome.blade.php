@extends('layouts.front.app')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
<style>
  #hero .daurulang img {
    top: -10px;
  }
</style>
<div class="container">
    <div class="row">
    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h1>SISTEM INFORMASI PENGOLAH SAMPAH (SIPAPAH)</h1>
        <h2>Sipapah adalah aplikasi pengolah sampah. Kita harus peduli terhadap kelestarian alam untuk tidak membuang sampah sembarangan, terutama sampah kertas, kardus dan plastik. Meskipun harga kertas bekas tidak seberapa, menjual sampah yang dapat di daur ulang berarti turut menjaga kelestarian lingkungan. Mari cintai Alam bersama SIPAPAH.
        </h2>
        <div></div>
    </div>
    <div class="col-lg-3 order-3 order-lg-2 daurulang">
        <img src="frontend/assets/img/daurulang.png" class="img-fluid" alt="">
    </div>
    </div>
</div>

</section><!-- End Hero -->

<main id="main">

<!-- ======= About Section ======= -->
<section class="about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-6 col-lg-3 pickup">
                <img src="frontend/assets/img/shipped.png" alt="" class="img-fluid">
            </div>
            <div class="col-sm-9 col-md-6 col-lg-9 pick-up">
            <h1 class="mt-md-5 pt-3">Layanan PickUp</h1>
            <p>Layanan yang kami berikan di aplikasi ini adalah memberikan layanan penjemputan sampah dan proses pembayaran secara langsung (Cash On Delivery)<span> <a href="#" class="layanan"></a></span></p>
            </div>
        </div>
    </div>
</section><!-- End About Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
  <div class="container">

    <div class="section-title">
      <a href="/kreasi"><h2>KREASI</h2></a>
      <p>Kreasi adalah salah satu fitur SIPAPAH dimana isinya mengenai tutorial mendaur ulang sampah yang masih layak.</p>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="icon-box">
          <div class="img-thumbnail"><img src="frontend/assets/img/portfolio/daur ulang botol.png" class="img-fluid" alt=""></div>
          <h4 class="title"><a href="https://youtu.be/uk5CP6DnEK8" target="_blank">Kotak Pensil Dari Botol Bekas</a></h4>
          <p class="description"></p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="icon-box">
          <div class="img-thumbnail"><img src="frontend/assets/img/portfolio/daur ulang kardus.png" class="img-fluid" alt=""></div>
          <h4 class="title"><a href="https://youtu.be/-fvlyHqSbZQ" target="_blank">Tempat Sampah Mini Dari Kardus Bekas</a></h4>
          <p class="description"></p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
        <div class="icon-box">
          <div class="img-thumbnail"><img src="frontend/assets/img/portfolio/paper.png" class="img-fluid" alt=""></div>
          <h4 class="title"><a href="https://youtu.be/Q9s81oDL5Lk" target="_blank">Kertas Daur Ulang</a></h4>
          <p class="description"></p>
        </div>
      </div>
          </div>

  </div>
</section><!-- End Services Section -->

</main><!-- End #main -->

@endsection
