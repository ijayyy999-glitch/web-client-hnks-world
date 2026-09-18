@extends('layouts.app')

@section('content')

<section class="py-5">
  <div class="container">

    <h2 class="fw-bold mb-1" data-aos="fade-up">Katalog Produk</h2>
    <p class="text-muted mb-4" data-aos="fade-up">Koleksi desain kaos original dari Henri Store.</p>

    <div class="row g-4">
      @php
        $projects = [
          [
            'slug' => 'obnoxious',
            'title' => 'Desain Kaos Obnoxious',
            'tech' => 'Design · Merchandise',
            'desc' => 'Desain grafis kaos streetwear dengan artwork custom bertema grafiti.',
            'image' => 'projects/kaos-obnoxious-1.jpg',
          ],
          [
            'slug' => 'boxy-hijau',
            'title' => 'Desain Kaos Boxy Hijau',
            'tech' => 'Design · Merchandise',
            'desc' => 'Desain kaos boxy dengan aksen warna hijau dan tipografi bold.',
            'image' => 'projects/kaos-boxy-hijau.jpg',
          ],
          [
            'slug' => 'boxy-putih',
            'title' => 'Desain Kaos Boxy Putih',
            'tech' => 'Design · Merchandise',
            'desc' => 'Varian desain kaos boxy warna putih dengan artwork minimalis.',
            'image' => 'projects/kaos-boxy-putih.jpg',
          ],
        ];
      @endphp

      @foreach ($projects as $index => $item)
        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
          <div class="card border-0 shadow-sm h-100">
            <img src="{{ asset('images/' . $item['image']) }}"
                 alt="{{ $item['title'] }}"
                 style="height: 220px; object-fit: cover; border-radius: .5rem .5rem 0 0;">
            <div class="card-body d-flex flex-column">
              <h6 class="fw-bold mb-1">{{ $item['title'] }}</h6>
              <small class="text-muted d-block mb-2">{{ $item['tech'] }}</small>
              <p class="small text-muted mb-3">{{ $item['desc'] }}</p>
              <a href="/projects/{{ $item['slug'] }}" class="btn btn-dark btn-sm mt-auto">Detail</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>

  </div>
</section>

@endsection