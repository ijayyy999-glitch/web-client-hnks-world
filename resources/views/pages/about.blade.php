@extends('layouts.app')

@section('content')

<section class="py-5">
  <div class="container">
    <div class="row align-items-center gy-4">

      <div class="col-lg-5 text-center" data-aos="fade-right">
        <img src="{{ asset('images/profile.jpg') }}"
             alt="Henri Store"
             class="img-fluid rounded-4"
             style="max-height: 480px; object-fit: cover;">
      </div>

      <div class="col-lg-7" data-aos="fade-left">
        <p class="text-muted mb-1">Tentang Kami</p>
        <h2 class="fw-bold mb-3">HNKS WORLD</h2>
        <p class="text-muted mb-2">
          HNKS WORLD adalah brand streetwear yang lahir dari kecintaan
          terhadap seni grafis dan gaya hidup jalanan. Setiap desain kami
          dibuat secara orisinal, menggabungkan elemen grafiti, tipografi
          bold, dan konsep visual yang berani.
        </p>
        <p class="text-muted mb-4">
          Kami percaya bahwa pakaian bukan sekadar fashion, tapi juga cara
          untuk mengekspresikan karakter dan identitas diri. Karena itu,
          kami selalu menjaga kualitas bahan dan detail produksi di setiap
          produk yang kami hadirkan.
        </p>

        <div class="row g-3 mb-4">
          <div class="col-6" data-aos="fade-up" data-aos-delay="0">
            <small class="text-muted d-block">Kategori</small>
            <span class="fw-semibold">Streetwear</span>
          </div>
          <div class="col-6" data-aos="fade-up" data-aos-delay="100">
            <small class="text-muted d-block">Spesialisasi</small>
            <span class="fw-semibold">Graphic Tee, Boxy T-Shirt</span>
          </div>
          <div class="col-6" data-aos="fade-up" data-aos-delay="200">
            <small class="text-muted d-block">Bahan</small>
            <span class="fw-semibold">Cotton Combed Premium</span>
          </div>
          <div class="col-6" data-aos="fade-up" data-aos-delay="300">
            <small class="text-muted d-block">Lokasi</small>
            <span class="fw-semibold">Indonesia</span>
          </div>
        </div>

        <a href="/projects" class="btn btn-dark btn-lg">Lihat Katalog Produk →</a>
      </div>

    </div>
  </div>
</section>

@endsection