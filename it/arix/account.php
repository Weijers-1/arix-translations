<?php

return [
    'account-overview' => 'Panoramica dell\'Account',
    'twofactor-messagebox' => 'Il tuo account deve avere l\'autenticazione a due fattori abilitata per poter continuare.',
    'apikey' => 'Chiave API',
    'sshkey' => 'Chiave SSH',

    'update-password' => [
        'current' => 'Password Attuale',
        'new' => 'Nuova Password',
        'requirements' => 'La tua nuova password deve essere lunga almeno 8 caratteri e unica per questo sito web.',
        'confirm' => 'Conferma Nuova Password',
        'update' => 'Aggiorna Password',
    ],

    'update-email' => [
        'isUpdated' => 'Il tuo indirizzo email principale è stato aggiornato',
        'update' => 'Aggiorna Email',
        'email' => 'Email',
        'confirm' => 'Conferma Password',
    ],

    'appearance' => [
        'title' => 'Aspetto',
        'lightDarkMode' => 'Modalità Chiara/Scura',
        'light' => 'Chiara',
        'dark' => 'Scura',
        'language' => 'Lingua del Pannello',
        'panel-sounds' => 'Suoni del Pannello',
        'on' => 'Attivato',
        'off' => 'Disattivato',

        'privacy-mode' => 'Modalità privacy',
    ],

    'twofactor' => [
        'title' => 'Autenticazione a Due Fattori',
        'isEnabled' => 'La verifica in due passaggi è attualmente abilitata sul tuo account.',
        'isDisabled' => 'Attualmente non hai abilitato la verifica in due passaggi sul tuo account. Clicca il pulsante qui sotto per iniziare la configurazione.',
        'disable' => 'Disabilita a Due Passaggi',
        'enable' => 'Abilita a Due Passaggi',
        
        'disable-dialog' => [
            'password' => 'Password',
            'cancel' => 'Annulla',
            'must-enter-password' => 'Devi inserire la password del tuo account per continuare.',
            'disable' => 'Disabilita',
        ],

        'setup-dialog' => [
            'description' => 'Scansiona il codice QR sopra usando l\'app di autenticazione a due fattori di tua scelta. Quindi, inserisci il codice a 6 cifre generato nel campo sottostante.',
            'account-password' => 'Password dell\'account',
            'qrcode-loading' => 'In attesa del caricamento del codice QR...',
            'enter-6digit-password' => 'Devi inserire il codice a 6 cifre e la tua password per continuare.',
            'enable' => 'Abilita',
            'cancel' => 'Annulla',
        ],
    ],

    'apiKey' => [
        'label' => 'Descrizione',
        'description' => 'Una descrizione di questa chiave API.',
        'allowedIPs-label' => 'IP consentiti',
        'allowedIPs-description' => 'Lascia vuoto per consentire a qualsiasi indirizzo IP di utilizzare questa chiave API, altrimenti fornisci ogni indirizzo IP su una nuova riga.',
        'createButton' => 'Crea',

        'your-keys' => 'La tua Chiave API',
        'store-save' => 'La chiave API richiesta è mostrata di seguito. Conservala in un luogo sicuro, non verrà mostrata di nuovo.',
        'close' => 'Chiudi',

        'delete-api-key' => 'Elimina Chiave API',
        'delete-key' => 'Elimina Chiave',
        'all-requests-invalidated-1' => 'Tutte le richieste usando la',
        'all-requests-invalidated-2' => 'chiave saranno invalidate.',
        'loading' => 'Caricamento...',
        'no-key-found' => 'Nessuna chiave API esiste per questo account.',
        'last-used' => 'Ultimo utilizzo',
    ],

    'sshKey' => [
        'loading' => 'Caricamento...',
        'no-key-found' => 'Nessuna chiave SSH esiste per questo account.',
        'added-on' => 'Aggiunto il',

        'createForm' => [
            'key-name' => 'Nome Chiave SSH',
            'public-key' => 'Chiave Pubblica',
            'public-key-desc' => 'Inserisci la tua chiave pubblica SSH.',
            'save' => 'Salva',
        ],

        'deleteForm' => [
            'delete-ssh-key' => 'Elimina Chiave SSH',
            'delete-key' => 'Elimina Chiave',
            'will-invalidate-1' => 'Rimuovere la',
            'will-invalidate-2' => 'chiave SSH ne invaliderà l\'utilizzo in tutto il Pannello.',
        ],
    ],

    'profile' => [
        'update-profile' => 'Aggiorna profilo',
        'first-name' => 'Nome',
        'last-name' => 'Cognome',
        'username' => 'Nome utente',
        'updated-success' => 'Profilo aggiornato con successo.',
    ],

    'recoveryTokensDialog' => [
        'title' => 'Autenticazione a Due Fattori Abilitata',
        'description' => 'Memorizza i codici qui sotto in un posto sicuro. Se perdi l\'accesso al tuo telefono, puoi utilizzare questi codici di backup per accedere.',
        'alert' => 'Questi codici non verranno mostrati di nuovo.',
        'doneButton' => 'Fatto',
    ],
];