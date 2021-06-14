@extends('layouts.templateLogin')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

<div class="container">
  <div class="row">
    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h1>Form login</h1>

        <form method="post" action="{{ route('postlogin') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="Masukkan Email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Masukkan Password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>

    </div>
   <!-- <div class="col-lg-3 order-3 order-lg-2 daurulang">
      <img src="frontend/assets/img/daurulang.png" class="img-fluid" alt="">
  </div> -->
  </div>
</div>

</section><!-- End Hero -->

@endsection