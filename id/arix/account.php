<?php

return [
    'account-overview' => 'Akun Saya',
    'twofactor-messagebox' => 'Akun Anda harus memiliki otentikasi dua faktor yang diaktifkan untuk melanjutkan.',
    'apikey' => 'Kunci API',
    'sshkey' => 'Kunci SSH',

    'update-password' => [
        'current' => 'Kata Sandi Saat Ini',
        'new' => 'Kata Sandi Baru',
        'requirements' => 'Kata sandi baru Anda harus memiliki panjang minimal 8 karakter dan unik untuk situs web ini.',
        'confirm' => 'Konfirmasi Kata Sandi Baru',
        'update' => 'Perbarui Kata Sandi',
    ],

    'update-email' => [
        'isUpdated' => 'Email utama Anda telah diperbarui',
        'update' => 'Perbarui Email',
        'email' => 'Email',
        'confirm' => 'Konfirmasi Kata Sandi',
    ],

    'appearance' => [
        'title' => 'Tampilan',
        'lightDarkMode' => 'Mode Terang/Gelap',
        'light' => 'Terang',
        'dark' => 'Gelap',
        'language' => 'Bahasa Panel',
        'panel-sounds' => 'Suara Panel',
        'on' => 'Aktif',
        'off' => 'Nonaktif',

        'privacy-mode' => 'Mode Privasi',
    ],

    'twofactor' => [
        'title' => 'Otentikasi Dua Faktor',
        'isEnabled' => 'Verifikasi dua langkah saat ini diaktifkan pada akun Anda.',
        'isDisabled' => 'Anda saat ini tidak memiliki verifikasi dua langkah yang diaktifkan pada akun Anda. Klik tombol di bawah untuk mulai mengonfigurasinya.',
        'disable' => 'Nonaktifkan Dua Langkah',
        'enable' => 'Aktifkan Dua Langkah',

        'disable-dialog' => [
            'password' => 'Kata Sandi',
            'cancel' => 'Batal',
            'must-enter-password' => 'Anda harus memasukkan kata sandi akun Anda untuk melanjutkan.',
            'disable' => 'Nonaktifkan',
        ],

        'setup-dialog' => [
            'description' => 'Pindai kode QR di atas menggunakan aplikasi otentikasi dua langkah pilihan Anda. Kemudian, masukkan kode 6 digit yang dihasilkan ke dalam bidang di bawah ini.',
            'account-password' => 'Kata Sandi Akun',
            'qrcode-loading' => 'Menunggu kode QR untuk dimuat...',
            'enter-6digit-password' => 'Anda harus memasukkan kode 6 digit dan kata sandi Anda untuk melanjutkan.',
            'enable' => 'Aktifkan',
            'cancel' => 'Batal',
        ],
    ],

    'apiKey' => [
        'label' => 'Deskripsi',
        'description' => 'Deskripsi kunci API ini.',
        'allowedIPs-label' => 'IP yang Diizinkan',
        'allowedIPs-description' => 'Biarkan kosong untuk mengizinkan setiap alamat IP menggunakan kunci API ini, sebaliknya berikan setiap alamat IP pada baris baru.',
        'createButton' => 'Buat',

        'your-keys' => 'Kunci API Anda',
        'store-save' => 'Kunci API yang Anda minta ditampilkan di bawah ini. Simpan di tempat yang aman, ini tidak akan ditampilkan lagi.',
        'close' => 'Tutup',

        'delete-api-key' => 'Hapus Kunci API',
        'delete-key' => 'Hapus Kunci',
        'all-requests-invalidated-1' => 'Semua permintaan menggunakan',
        'all-requests-invalidated-2' => 'kunci akan dibatalkan.',
        'loading' => 'Memuat...',
        'no-key-found' => 'Tidak ada kunci API untuk akun ini.',
        'last-used' => 'Terakhir digunakan',
    ],

    'sshKey' => [
        'loading' => 'Memuat...',
        'no-key-found' => 'Tidak ada Kunci SSH untuk akun ini.',
        'added-on' => 'Ditambahkan pada',

        'createForm' => [
            'key-name' => 'Nama Kunci SSH',
            'public-key' => 'Kunci Publik',
            'public-key-desc' => 'Masukkan kunci SSH publik Anda.',
            'save' => 'Simpan',
        ],

        'deleteForm' => [
            'delete-ssh-key' => 'Hapus Kunci SSH',
            'delete-key' => 'Hapus Kunci',
            'will-invalidate-1' => 'Menghapus',
            'will-invalidate-2' => 'kunci SSH akan membuat penggunaannya di Panel menjadi tidak valid.',
        ],
    ],

    'profile' => [
        'update-profile' => 'Perbarui profil',
        'first-name' => 'Nama depan',
        'last-name' => 'Nama belakang',
        'username' => 'Nama pengguna',
        'updated-success' => 'Profil berhasil diperbarui.',
    ],

    'recoveryTokensDialog' => [
        'title' => 'Otentikasi Dua Langkah Diaktifkan',
        'description' => 'Simpan kode di bawah ini di tempat yang aman. Jika Anda kehilangan akses ke ponsel Anda, Anda dapat menggunakan kode cadangan ini untuk masuk.',
        'alert' => 'Kode-kode ini tidak akan ditampilkan lagi.',
        'doneButton' => 'Selesai',
    ],
];
