<?php

return [
    'account-overview' => 'Prezentarea Generala A Contului',
    'twofactor-messagebox' => 'Contul tau trebuie sa aiba verificarea in 2 pasi activata ca sa functioneze acest lucru.',
    'apikey' => 'API Key',
    'sshkey' => 'SSH Key',

    'update-password' => [
        'current' => 'Parola Curenta',
        'new' => 'Parola noua',
        'requirements' => 'Parola ta noua trebuie sa aiba 8 caractere unice ca sa functioneze in acest site.',
        'confirm' => 'Confirma Parola Noua',
        'update' => 'Actualizeaza Parola',
    ],

    'update-email' => [
        'isUpdated' => 'Email-ul tau primar a fost actualizat',
        'update' => 'Actualizeaza Email',
        'email' => 'Email',
        'confirm' => 'Confirma Parola',
    ],

    'appearance' => [
        'title' => 'Aspect',
        'lightDarkMode' => 'Light/Dark Mode',
        'light' => 'Light',
        'dark' => 'Dark',
        'language' => 'Limba Panou',
        'panel-sounds' => 'Sunet Panou',
        'on' => 'Pornit',
        'off' => 'Oprit',

        'privacy-mode' => 'Modul de confidențialitate',
    ],

    'twofactor' => [
        'title' => 'Verificare in 2 pasi',
        'isEnabled' => 'Verificarea in 2 pasi este activa pe contul tau.',
        'isDisabled' => 'Momentan nu ai activa verificarea in 2 pasi. Apasa pe butonul de mai jos ca sa o configurezi.',
        'disable' => 'Dezactiveaza verificarea in 2 pasi',
        'enable' => 'Activeaza verificarea in 2 pasi',
        
        'disable-dialog' => [
            'password' => 'Parola',
            'cancel' => 'Anulare',
            'must-enter-password' => 'Trebuie sa introduci parola contului ca sa continui.',
            'disable' => 'Dezactiveaza',
        ],

        'setup-dialog' => [
            'description' => 'Scaneaza codul QR de mai sus folosind aplicatia de autentificare in 2 pasi. Apoi, introdu codul din 6 cifre generat in campul de mai jos.',
            'account-password' => 'Parola Contului',
            'qrcode-loading' => 'Se asteapta incarcarea codului QR...',
            'enter-6digit-password' => 'Trebuie sa introduci codul din 6 cifre si parola pentru a continua.',
            'enable' => 'Pornire',
            'cancel' => 'Anuleaza',
        ],
    ],

    'apiKey' => [
        'label' => 'Descriere',
        'description' => 'Descrierea acestei cheie API.',
        'allowedIPs-label' => 'IP-uri Permise',
        'allowedIPs-description' => 'Lasa necompletat pentru a permite oricarei adrese IP sa utilizeze cheie API, in caz contrar, furnizeaza fiecare adresa IP pe o linie noua.',
        'createButton' => 'Creaza',

        'your-keys' => 'Cheia ta API',
        'store-save' => 'Cheia API pe care ai cerut-o este generata mai jos. Te rog salveaz-o intr-un loc sigur, nu o vei putea vedea iar.',
        'close' => 'Inchide',

        'delete-api-key' => 'Sterge cheia API',
        'delete-key' => 'Sterge cheia',
        'all-requests-invalidated-1' => 'Toate cererile folosind',
        'all-requests-invalidated-2' => 'aceasta cheie vor fi invalidate.',
        'loading' => 'Se încarcă...',
        'no-key-found' => 'Nu exista o cheie API pentru acest cont.',
        'last-used' => 'Ultima folosire',
    ],

    'sshKey' => [
        'loading' => 'Incarcare...',
        'no-key-found' => 'Nu exista o cheie SSH pentru acest cont.',
        'added-on' => 'Adaugat pe',

        'createForm' => [
            'key-name' => 'Numele Cheii SSH',
            'public-key' => 'Cheie Publica',
            'public-key-desc' => 'Introdu cheia ta SSH publica.',
            'save' => 'save',
        ],

        'deleteForm' => [
            'delete-ssh-key' => 'Sterge Cheia SSH',
            'delete-key' => 'Sterge Cheia',
            'will-invalidate-1' => 'Se indeparteaza',
            'will-invalidate-2' => 'Cheia SSH va fi invalida in utilizarea acesteia in Panou.',
        ],
    ],

    'profile' => [
        'update-profile' => 'Actualizează profilul',
        'first-name' => 'Prenume',
        'last-name' => 'Nume de familie',
        'username' => 'Nume utilizator',
        'updated-success' => 'Profil actualizat cu succes.',
    ],

    'recoveryTokensDialog' => [
        'title' => 'Autentificarea Cu 2 Pasi Activa',
        'description' => 'Salveaza codurile de mai jos intr-un loc sigur. Daca iti pierzi accesul la acest telefon le vei putea folosi sa reintri in cont.',
        'alert' => 'Aceste coduri nu vor fi afisate din nou.',
        'doneButton' => 'Gata',
    ],
];
