<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class KontakController extends BaseController
{
    public function kirim()
    {
        $nama    = $this->request->getPost('name');
        $email   = $this->request->getPost('email');
        $subjek  = $this->request->getPost('subject');
        $pesan   = $this->request->getPost('message');

        // Validasi sederhana
        if (!$nama || !$email || !$pesan) {
            return redirect()->back()->with('error', 'Semua field wajib diisi.');
        }

        // Simulasi penyimpanan data (bisa ke DB atau email)
        // Simpan ke session flashdata
        return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim.');
    }
}
