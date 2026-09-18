@extends('layouts.app')

@section('content')

<section class="py-5">
  <div class="container">
    <div class="row align-items-center gy-4">

      <div class="col-lg-6" data-aos="fade-right">
        <p class="text-muted mb-1">Selamat Datang di</p>
        <h1 class="display-4 fw-bold mb-3">
          HNKS WORLD
        </h1>
        <p class="text-muted mb-4" style="max-width: 480px;">
          Brand streetwear dengan desain grafis original, dibuat untuk mereka
          yang ingin tampil beda lewat gaya berpakaian sehari-hari.
        </p>
        <a href="/projects" class="btn btn-dark btn-lg me-2">Lihat Produk →</a>
        <a href="/contact" class="btn btn-outline-dark btn-lg">Hubungi Kami</a>
      </div>

      <div class="col-lg-6 text-center" data-aos="fade-left">
        <img src="{{ asset('images/profile.jpg') }}"
             alt="Henri Store"
             class="img-fluid rounded-4"
             style="max-height: 420px; object-fit: cover;">
      </div>

    </div>
  </div>
</section>

<section class="py-4 border-top border-bottom bg-light">
  <div class="container">
    <div class="row text-center gy-3">
      <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="0">
        <h3 class="fw-bold mb-0">20+</h3>
        <small class="text-muted">Desain Original</small>
      </div>
      <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="100">
        <h3 class="fw-bold mb-0">500+</h3>
        <small class="text-muted">Produk Terjual</small>
      </div>
      <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="200">
        <h3 class="fw-bold mb-0">100%</h3>
        <small class="text-muted">Bahan Premium</small>
      </div>
      <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="300">
        <h3 class="fw-bold mb-0">Fast</h3>
        <small class="text-muted">Respon Cepat</small>
      </div>
    </div>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4" data-aos="fade-up">
      <h4 class="fw-bold mb-0">Produk Unggulan</h4>
      <a href="/projects" class="text-decoration-none">Lihat Semua →</a>
    </div>

    <div class="row g-4">
      @php
        $featured = [
          ['slug' => 'obnoxious', 'title' => 'Desain Kaos Obnoxious', 'tech' => 'Graphic Tee', 'image' => 'projects/kaos-obnoxious-1.jpg'],
          ['slug' => 'boxy-hijau', 'title' => 'Desain Kaos Boxy Hijau', 'tech' => 'Boxy T-Shirt', 'image' => 'projects/kaos-boxy-hijau.jpg'],
          ['slug' => 'boxy-putih', 'title' => 'Desain Kaos Boxy Putih', 'tech' => 'Boxy T-Shirt', 'image' => 'projects/kaos-boxy-putih.jpg'],
        ];
      @endphp

      @foreach ($featured as $index => $item)
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
          <a href="/projects/{{ $item['slug'] }}" class="text-decoration-none text-dark">
            <div class="card border-0 shadow-sm h-100">
              <img src="{{ asset('images/' . $item['image']) }}"
                   alt="{{ $item['title'] }}"
                   style="height: 180px; object-fit: cover; border-radius: .5rem .5rem 0 0;">
              <div class="card-body">
                <h6 class="fw-bold mb-1">{{ $item['title'] }}</h6>
                <small class="text-muted">{{ $item['tech'] }}</small>
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>
</section>

@endsection