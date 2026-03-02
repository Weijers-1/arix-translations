<?php

return [
    'account-overview' => 'Hesap Genel Bakış',
    'twofactor-messagebox' => 'Devam etmek için hesabınızda iki faktörlü kimlik doğrulama etkin olmalıdır.',
    'apikey' => 'API Anahtarı',
    'sshkey' => 'SSH Anahtarı',

    'update-password' => [
        'current' => 'Geçerli Şifre',
        'new' => 'Yeni Şifre',
        'requirements' => 'Yeni şifreniz en az 8 karakter uzunluğunda olmalı ve bu web sitesine özgün olmalıdır.',
        'confirm' => 'Yeni Şifreyi Onayla',
        'update' => 'Şifreyi Güncelle',
    ],

    'update-email' => [
        'isUpdated' => 'Ana e-posta adresiniz güncellendi',
        'update' => 'E-postayı Güncelle',
        'email' => 'E-posta',
        'confirm' => 'Şifreyi Onayla',
    ],

    'appearance' => [
        'title' => 'Görünüm',
        'lightDarkMode' => 'Aydınlık/Karanlık Mod',
        'light' => 'Aydınlık',
        'dark' => 'Karanlık',
        'language' => 'Panel Dili',
        'panel-sounds' => 'Panel Sesleri',
        'on' => 'Açık',
        'off' => 'Kapalı',

        'privacy-mode' => 'Gizlilik Modu',
    ],

    'twofactor' => [
        'title' => 'İki Faktörlü Kimlik Doğrulama',
        'isEnabled' => 'Hesabınızda şu anda iki faktörlü doğrulama etkindir.',
        'isDisabled' => 'Hesabınızda şu anda iki faktörlü doğrulama etkin değildir. Devam etmek için aşağıdaki düğmeye tıklayarak yapılandırmaya başlayabilirsiniz.',
        'disable' => 'İki Faktörlü Devre Dışı Bırak',
        'enable' => 'İki Faktörlü Etkinleştir',
        
        'disable-dialog' => [
            'password' => 'Şifre',
            'cancel' => 'İptal',
            'must-enter-password' => 'Devam etmek için hesap şifrenizi girmelisiniz.',
            'disable' => 'Devre Dışı Bırak',
        ],

        'setup-dialog' => [
            'description' => 'Yukarıdaki QR kodunu tercih ettiğiniz iki faktörlü kimlik doğrulama uygulamasıyla tarayın. Ardından, aşağıdaki alana oluşturulan 6 haneli kodu girin.',
            'account-password' => 'Hesap Şifresi',
            'qrcode-loading' => 'QR kodunun yüklenmesi bekleniyor...',
            'enter-6digit-password' => 'Devam etmek için 6 haneli kodu ve şifrenizi girmelisiniz.',
            'enable' => 'Etkinleştir',
            'cancel' => 'İptal',
        ],
    ],

    'apiKey' => [
        'label' => 'Açıklama',
        'description' => 'Bu API anahtarı için bir açıklama.',
        'allowedIPs-label' => 'İzin Verilen IP\'ler',
        'allowedIPs-description' => 'Bu API anahtarını kullanmak için herhangi bir IP adresine izin vermek için boş bırakın, aksi takdirde her IP adresini yeni bir satırda belirtin.',
        'createButton' => 'Oluştur',

        'your-keys' => 'API Anahtarınız',
        'store-save' => 'İstediğiniz API anahtarı aşağıda gösterilmiştir. Lütfen bunu güvenli bir yerde saklayın, tekrar gösterilmeyecek.',
        'close' => 'Kapat',

        'delete-api-key' => 'API Anahtarını Sil',
        'delete-key' => 'Anahtarı Sil',
        'all-requests-invalidated-1' => 'Kullandığınız tüm istekler',
        'all-requests-invalidated-2' => 'anahtarı geçersiz kılacaktır.',
        'loading' => 'Yükleniyor...',
        'no-key-found' => 'Bu hesap için hiç API anahtarı bulunmuyor.',
        'last-used' => 'Son kullanma',
    ],

    'sshKey' => [
        'loading' => 'Yükleniyor...',
        'no-key-found' => 'Bu hesap için hiç SSH Anahtarı bulunmuyor.',
        'added-on' => 'Eklendiği tarih',

        'createForm' => [
            'key-name' => 'SSH Anahtar Adı',
            'public-key' => 'Genel Anahtar',
            'public-key-desc' => 'Genel SSH anahtarınızı girin.',
            'save' => 'Kaydet',
        ],

        'deleteForm' => [
            'delete-ssh-key' => 'SSH Anahtarını Sil',
            'delete-key' => 'Anahtarı Sil',
            'will-invalidate-1' => '',
            'will-invalidate-2' => 'SSH anahtarını kaldırmak, kullanımını tüm panoda geçersiz kılacaktır.',
        ],
    ],

    'profile' => [
        'update-profile' => 'Profili güncelle',
        'first-name' => 'İsim',
        'last-name' => 'Soyisim',
        'username' => 'Kullanıcı adı',
        'updated-success' => 'Profil başarıyla güncellendi.',
    ],

    'recoveryTokensDialog' => [
        'title' => 'İki Faktörlü Kimlik Doğrulama Etkin',
        'description' => 'Aşağıdaki kodları güvenli bir yerde saklayın. Telefon erişiminizi kaybederseniz, bu yedek kodları kullanarak giriş yapabilirsiniz.',
        'alert' => 'Bu kodlar tekrar gösterilmeyecek.',
        'doneButton' => 'Bitti',
    ],
];
