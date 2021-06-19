@extends('layouts.back.app')

@section('content')

@if (Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{Session::get('success')}}   
    </div>
  @endif
  
  <P><STRONG> SELAMAT DATANG DI PROFIL-USER ADMIN! </STRONG></P>
@endsection