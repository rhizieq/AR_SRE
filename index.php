

<!DOCTYPE html>
<html lang="en">

<head>
  <title>SRE Augmented Reality</title>
  <link rel="icon" type="image/x-icon" href="gambar/Profile Picture_SC-50.jpg">
  <!-- AOS CSS-->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link href="Css&JS\kartu.css" rel="stylesheet" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet" />

  <link rel="stylesheet" href="../../assets/vendor/aos/dist/aos.css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    .hero-section {
      background: url("hero/Hindex.png") no-repeat center center/cover;
      height: 100vh;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .feature-cardii img {
      height: 150px;
      object-fit: cover;
    }
  </style>

</head>

<body>
  <div class="loader"></div>
  <!-- AOS JS-->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- Navigasi-->
  <nav class="navbar navbar-expand-sm fixed-top " style="background-color: #ffffff">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">
        <img src="gambar/LOGO_SRE.png" alt="" width="40%" height="25%x" />
      </a>

      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="index.html" >Beranda</a>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Energi Terbarukan</a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item "  href="pltb.html">PLTB (Pembangkit Listrik Tenaga Bayu)</a></li>
    <li><a class="dropdown-item" href="plts.html" >PLTS (Pembangkit Listrik Tenaga Surya)</a></li>
    <li><a class="dropdown-item"  href="Hydroelectric.html">PLTA (Pembangkit Listrik Tenaga Air)</a></li>
    <li><a class="dropdown-item "  href="GeoThermal.html"> PLTPB (Pembangkit Listrik Tenaga Panas Bumi)</a></li>
    <li><a class="dropdown-item"  href="Biomassa.html">Biomassa (Pembangkit Listrik Tenaga Biomassa)</a></li>
    <li><a class="dropdown-item " href="Biofuels.html">Biofuels (Pembangkit Listrik Tenaga Bahan Bakar Hayati)</a></li>
    <li><a class="dropdown-item "  href="Hydrogen.html"y>Hydrogen (Pembangkit Listrik Tenaga Hidrogen)</a></li>
  
  </ul>
  </li>
          <a class="nav-link" href="kami.html">Tentang Kami</a>
      
        </div>
      </div>
    </div>
  </nav>
  <br /><br /><br /><br />
<!--Penutup Navigasi-->

 <!-- Hero Section -->
 <section class="hero-section">
  <div class="container text-white">
    <h1>Selamat Datang di Energi Terbarukan</h1>
    <p>Jelajahi potensi energi bersih dan ramah lingkungan untuk masa depan yang lebih baik.</p>
    <a href="#kenapa" class="btn btn-primary btn-lg" style="background-color: #039e74;">Pelajari Lebih Lanjut</a>
  </div>
</section>

<!-- Kenapa Memilih Energi Terbarukan? -->
<section id="kenapa" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Mengapa Perlu mempelajari Energi Terbarukan?</h2>
    <div class="row" style="text-align: center;">
      <div class="col-md-4">
        <div class="cardi feature-cardi" >
          <img src="keunggulan/masa_depan.png" class="cardi-img-top" alt="">
          <div class="cardi-body">
            <h5 class="cardi-title ">Masa Depan yang Berkelanjutan</h5>
            <p class="cardi-text" style="text-align: justify;">Energi terbarukan adalah kunci untuk mengurangi dampak perubahan iklim. Dengan memahami teknologi ini, masyarakat dapat berkontribusi pada pelestarian lingkungan untuk generasi mendatang.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="cardi feature-cardi">
          <img src="keunggulan/innovasi.png" class="cardi-img-top" alt="">
          <div class="cardi-body">
            <h5 class="cardi-title">Peluang Karier dan Inovasi</h5>
            <p class="cardi-text"  style="text-align: justify;">Bagi pelajar, renewable energy membuka peluang karier di bidang teknologi hijau yang terus berkembang. Pemahaman ini juga memicu inovasi dalam menciptakan solusi energi bersih yang baru.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="cardi feature-cardi">
          <img src="keunggulan/mandiri.png" class="cardi-img-top" alt="">
          <div class="cardi-body">
            <h5 class="cardi-title">Kemandirian Energi</h5>
            <p class="cardi-text" style="text-align: justify;">Renewable energy membantu masyarakat mengurangi ketergantungan pada bahan bakar fosil dan impor energi, sehingga menciptakan kemandirian energi yang lebih stabil dan berkelanjutan.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- ======= awal ======= -->
  <section class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>SRE AR Renewable Energy</h1>
          <p style="font-size: 24px;">
            Ingin tahu bagaimana Anda bisa berkontribusi dalam mengatasi perubahan iklim? <br ><br> dengan memahami energi
            terbarukan. SRE AR Renewable Energy menawarkan cara yang mudah dan menyenangkan untuk belajar tentang
            berbagai teknologi energi bersih. Dengan aplikasi kami, Anda dapat menjelajahi pembangkit listrik tenaga
            surya, angin, air, dan biomassa secara virtual.
          </p>

          <div>
            <a href="#fitur">
            <button type="button" class="btn btn-lg" style="background-color: #039e74; color: #ffffff">
            Mulai belajar
            </button> </a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <div class="sketchfab-embed-wrapper"> <iframe title="Isometric power station representing nuclear" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="75%" height="480" src="https://sketchfab.com/models/d81a2d4932af4a08afdabd3b4bb47c8a/embed"> </iframe> <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;"> <a href="https://sketchfab.com/3d-models/isometric-power-station-representing-nuclear-d81a2d4932af4a08afdabd3b4bb47c8a?utm_medium=embed&utm_campaign=share-popup&utm_content=d81a2d4932af4a08afdabd3b4bb47c8a" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"> Isometric power station representing nuclear </a> by <a href="https://sketchfab.com/olegshuldiakov?utm_medium=embed&utm_campaign=share-popup&utm_content=d81a2d4932af4a08afdabd3b4bb47c8a" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"> Oleg Shuldiakov </a> on <a href="https://sketchfab.com?utm_medium=embed&utm_campaign=share-popup&utm_content=d81a2d4932af4a08afdabd3b4bb47c8a" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;">Sketchfab</a></p></div>        </div>
      </div>
    </div>
  </section>
  <br /><br />
  <!-- awal -->
  <!-- PEnutup awal -->


  <!-- Kenapa ?-->
  <section id="kenapa">

  <div class="container">
    <h1>Mengapa Memilih AR Renewable Energy?</h1>

    <div class="row row-cols-2 row-cols-lg-3 g-4">
      <div class="col">
        <div class="card">
          <img src="keunggulan/menyenangkan.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Belajar Lebih Menyenangkan</h5>
            <p class="card-text" >Belajar tentang energi terbarukan tidak pernah seseru ini! Dengan AR Renewable Energy,
              Anda akan dibawa dalam petualangan virtual yang mengasyikkan untuk menjelajahi dunia energi bersih.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="keunggulan/visual.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Visualisasi yang Menakjubkan</h5>
            <p class="card-text">Nikmati visualisasi 3D yang realistis dari berbagai jenis pembangkit listrik tenaga
              terbarukan. Rasakan seolah-olah Anda berada di sana langsung!</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="keunggulan/akses.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Mudah Diakses</h5>
            <p class="card-text">Aplikasi kami dirancang untuk semua usia dan tingkat pengetahuan. Antarmuka yang
              user-friendly membuat siapa pun bisa dengan mudah menjelajahi fitur-fitur kami.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="keunggulan/lengkap.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Sumber Belajar yang Lengkap</h5>
            <p class="card-text">Dapatkan akses ke berbagai informasi tentang energi terbarukan, mulai dari konsep dasar
              hingga teknologi terbaru. Semua dalam satu aplikasi!</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="keunggulan/sarana.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Dukungan Pendidikan</h5>
            <p class="card-text">Dapatkan akses ke berbagai informasi tentang energi terbarukan, mulai dari konsep dasar
              hingga teknologi terbaru. Semua dalam satu aplikasi!</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="keunggulan/kontribusi.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Kontribusi Nyata</h5>
            <p class="card-text">Dapatkan akses ke berbagai informasi tentang energi terbarukan, mulai dari konsep dasar
              hingga teknologi terbaru. Semua dalam satu aplikasi!</p>
          </div>
        </div>
      </div>
    </div>


   
  </div>
  </section>
  <!-- akhir Kenapa-->
  <br /><br />

  <!--  Fitur Utama Aplikasi -->
  <div class="container">
    <h1> Fitur Utama Aplikasi AR Renewable Energy</h1>    
  <div class="card-group">
    <div class="card">
      <img src="keunggulan/eksplor.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Jelajahi Pembangkit Listrik</h5>
        <p class="card-text">Pengguna dapat menjelajahi model 3D realistis dari berbagai jenis pembangkit listrik tenaga terbarukan, seperti panel surya, turbin angin, dan pembangkit listrik tenaga air.</p>
        
      </div>
    </div>
    <div class="card">
      <img src="keunggulan/cara_kerja.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Melihat Proses Kerja</h5>
        <p class="card-text">nimasi yang jelas menunjukkan bagaimana energi diubah dari sumbernya menjadi listrik. Misalnya, pengguna bisa melihat bagaimana sinar matahari ditangkap oleh panel surya dan diubah menjadi energi listrik.</p>
     
      </div>
    </div>
    <div class="card">
      <img src="keunggulan/realtime.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Interaksi Real-time</h5>
        <p class="card-text">Animasi yang jelas menunjukkan bagaimana energi diubah dari sumbernya menjadi listrik. Misalnya, pengguna bisa melihat bagaimana sinar matahari ditangkap oleh panel surya dan diubah menjadi energi listrik.</p>
       
      </div>
    </div>
  </div>
  </div>
  <br /><br />
 <!--  Penutup Fitur Utama Aplikasi -->

<!-- ajakan menggunakan aplikasi ini-->
<section class="d-flex align-items-center" id="fitur">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h1>Jelajahi Fitur kami 😎</h1>
        <p>
          Jadilah bagian dari generasi hijau! Dengan filter AR keren di Instagram dan TikTok, kamu bisa belajar tentang energi terbarukan sambil membuat konten yang seru. Tunjukkan pada teman-temanmu betapa kerennya teknologi energi bersih!
        </p>
        <div>
          <a href='https://drive.usercontent.google.com/download?id=1yx-ZBcIRRC4sqtYpYQaZ5JLPJUIKgJwf&export=download&authuser=0&confirm=t&uuid=7170b00f-11fe-461b-afcf-b93b3cbaf5e1&at=APvzH3qMDLbSz13GjM41fmE9HYwY:1736147709877'>
          <button type="button" class="btn btn-lg" style="background-color: #039e74; color: #ffffff">
          Cetak Kartu
          </button> </a>
          <a href="pltb.html">
            <button type="button" class="btn btn-lg" style="background-color: #039e74; color: #ffffff">
            Klik disini
            </button> </a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2">
        <img src="https://plnnusadaya.co.id/frontend/assets/img/hero-img.png" class="img-fluid animated" alt="" />
      </div>
    </div>
  </div>
</section>
  <br /><br /> <br /><br />

 
<!-- Penutup ajakan menggunakan aplikasi ini-->

<div class="container mt-5">
        <h1>Komentar Pengunjung</h1>

        <!-- Form Tambah Komentar -->
        <form action="/demo_day/process.php" method="POST" class="mb-4">

            <div class="mb-3">
                <label for="name" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="comment" class="form-label">Komentar:</label>
                <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
            </div>
            <button type="submit" name="add_comment" class="btn btn-primary">Kirim Komentar</button>
        </form>

        <!-- Pesan -->
        <?php if (isset($_GET['message'])): ?>
            <div class="alert alert-success">
                <?= htmlspecialchars($_GET['message']) ?>
            </div>
        <?php endif; ?>

        <!-- Tabel Komentar -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Komentar</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM comments ORDER BY created_at DESC";
                $result = $conn->query($sql);

                while ($row = $result->fetch_assoc()):
                ?>
                <tr>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= htmlspecialchars($row['comment']) ?></td>
                    <td><?= htmlspecialchars($row['created_at']) ?></td>
                    <td>
                        <a href="process.php?delete=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus komentar ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

  <!-- Footer -->
  <footer class="bg-dark text-white py-4">
    <div class="container text-center">
      <p>&copy; 2025 AR SRE Renewable Energy. LMS SRE Indonesia.</p>
    </div>
  </footer>
</body>


</html>

<!-- 
Kata Pengantar = Hydrogen
pengertian (energi) = PLTS
bagaimana cara kerjanya = PLTB
Jenis jenis (energi)(1) PLTB
manfaat (energi) = PLTB
keunggulan (energi) = PLTB
sejarah (energi) = PLTB
prinsip kerja (energi) = PLTB
Komponen (energi) = PLTB
Metode Produksi (energi) =  hydrogen
Proses Fabrikasi (energi) = PLTS
Proses Produksi (energi) = 
jenis jenis atau jenis sistem (energi)(2) = PLTS
(energi)  dalam Perspektif Ekonomi
Keekonomian (energi) = biofuel
tren global potensi di indonesia = 
Kondisi dan Potensi (energi) di Indonesia = biofuel
Tantangan dan Kebijakan (energi) di Indonesia = PLTB
Statistik PLTB Global =





-->