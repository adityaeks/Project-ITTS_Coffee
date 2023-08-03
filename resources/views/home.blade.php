@extends('layouts.main')

@section('content')
  <!-- Header - set the background image for the header in the line below-->
        <header class="py-5 bg-image-full" style="background-image: url('https://coolwallpapers.me/th700/5255650-coffee-shop-cafe-flag-counter-coffee-shop-business-bistro-coffee-machine-caf-bar-coffee-house-local-american-flag-america-american-expresso-bestro-food-relaxation-free-pictures.jpg')">
            <div class="text-center my-5">
                <img class="img-fluid rounded-circle mb-4" src="{{ Vite::asset('resources/images/bean.png') }}" alt="..." />
                <h1 class="text-white fs-3 fw-bolder">ITTS Coffee</h1>
                <p class="text-white-50 mb-0">Greatest Coffee Shope In Surabaya</p>
            </div>
        </header>
        <!-- Content section-->
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>For the finest coffee experience, visit ITTS Coffee - where every cup tells a story.</h2>
                        <p class="lead">"Embark on a journey of exquisite coffee indulgence like no other as you step into the world of ITTS Coffee. We invite you to savor the finest coffee experience, meticulously crafted from the choicest beans sourced from around the globe, roasted to perfection, and brewed with passion."</p>
                        <p class="mb-0">Each cup served at ITTS Coffee is not merely a beverage but a tale of dedication, artistry, and the love for coffee-making that dates back generations. Our baristas, true coffee artisans, take pride in every cup they create, ensuring that you not only taste the richness but also feel the soul of the coffee. So, if you're a coffee enthusiast with an appreciation for exceptional flavors and heartwarming stories, ITTS Coffee is your destination of choice – where every cup tells a story.</p>
                    </div>
                </div>
            </div>
        </section>

         <!-- Image element - set the background image for the header in the line below-->
        <div class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/4ulffa6qoKA/1200x800')">
            <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
            <div style="height: 20rem"></div>
        </div>
        <!-- Content section-->
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>Engaging Background Images</h2>
                        <p class="lead">The background images used in this template are sourced from Unsplash and are open source and free to use.</p>
                        <p class="mb-0">I can't tell you how many people say they were turned off from science because of a science teacher that completely sucked out all the inspiration and enthusiasm they had for the course.</p>
                    </div>
                </div>
            </div>
        </section>
@endsection
