<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Profil Akun Saya</h4>
                </div>
                <div class="card-body">

                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                    <?php endif; ?>

                    <div class="text-center mb-4">
                        <h5 class="mb-2">Avatar</h5>
                        <?php if (!empty($user['avatar'])): ?>
                            <img src="<?= base_url('uploads/avatar/' . $user['avatar']) ?>" class="rounded-circle shadow" width="120" height="120" style="object-fit: cover;">
                        <?php else: ?>
                            <p class="text-muted">Belum ada avatar</p>
                        <?php endif; ?>

                        <form action="<?= base_url('account/update-avatar') ?>" method="post" enctype="multipart/form-data" class="mt-3">
                            <div class="input-group">
                                <input type="file" name="avatar" class="form-control" required>
                                <button type="submit" class="btn btn-outline-primary">Update Avatar</button>
                            </div>
                        </form>
                    </div>

                    <hr>

                    <form action="<?= base_url('account/update-username') ?>" method="post" class="mb-4">
                        <h5 class="mb-3">Data Pengguna</h5>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" value="<?= esc($user['email']) ?>" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" value="<?= esc($user['username']) ?>" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Username</button>
                    </form>

                    <hr>

                    <form action="<?= base_url('account/update-password') ?>" method="post">
                        <h5 class="mb-3">Ganti Password</h5>
                        <div class="mb-3">
                            <label class="form-label">Password Lama</label>
                            <input type="password" name="password_lama" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password Baru</label>
                            <input type="password" name="password_baru" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-warning">Update Password</button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>
