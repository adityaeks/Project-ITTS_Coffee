@extends('layouts.app')
@section('content')

<center>
<!--image slide start-->
<div class="slider">
    <div class="slides">

  <!--radio buttons-->
  <input type="radio" name="radio-btn" id="radio1">
  <input type="radio" name="radio-btn" id="radio2">
  <input type="radio" name="radio-btn" id="radio3">
  <input type="radio" name="radio-btn" id="radio4">
  <!--radio buttons end-->

  <!--slide start-->
  <div class="slide first">
    <img src="{{ Vite::asset ('resources/images/slide-1.jpg') }}" style="min-width: 58.1%;" alt="">
  </div>
  <div class="slide">
    <img src="{{ Vite::asset ('resources/images/slide-2.jpg') }}"" alt="">
  </div>
  <div class="slide">
    <img src="{{ Vite::asset ('resources/images/slide-3.jpg') }}"" alt="">
  </div>
  <div class="slide">
    <img src="{{ Vite::asset ('resources/images/slide-4.jpg') }}"" alt="">
  </div>
  <!--image slide end-->

      <!--auto navigation-->
       <div class="navigation-auto">
         <div class="auto-btn1"></div>
         <div class="auto-btn2"></div>
         <div class="auto-btn3"></div>
         <div class="auto-btn4"></div>
       </div>

       <!--manual navigation-->
       <div class="navigation-manual">
         <label for="radio1" class="manual-btn"></label>
         <label for="radio2" class="manual-btn"></label>
         <label for="radio3" class="manual-btn"></label>
         <label for="radio4" class="manual-btn"></label>
       </div>
       <!--Slide End-->
    </div>
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

<script src="{{ Vite::asset ('resources/js/script.js') }}"></script>
@endsection
