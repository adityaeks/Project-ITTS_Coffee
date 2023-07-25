@extends('layouts.app')
@section('content')

<center>
<div class="image-slide">
    <img src="{{ Vite::asset('resources/images/hero1.png') }}" style="width: 20cm;">
</div>

<br>

<div class="text-with-image">
    <h1 class="display-5"">Panasnya Surabaya</h1>
    <p class="h2">Mari Segarkan Suasana</p>
  </div>

  <br>
<div class="drink">
  <h2>Drink</h2>
  <div class="product-card">
    <div class="card" style="width: 14rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Es Teh Anget</h5>
          <p class="card-text">Rp.100.000</p>
          <a href="#" class="btn btn-primary">Beli Sekarang</a>
        </div>
      </div>
    <div class="card" style="width: 14rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kurang Tau</h5>
          <p class="card-text">Rp.100.000</p>
          <a href="#" class="btn btn-primary">Beli Sekarang</a>
        </div>
      </div>
    <div class="card" style="width: 14rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Semakin Tau</h5>
          <p class="card-text">Rp.100.000</p>
          <a href="#" class="btn btn-primary">Beli Sekarang</a>
        </div>
      </div>
  </div>
</div>
  <br>
<div class="snack">
  <h2>Snack</h2>
  <div class="product-card">
    <div class="card" style="width: 14rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Siapa Sangka</h5>
          <p class="card-text">Rp.100.000</p>
          <a href="#" class="btn btn-primary">Beli Sekarang</a>
        </div>
      </div>
    <div class="card" style="width: 14rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Waduh</h5>
          <p class="card-text">Rp.100.000</p>
          <a href="#" class="btn btn-primary">Beli Sekarang</a>
        </div>
      </div>
    <div class="card" style="width: 14rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Zilong Geprek</h5>
          <p class="card-text">Rp.100.000</p>
          <a href="#" class="btn btn-primary">Beli Sekarang</a>
        </div>
      </div>
  </div>
</div>
<br>
<div class="gallery">
    <h2>Gallery</h2>
    <img src="{{ Vite::asset('resources/images/gallery.png') }}" style="width: 20cm;">
  </div>
</center>

@endsection
