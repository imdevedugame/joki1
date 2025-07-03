<?= $this->extend('components/layout_clear') ?>
<?= $this->section('content') ?>

<?php
$name = [
    'name' => 'name',
    'id' => 'name',
    'class' => 'form-control',
    'value' => set_value('name')
];

$email = [
    'name' => 'email',
    'id' => 'email',
    'class' => 'form-control',
    'value' => set_value('email')
];

$username = [
    'name' => 'username',
    'id' => 'username',
    'class' => 'form-control',
    'value' => set_value('username')
];

$password = [
    'name' => 'password',
    'id' => 'password',
    'class' => 'form-control'
];

$confPassword = [
    'name' => 'confpassword',
    'id' => 'confpassword',
    'class' => 'form-control'
];
?>

<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                <div class="d-flex justify-content-center py-4">
                    <a href="<?= base_url() ?>" class="logo d-flex align-items-center w-auto">
                        <img src="<?= base_url() ?>NiceAdmin/assets/img/logo_blangkon.jpg" alt="" style="height: 40px;">
                        <span class="ms-2" style="font-weight: bold; font-size: 20px;">Blangkis Store</span>
                    </a>
                </div><!-- End Logo -->

                <div class="card mb-3">
                    <div class="card-body">
                        <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                            <p class="text-center small">Enter your details to register</p>
                        </div>

                        <?php if (session()->getFlashdata('error')): ?>
                            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                        <?php endif; ?>

                        <?= form_open('register', ['class' => 'row g-3 needs-validation']) ?>

                        <div class="col-12">
                            <label for="name" class="form-label">Full Name</label>
                            <?= form_input($name) ?>
                            <div class="invalid-feedback">Please enter your name.</div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <?= form_input($email) ?>
                            <div class="invalid-feedback">Please enter your email.</div>
                        </div>

                        <div class="col-12">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text">@</span>
                                <?= form_input($username) ?>
                                <div class="invalid-feedback">Choose a username.</div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="password" class="form-label">Password</label>
                            <?= form_password($password) ?>
                            <div class="invalid-feedback">Enter a password.</div>
                        </div>

                        <div class="col-12">
                            <label for="confpassword" class="form-label">Confirm Password</label>
                            <?= form_password($confPassword) ?>
                            <div class="invalid-feedback">Please confirm your password.</div>
                        </div>

                        <div class="col-12">
                            <?= form_submit('submit', 'Register', ['class' => 'btn btn-primary w-100']) ?>
                        </div>

                        <?= form_close() ?>
                        <p class="text-center small mt-3">Sudah punya akun? <a href="<?= base_url('login') ?>">Login di sini</a></p>
                    </div>
                </div>

                <div class="credits">
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>

            </div>
        </div>
    </div>
</section>

</div>
</main>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/js/main.js"></script>

</body>
<?= $this->endSection() ?>
