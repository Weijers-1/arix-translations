<?php

return [
    'account-overview' => 'Kontooversigt',
    'twofactor-messagebox' => 'Din konto skal have to-faktor-godkendelse aktiveret for at fortsætte.',
    'apikey' => 'API-nøgle',
    'sshkey' => 'SSH-nøgle',

    'update-password' => [
        'current' => 'Nuværende kodeord',
        'new' => 'Nye kodeord',
        'requirements' => 'Din nye adgangskode skal være mindst 8 tegn i længde og unik for dette websted.',
        'confirm' => 'Bekræft ny adgangskode',
        'update' => 'Opdater adgangskode',
    ],

    'update-email' => [
        'isUpdated' => 'Din primære mail er blevet opdateret',
        'update' => 'Opdater e-mail',
        'email' => 'E-mail',
        'confirm' => 'Bekræft kodeord',
    ],

    'appearance' => [
        'title' => 'Udseende',
        'lightDarkMode' => 'Lys/mørk tilstand',
        'light' => 'Lys',
        'dark' => 'Mørk',
        'language' => 'Panelsprog',
        'panel-sounds' => 'Panellyde',
        'on' => 'Til',
        'off' => 'Fra',

        'privacy-mode' => 'Privatlivstilstand',
    ],

    'twofactor' => [
        'title' => 'To faktor-godkendelse',
        'isEnabled' => 'To-trins verifikation er i øjeblikket aktiveret på din konto.',
        'isDisabled' => 'Du har i øjeblikket ikke to-trins verifikation aktiveret på din konto.Klik på knappen nedenfor for at begynde at konfigurere den.',
        'disable' => 'Deaktiver to-trin',
        'enable' => 'Aktivér totrin',
        
        'disable-dialog' => [
            'password' => 'Adgangskode',
            'cancel' => 'Afbestille',
            'must-enter-password' => 'Du skal indtaste din kontoadgangskode for at fortsætte.',
            'disable' => 'Deaktiver',
        ],

        'setup-dialog' => [
            'description' => 'Scan QR-koden ovenfor ved hjælp af den to-trins godkendelsesapp efter eget valg.Indtast derefter den 6-cifrede kode, der er genereret i feltet nedenfor.',
            'account-password' => 'Kontoadgangskode',
            'qrcode-loading' => 'Venter på, at QR -kode indlæses ...',
            'enter-6digit-password' => 'Du skal indtaste den 6-cifrede kode og din adgangskode for at fortsætte.',
            'enable' => 'Aktivér',
            'cancel' => 'Annuller',
        ],
    ],

    'apiKey' => [
        'label' => 'Beskrivelse',
        'description' => 'En beskrivelse af denne API-nøgle.',
        'allowedIPs-label' => 'Tilladte IP\'er',
        'allowedIPs-description' => 'Lad være tomt for at lade enhver IP-adresse bruger denne API-nøgle, ellers giver hver IP-adresse på en ny linje.',
        'createButton' => 'Opret',

        'your-keys' => 'Din API-nøgle',
        'store-save' => 'Den API-nøgle, du har anmodet om, vises nedenfor.Opbevar dette på et sikkert sted, det vises ikke igen.',
        'close' => 'Luk',

        'delete-api-key' => 'Slet API-nøgle',
        'delete-key' => 'Slet nøgle',
        'all-requests-invalidated-1' => 'Alle anmodninger ved hjælp af',
        'all-requests-invalidated-2' => 'Nøglen vil blive ugyldig.',
        'loading' => 'Indlæser...',
        'no-key-found' => 'Der findes ingen API-nøgler til denne konto.',
        'last-used' => 'Sidst brugt',
    ],

    'sshKey' => [
        'loading' => 'Indlæser...',
        'no-key-found' => 'Der findes ingen SSH-nøgler til denne konto.',
        'added-on' => 'Tilføjet',

        'createForm' => [
            'key-name' => 'SSH Nøgleavn',
            'public-key' => 'Offentlig nøgle',
            'public-key-desc' => 'Indtast din offentlige SSH-nøgle.',
            'save' => 'gem',
        ],

        'deleteForm' => [
            'delete-ssh-key' => 'Slet SSH-nøgle',
            'delete-key' => 'Slet nøgle',
            'will-invalidate-1' => 'Fjernelse af',
            'will-invalidate-2' => 'SSH -nøglen vil ugyldiggøre sin brug på tværs af panelet.',
        ],
    ],

    'profile' => [
        'update-profile' => 'Opdater profil',
        'first-name' => 'Fornavn',
        'last-name' => 'Efternavn',
        'username' => 'Brugernavn',
        'updated-success' => 'Profil opdateret med succes.',
    ],

    'recoveryTokensDialog' => [
        'title' => 'To-trins godkendelse aktiveret',
        'description' => 'Opbevar koderne nedenfor et sikkert sted.Hvis du mister adgangen til din telefon, kan du bruge disse backup-koder til at logge ind.',
        'alert' => 'Disse koder vises ikke igen.',
        'doneButton' => 'Færdig',
    ],
];