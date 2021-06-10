@extends('layouts.templateuser')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

<div class="container">
  <div class="row">
    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
      <h1>LAYANAN</h1>
      <h2>Accusantium quam, aliquam ultricies eget tempor id, aliquam eget nibh et. Maecen aliquam, risus at semper. Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum.</h2>
      <div><a href="#about" class="btn-get-started scrollto">Get Started</a></div>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 hero-img">
      <img src="frontend/assets/img/hero-img.png" class="img-fluid" alt="">
    </div>
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

        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Kertas
            <span class="badge badge-primary badge-pill">Pilih</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Kardus
            <span class="badge badge-primary badge-pill">Pilih</span>
          </li>
        </ul><br>

        <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Jenis Sampah yang Dipilih</th>
                        <th scope="col">Foto Sampah</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Kertas</td>
                        <td>ehe.jpg</td>
                        <td >
                            <a href="" class="badge bg-primary">edit</a>
                            <a href="" class="badge bg-danger">delete</a>
                        </td>
                    </tr>
                </tbody>
            </table><br><br>

            <h3>INFORMASI PENJEMPUTAN</h3>
            <p>Isi dengan benar, agar tidak terjadi kesalahan.</p><br>

            <form action="/action_page.php">
              <div class="form-group">
                <label for="email">Nama Penanggung Jawab</label>
                <input type="email" class="form-control" id="email" placeholder="Isi nama Penanggung Jawab" name="email">
              </div>
              <div class="form-group">
                <label for="email">Alamat</label>
                <input type="email" class="form-control" id="email" placeholder="Isi Alamat Rumah" name="email">
              </div>
              <div class="form-group">
                <label for="pwd">Nomor Telepon</label>
                <input type="password" class="form-control" id="pwd" placeholder="Isi Nomor Telepon yang Bisa Dihubungi" name="pswd">
              </div>
              <div class="form-group form-check">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>



      </div>



    </div>
  </div>
</section><!-- End About Section -->

  

</main>
<!-- End #main -->

@endsection