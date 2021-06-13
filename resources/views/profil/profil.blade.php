@extends('layouts.templateuser')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

<div class="container">
  <div class="row">
    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
     <!-- <h1>PROFIL</h1>
      <h2>buat membantu coba cari referensi, tampilan profil biasanya kyk gimana, terus utk lengkapnya liat tutorialnya di <a href="https://www.w3schools.com/bootstrap4/default.asp">sini</a></h2>
      <div><a href="#about" class="btn-get-started scrollto">Get Started</a></div>
    </div> -->

      <div class="row">
        <div class="col-md-6">
          <label for="name">Nama</label>
      <input type="text" class="form-control" placeholder="Masukkan name" name="name">
        </div>
        <div class="col-md-6">
          <label for="email">Email</label>
          <input type="email" class="form-control" placeholder="Masukkan Email" name="email">
        </div>
        <div class="col-md-12 pt-2">
          <label for="alamat">Kecamatan</label>
          <select name="" id="" class="form-control">
            <option value="">semboro</option>
          </select>
        </div>
        <div class="col-md-12 pt-2">
          <label for="alamat">Alamat lengkap</label>
          <textarea class="form-control" name="alamat"></textarea>
        </div>
      </div>
    
    <div class="row mt-md-5">
      <div class="col-md-6">
          <a href="fungsi/auth?type=logout" class="btn btn-danger w-100">Logout</a>
      </div>
      <div class="col-md-6">
          <button type="submit" class="btn btn-success w-100">Simpan</button>
      </div>
  </div>

</section><!-- End Hero -->

<main id="main">

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="row">
      
      <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
        <h3>INFORMASI SAMPAH</h3>
        <p>Pilih Jenis Sampah yang akan dijual.</p>

       



      </div>



    </div>
  </div>
</section><!-- End About Section -->

  

</main>
<!-- End #main -->

@endsection