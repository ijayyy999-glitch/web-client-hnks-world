@extends('layouts.app')

@section('content')

<section class="py-5">
  <div class="container">
    <div class="row g-5">

      <div class="col-lg-5" data-aos="fade-right">
        <h2 class="fw-bold mb-3">Hubungi Kami</h2>
        <p class="text-muted mb-4">
          Ada pertanyaan seputar produk atau ingin melakukan pemesanan?
          Silakan hubungi kami melalui informasi di bawah ini.
        </p>

        <div class="mb-3">
          <small class="text-muted d-block">WhatsApp</small>
          <a href="https://wa.me/6281234567890" target="_blank" class="fw-semibold text-dark">+62 812 3456 7890</a>
        </div>
        <div class="mb-4">
          <small class="text-muted d-block">Lokasi</small>
          <span class="fw-semibold">Indonesia</span>
        </div>

        <p class="fw-semibold mb-2">Follow Me</p>
        <div class="d-flex gap-3">
          <a href="https://instagram.com/username_ig" target="_blank" class="text-dark fs-4">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="https://tiktok.com/@username_tiktok" target="_blank" class="text-dark fs-4">
            <i class="bi bi-tiktok"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-7" data-aos="fade-left">
        <form id="contact-form">
          <div class="mb-3">
            <label class="form-label small text-muted">Nama</label>
            <input type="text" id="nama" class="form-control" placeholder="Masukkan nama Anda" required>
          </div>
          <div class="mb-3">
            <label class="form-label small text-muted">Subject</label>
            <input type="text" id="subject" class="form-control" placeholder="Masukkan subject" required>
          </div>
          <div class="mb-3">
            <label class="form-label small text-muted">Pesan</label>
            <textarea id="pesan" class="form-control" rows="5" placeholder="Tulis pesan Anda..." required></textarea>
          </div>
          <button type="submit" class="btn btn-dark btn-lg">Kirim Pesan ➤</button>
        </form>
      </div>

    </div>
  </div>
</section>

<script>
  document.getElementById('contact-form').addEventListener('submit', function (e) {
    e.preventDefault();

    const nama = document.getElementById('nama').value;
    const subject = document.getElementById('subject').value;
    const pesan = document.getElementById('pesan').value;

    const nomorWhatsapp = '6281234567890'; // ganti dengan nomor WA asli

    const teks = `Halo Henri Store, saya ingin menghubungi Anda.%0A%0A` +
                 `Nama: ${nama}%0A` +
                 `Subject: ${subject}%0A` +
                 `Pesan: ${pesan}`;

    window.open(`https://wa.me/${nomorWhatsapp}?text=${teks}`, '_blank');
  });
</script>

@endsection