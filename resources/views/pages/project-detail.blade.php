@extends('layouts.app')

@section('content')

<section class="py-5">
  <div class="container">

    <a href="/projects" class="text-decoration-none d-inline-block mb-4">&larr; Kembali ke Produk</a>

    <h2 class="fw-bold mb-1">{{ $project['title'] }}</h2>
    <p class="text-muted mb-3">{{ $project['tech'] }}</p>
    <p class="mb-4" style="max-width: 700px;">{{ $project['desc'] }}</p>

    <div class="row g-4">
      @foreach ($project['gallery'] as $item)
        <div class="col-md-6">
          <img src="{{ asset('images/' . $item['image']) }}"
               alt="{{ $item['label'] }}"
               class="img-fluid rounded shadow-sm w-100"
               style="object-fit: cover; max-height: 480px;">
          <p class="text-center text-muted mt-2 mb-0">{{ $item['label'] }}</p>
        </div>
      @endforeach
    </div>

  </div>
</section>

@endsection