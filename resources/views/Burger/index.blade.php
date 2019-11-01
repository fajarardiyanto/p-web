@extends('layout.main')

@section('title', 'Queen Burger')

@section('container')

<section class="bg-1 h-900x main-slider pos relative">
    <div class="triangle-up pos-bottom"></div>
      <div class="container h-100">
        <div class="dplay-tbl">
          <div class="dplay-tbl-cell center-text color-white">
            <h5><b>TERBAIK DI GUNDAR</b></h5>
            <h1 class="mt-30 mb-15">Queen Burger</h1>
            <h5><a href="#menu" class="btn-primaryc plr-25"><b>Lihat Menu Hari Ini</b></a></h5>
          </div>
        </div>
      </div>
  </section>

  <section class="story-area left-text center-sm-text pos-relative">
    <div class="abs-tbl bg-2 w-20 z--1 dplay-md-none"></div>
    <div class="abs-tbr bg-3 w-20 z--1 dplay-md-none"></div>
    <div class="container">
      <div class="heading">
        <img class="heading-img" src="#" alt="">
        <h2>Our Story</h2>
      </div>

      <div class="row">
        <div class="col-md-6">
          <p class="mb-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <div class="col-md-6">
          <p class="mb-30" style="padding-right:15px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="story-area bg-seller color-white pos-relative">
    <div class="pos-bottom triangle-up"></div>
    <div class="pos-top triangle-bottom"></div>
    <div class="container">
      <div class="heading">
        <img class="heading-img" src="#" alt="">
        <h2>Recomendasi</h2>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="center-text mb-30">
            <div class="img-200x mlr-auto pos-relative">
              <h6 class="ribbon-cont"><div class="ribbon-primary"></div><b></b></h6>
              <img src="/assets/images/burger-1.jpg" alt="">
            </div>
            <h5 class="mt-20">Burger 1</h5>
            <h4 class="mt-5"><b>Rp. 20.000,00</b></h4>
            <p class="mt-5" style="color:#fff;"><b>Total Order : </b></p>
            <h6 class="mt-20"><a href="#" class="btn-brdr-primary plr-25"><b>Order Now</b></a></h6>
          </div>
        </div>
      </div>

      <h6 class="center-text mt-40 mt-sm-20 mb-30"><a href="#" class="btn-primaryc plr-25"><b>Lihat Menu Hari Ini</b></a></h6>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="heading">
        <img class="heading-img" src="#" alt="">
        <h2>Menu</h2>
      </div>

      <div class="row" id="menu">
        <div class="col-sm-12">
          <ul class="selecton brdr-b-primary mb-70">
            <li><a class="active" href="#" data-select="*"><b>ALL</b></a></li>
            <li><a href="#" data-select="burger1"><b>BURGER 1</b></a></li>
            <li><a href="#" data-select="burger2"><b>BURGER 2</b></a></li>
            <li><a href="#" data-select="burger3"><b>BURGER 3</b></a></li>
            <li><a href="#" data-select="burger4"><b>BURGER 4</b></a></li>
          </ul>
        </div>
      </div>

      <div class="row">

        <div class="col-md-6 food-menu">
          <div class="sided-90x mv-30">
              <div class="s-left"><img class="br-3" src="{{ asset('images/burger-1.jpg') }}" alt="Menu Image"></div>
            <div class="s-right">
              <h5 class="mb-10"><b>Burger</b><b class="color-primary float-right">Rp. 20.000,00</b></h5>
              <p class="pr-70">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
              <a href="order.html" class="btn-brdr-primary plr-25"><b>Order</b></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

@endsection