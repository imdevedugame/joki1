<?= $this->extend('layout_home') ?>
<?= $this->section('content') ?>

<?php if (session()->getFlashData('success')) { ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= session()->getFlashData('success') ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php } ?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#home">
            <i class="bi bi-shop"></i> Blangkis Store
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#products">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('keranjang') ?>">
                        <i class="bi bi-cart"></i> Keranjang
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section id="home" class="hero-section bg-gradient-primary text-white" style="padding-top: 100px; min-height: 100vh; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
    <div class="container">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h1 class="display-4 fw-bold mb-4">Selamat Datang di Blangkis Store</h1>
                    <p class="lead mb-4">Temukan berbagai produk berkualitas dengan harga terjangkau. Belanja mudah, cepat, dan terpercaya hanya di Blangkis Store.</p>
                    <div class="hero-buttons">
                        <a href="#products" class="btn btn-light btn-lg me-3">
                            <i class="bi bi-bag-check"></i> Belanja Sekarang
                        </a>
                        <a href="#about" class="btn btn-outline-light btn-lg">
                            <i class="bi bi-info-circle"></i> Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-image text-center">
                    <img src="<?= base_url('NiceAdmin/assets/img/hero-shopping.png') ?>" alt="Shopping" class="img-fluid" style="max-height: 500px;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h2 class="display-5 fw-bold text-primary">Tentang Blangkis Store</h2>
                <p class="lead text-muted">Kepercayaan dan kualitas adalah prioritas utama kami</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="feature-icon bg-primary text-white rounded-circle mx-auto mb-3" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-shield-check fs-4"></i>
                        </div>
                        <h5 class="card-title">Produk Berkualitas</h5>
                        <p class="card-text">Semua produk telah melalui seleksi ketat untuk memastikan kualitas terbaik bagi pelanggan.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="feature-icon bg-success text-white rounded-circle mx-auto mb-3" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-truck fs-4"></i>
                        </div>
                        <h5 class="card-title">Pengiriman Cepat</h5>
                        <p class="card-text">Sistem pengiriman yang efisien memastikan produk sampai ke tangan Anda dengan cepat dan aman.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="feature-icon bg-info text-white rounded-circle mx-auto mb-3" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-headset fs-4"></i>
                        </div>
                        <h5 class="card-title">Layanan 24/7</h5>
                        <p class="card-text">Tim customer service kami siap membantu Anda kapan saja untuk memberikan pelayanan terbaik.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products Section -->
<section id="products" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h2 class="display-5 fw-bold text-primary">Produk Unggulan</h2>
                <p class="lead text-muted">Pilihan terbaik untuk kebutuhan Anda</p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($product as $key => $item) : ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <?= form_open('keranjang') ?>
                <?php
                echo form_hidden('id', $item['id']);
                echo form_hidden('nama', $item['nama']);
                echo form_hidden('harga', $item['harga']);
                echo form_hidden('foto', $item['foto']);
                ?>
                <div class="card h-100 shadow-sm border-0 product-card">
                    <div class="card-img-top-wrapper" style="height: 250px; overflow: hidden;">
                        <img src="<?php echo base_url() . "NiceAdmin/assets/img/" . $item['foto'] ?>" 
                             alt="<?= $item['nama'] ?>" 
                             class="card-img-top" 
                             style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-primary fw-bold"><?php echo $item['nama'] ?></h5>
                        <p class="card-text text-success fw-bold fs-5 mb-2">
                            <?php echo number_to_currency($item['harga'], 'IDR') ?>
                        </p>
                        <p class="text-muted mb-2">
                            <strong>Kategori:</strong> 
                            <span class="badge bg-secondary"><?= $item['nama_kategori'] ?? 'Tidak dikategorikan' ?></span>
                        </p>
                        <p class="card-text flex-grow-1">
                            <?= substr($item['deskripsi'], 0, 100) ?>...
                        </p>
                        <div class="mt-auto">
                            <button type="submit" class="btn btn-primary w-100 rounded-pill">
                                <i class="bi bi-cart-plus"></i> Tambah ke Keranjang
                            </button>
                        </div>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
            <?php endforeach ?>
        </div>
        <div class="row">
            <div class="col-12 text-center mt-4">
                <a href="<?= base_url('products') ?>" class="btn btn-outline-primary btn-lg">
                    <i class="bi bi-grid"></i> Lihat Semua Produk
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer id="contact" class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <h5 class="fw-bold mb-3">
                    <i class="bi bi-shop"></i> Blangkis Store
                </h5>
                <p class="text-light">Toko online terpercaya yang menyediakan berbagai produk berkualitas dengan harga terjangkau. Kepuasan pelanggan adalah prioritas utama kami.</p>
                <div class="social-links">
                    <a href="#" class="text-white me-3"><i class="bi bi-facebook fs-5"></i></a>
                    <a href="#" class="text-white me-3"><i class="bi bi-instagram fs-5"></i></a>
                    <a href="#" class="text-white me-3"><i class="bi bi-twitter fs-5"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-whatsapp fs-5"></i></a>
                </div>
            </div>
            <div class="col-lg-2 mb-4">
                <h6 class="fw-bold mb-3">Menu</h6>
                <ul class="list-unstyled">
                    <li><a href="#home" class="text-light text-decoration-none">Beranda</a></li>
                    <li><a href="#about" class="text-light text-decoration-none">Tentang</a></li>
                    <li><a href="#products" class="text-light text-decoration-none">Produk</a></li>
                    <li><a href="#contact" class="text-light text-decoration-none">Kontak</a></li>
                </ul>
            </div>
            <div class="col-lg-3 mb-4">
                <h6 class="fw-bold mb-3">Kategori</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light text-decoration-none">Elektronik</a></li>
                    <li><a href="#" class="text-light text-decoration-none">Fashion</a></li>
                    <li><a href="#" class="text-light text-decoration-none">Rumah Tangga</a></li>
                    <li><a href="#" class="text-light text-decoration-none">Olahraga</a></li>
                </ul>
            </div>
            <div class="col-lg-3 mb-4">
                <h6 class="fw-bold mb-3">Kontak Kami</h6>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <i class="bi bi-geo-alt"></i> 
                        Jl. Contoh No. 123, Jakarta
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-telephone"></i> 
                        +62 812-3456-7890
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-envelope"></i> 
                        info@blangkisstore.com
                    </li>
                    <li>
                        <i class="bi bi-clock"></i> 
                        Senin - Sabtu: 08:00 - 20:00
                    </li>
                </ul>
            </div>
        </div>
        <hr class="my-4">
        <div class="row">
            <div class="col-12 text-center">
                <p class="mb-0">&copy; <?= date('Y') ?> Blangkis Store. All rights reserved. Made with <i class="bi bi-heart-fill text-danger"></i></p>
            </div>
        </div>
    </div>
</footer>

<!-- Custom CSS -->
<style>
.product-card:hover {
    transform: translateY(-5px);
    transition: transform 0.3s ease;
}

.product-card:hover .card-img-top {
    transform: scale(1.05);
}

.hero-section {
    position: relative;
    overflow: hidden;
}

.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="white" opacity="0.1"><polygon points="1000,100 1000,0 0,100"/></svg>');
    background-size: cover;
}

.navbar-brand:hover {
    transform: scale(1.05);
    transition: transform 0.3s ease;
}

.feature-icon:hover {
    transform: scale(1.1);
    transition: transform 0.3s ease;
}

.social-links a:hover {
    transform: translateY(-2px);
    transition: transform 0.3s ease;
}

/* Smooth scrolling */
html {
    scroll-behavior: smooth;
}

/* Custom button hover effects */
.btn:hover {
    transform: translateY(-2px);
    transition: transform 0.3s ease;
}
</style>

<!-- JavaScript for smooth scrolling and navbar -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('navbar-scrolled');
        } else {
            navbar.classList.remove('navbar-scrolled');
        }
    });
    
    // Close mobile menu when clicking on a link
    const navLinks = document.querySelectorAll('.nav-link');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (navbarCollapse.classList.contains('show')) {
                navbarCollapse.classList.remove('show');
            }
        });
    });
});
</script>

<?= $this->endSection() ?>