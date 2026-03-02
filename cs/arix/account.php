<?php

return [
    'account-overview' => 'Přehled účtu',
    'twofactor-messagebox' => 'Musíte si na účtu aktivovat dvoufázové ověření.',
    'apikey' => 'API Klíč',
    'sshkey' => 'SSH Klíč',

    'update-password' => [
        'current' => 'Aktuální heslo',
        'new' => 'Nové hselo',
        'requirements' => 'Vaše heslo by mělo být unikátní a minimálně 8 znaků dlouhé.',
        'confirm' => 'Potvrďte nové heslo',
        'update' => 'Změnit heslo',
    ],

    'update-email' => [
        'isUpdated' => 'Nastavení Emailu bylo úspěšně změněno.',
        'update' => 'Změnit Email',
        'email' => 'Email',
        'confirm' => 'Heslo',
    ],

    'appearance' => [
        'title' => 'Vzhled',
        'lightDarkMode' => 'Světlý/Tmavý Režim',
        'light' => 'Světlý',
        'dark' => 'Tmavý',
        'language' => 'Jazyk panelu',
        'panel-sounds' => 'Zvuky panelu',
        'on' => 'Zap.',
        'off' => 'Vyp.',

        'privacy-mode' => 'Soukromý režim',
    ],

    'twofactor' => [
        'title' => 'Dvoufázové ověření',
        'isEnabled' => 'Dvoufázové ověření je na vašem ůčtu aktivní.',
        'isDisabled' => 'Na vašem ůčtě nemáte aktivní dvoufázové ověření. Klikněte na tlačítko níže a nastavte si ho.',
        'disable' => 'Vypnout 2FA',
        'enable' => 'Zapnout 2FA',
        
        'disable-dialog' => [
            'password' => 'Heslo',
            'cancel' => 'Zrušit',
            'must-enter-password' => 'Musíte zadat heslo k účtu.',
            'disable' => 'Vypnout',
        ],

        'setup-dialog' => [
            'description' => 'Naskenujte QR kód vaší 2FA aplikací a zadejte 6-ti místný kód pro dokončení nastavení.',
            'account-password' => 'Heslo k účtu',
            'qrcode-loading' => 'Čekání na QR kód...',
            'enter-6digit-password' => 'Musíte zadat 6-ti místný kód z vaší 2FA aplikace a heslo k účtu.',
            'enable' => 'Zapnout',
            'cancel' => 'Zrušit',
        ],
    ],

    'apiKey' => [
        'label' => 'Popis',
        'description' => 'Popis API klíče.',
        'allowedIPs-label' => 'Povolené IP adresy',
        'allowedIPs-description' => 'Ponechte prázdné pro povolení všech IP adres, jinak specifikujte každou IP adresu, kterou chcete povolit na nový řádek.',
        'createButton' => 'Vytvořit',

        'your-keys' => 'Váš API Key',
        'store-save' => 'API klíč je zobrazen níže. Uložte ho na bezpečné místo, znovu se nezobrazí.',
        'close' => 'Zavřít',

        'delete-api-key' => 'Smazat API klíč',
        'delete-key' => 'Smazat klíč',
        'all-requests-invalidated-1' => 'Všechny požadavky s',
        'all-requests-invalidated-2' => 'klíčem budou zahozeny.',
        'loading' => 'Načítaní...',
        'no-key-found' => 'Pro tento účet neexistují žádné API klíče.',
        'last-used' => 'Naposled použito',
    ],

    'sshKey' => [
        'loading' => 'Načítaní...',
        'no-key-found' => 'Pro tento účet neexistují žádné SSH klíče.',
        'added-on' => 'přidán dne',

        'createForm' => [
            'key-name' => 'Jméno SSH klíče',
            'public-key' => 'Veřejný klíč',
            'public-key-desc' => 'zadejte váš veřejný SSH klíč.',
            'save' => 'Uložit',
        ],

        'deleteForm' => [
            'delete-ssh-key' => 'Smazat SSH klíč',
            'delete-key' => 'Smazat klíč',
            'will-invalidate-1' => 'Odstranění',
            'will-invalidate-2' => 'SSH klíče znemožní jeho použití napříč panelem.',
        ],
    ],

    'profile' => [
        'update-profile' => 'Aktualizovat profil',
        'first-name' => 'Křestní jméno',
        'last-name' => 'Příjmení',
        'username' => 'Uživatelské jméno',
        'updated-success' => 'Profil byl úspěšně aktualizován.',
    ],

    'recoveryTokensDialog' => [
        'title' => 'Dvoufázové ověření zapnuto',
        'description' => 'Uložte si kódy níže na bezpečné místo. Pokud ztratíte vaše zařízení, můžete tyto kódy použít k přihlášení.',
        'alert' => 'Tyto kódy se znovu nezobrazí.',
        'doneButton' => 'Hotovo',
    ],
];
