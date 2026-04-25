<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tugas Pertemuan 3 Bootstrap 4 Scrollspy</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      body {
        position: relative;
      }

      .hero-text {
        font-size: 18px;
        max-width: 700px;
      }

      .section-box {
        min-height: 100vh;
      }

      .navbar-brand {
        font-weight: bold;
      }

      .info-card {
        background: rgba(255, 255, 255, 0.2);
        padding: 20px;
        border-radius: 10px;
        margin-top: 20px;
      }
    </style>
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#beranda">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#tentang">Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#agenda">Agenda</a>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="navbardrop"
            data-toggle="dropdown"
          >
            Informasi
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#lokasi">Lokasi</a>
            <a class="dropdown-item" href="#kontak">Kontak</a>
          </div>
        </li>
      </ul>
    </nav>

    <div
      id="beranda"
      class="container-fluid bg-success text-white section-box"
      style="padding-top: 90px; padding-bottom: 70px"
    >
    <h1>Muhammad Trinanda Thoriq NRP 5026241124 Kelas C Pemrograman Web</h1>
    <br>
      <h1>ISE 2026</h1>
      <p class="hero-text">
        ISE 2026 adalah acara seminar dan workshop teknologi yang ditujukan
        untuk mahasiswa yang ingin mempelajari seputar dunia Sistem Informasi
      </p>
      <p class="hero-text">
        Halaman ini merupakan contoh implementasi Bootstrap 4 ScrollSpy. Saat
        halaman di-scroll, menu navigasi di atas akan aktif otomatis sesuai
        bagian yang sedang dibuka.
      </p>

      <div class="info-card">
        <h5>Highlight Acara</h5>
        <p>Peserta: 500+ peserta</p>
        <p>Pembicara: Praktisi IT</p>
        <p>Benefit: Sertifikat, materi, dan networking</p>
      </div>
    </div>

    <div
      id="tentang"
      class="container-fluid bg-warning section-box"
      style="padding-top: 90px; padding-bottom: 70px"
    >
      <h1>Tentang Acara</h1>
      <p>
        Acara ini dibuat untuk membantu mahasiswa memahami dunia Sistem
        Informasi
      </p>
      <p>
        Dalam kegiatan ini, peserta akan belajar mengenai dasar materi pada
        Sistem Informasi, bagaimana Sistem Informasi bekerja
      </p>
      <p>
        Dengan konsep seminar interaktif, peserta tidak hanya mendengarkan
        materi, tetapi juga bisa bertanya langsung kepada narasumber terkait
        pengalaman mereka di industri.
      </p>
    </div>

    <div
      id="agenda"
      class="container-fluid bg-secondary text-white section-box"
      style="padding-top: 90px; padding-bottom: 70px"
    >
      <h1>Agenda Kegiatan</h1>
      <p>
        <strong>08.00 - 08.30</strong> : Registrasi peserta dan pembukaan acara
      </p>
      <p><strong>08.30 - 10.00</strong> : Seminar dasar Sistem Informasi</p>
      <p><strong>10.15 - 11.30</strong> : Workshop</p>
      <p>
        <strong>13.00 - 14.00</strong> : Diskusi karier digital bersama
        narasumber
      </p>
      <p><strong>14.00 - 14.30</strong> : Tanya jawab dan penutupan</p>

      <p>
        Susunan agenda ini menunjukkan bahwa contoh ScrollSpy tidak hanya berisi
        section biasa, tetapi sudah dibuat menjadi informasi yang bisa dipakai
        dalam situasi nyata.
      </p>
    </div>

    <div
      id="lokasi"
      class="container-fluid bg-danger text-white section-box"
      style="padding-top: 90px; padding-bottom: 70px"
    >
      <h1>Lokasi Acara</h1>
      <p>
        Acara dilaksanakan di Departemen Sistem Informasi Institut Teknologi
        Sepuluh Nopember.
      </p>
      <p>
        Alamat: Kampus ITS, Keputih, Kec. Sukolilo, Surabaya, Jawa Timur 60117
      </p>
      <p>
        Lokasi dipilih karena mudah dijangkau oleh mahasiswa dan memiliki
        fasilitas yang memadai untuk seminar, presentasi, serta workshop
        teknologi.
      </p>
      <p>
        Peserta diharapkan hadir 30 menit sebelum acara dimulai untuk proses
        registrasi ulang.
      </p>
    </div>

    <div
      id="kontak"
      class="container-fluid bg-info text-white section-box"
      style="padding-top: 90px; padding-bottom: 70px"
    >
      <h1>Kontak Panitia</h1>
      <p>
        Untuk informasi lebih lanjut, peserta dapat menghubungi panitia melalui:
      </p>
      <p>Email: ise@gmail.com</p>
      <p>WhatsApp: 0813-8411-9922</p>
      <p>Instagram: @ise2026</p>
      <p>
        Pendaftaran dibuka sampai kuota terpenuhi. Peserta yang telah mendaftar
        akan mendapatkan konfirmasi melalui email atau WhatsApp dari panitia.
      </p>
    </div>
  </body>
</html>
