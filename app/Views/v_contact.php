<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Hubungi Kami</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
        <li class="breadcrumb-item">Halaman</li>
        <li class="breadcrumb-item active">Kontak</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section contact">

    <div class="row gy-4">

      <div class="col-xl-6">

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box card">
              <i class="bi bi-geo-alt"></i>
              <h3>Alamat</h3>
              <p>Desa Pakis, Kec. Bringin<br>Kabupaten Semarang, Jawa Tengah 50661</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="info-box card">
              <i class="bi bi-telephone"></i>
              <h3>Telepon</h3>
              <p>+62 812-3456-7890<br>+62 878-1234-5678</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="info-box card">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p>blangkis.store@gmail.com<br>admin@blangkonpakis.id</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="info-box card">
              <i class="bi bi-clock"></i>
              <h3>Jam Operasional</h3>
              <p>Senin - Sabtu<br>08:00 - 16:00 WIB</p>
            </div>
          </div>
        </div>

      </div>

      <div class="col-xl-6">
        <div class="card p-4">
          <h5 class="card-title text-center">Formulir Kontak</h5>
          <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success">
              <?= session()->getFlashdata('success') ?>
            </div>
          <?php endif; ?>

          <?php
          $error = session()->getFlashdata('error');
          if (!empty($error)) : ?>
            <div class="alert alert-danger">
              <?= esc($error) ?>
            </div>
          <?php endif; ?>


          <form action="<?= base_url('kontak/kirim') ?>" method="post">

            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Nama Anda" required>
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Email Anda" required>
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subjek Pesan" required>
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Tulis pesan Anda di sini..." required></textarea>
              </div>

              <div class="col-md-12 text-center">
                

                <button type="submit">Kirim Pesan</button>
              </div>

            </div>
          </form>
        </div>
      </div>

    </div>

  </section>

</main><!-- End #main -->

<?= $this->endSection() ?>