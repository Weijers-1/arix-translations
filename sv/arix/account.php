<?php

return [
    'account-overview' => 'Konto Översikt',
    'twofactor-messagebox' => 'Ditt konto måste ha tvåfaktorsautentisering aktiverad för att kunna fortsätta.',
    'apikey' => 'API-Nyckel',
    'sshkey' => 'SSH-Nyckel',

    'update-password' => [
        'current' => 'Nuvarande Lösenord',
        'new' => 'Nytt Lösenord',
        'requirements' => 'Ditt nya lösenord bör vara minst 8 tecken långt och unikt för denna webbplats.',
        'confirm' => 'Bekräfta Nytt Lösenord',
        'update' => 'Updatera Lösenord',
    ],

    'update-email' => [
        'isUpdated' => 'Din primära e-postadress har uppdaterats',
        'update' => 'Uppdatera E-Post',
        'email' => 'E-Post',
        'confirm' => 'Bekräfta Lösenord',
    ],

    'appearance' => [
        'title' => 'Utseende',
        'lightDarkMode' => 'Ljus/Mörkt läge',
        'light' => 'Ljust',
        'dark' => 'Mörkt',
        'language' => 'Panelspråk',
        'panel-sounds' => 'Panelljud',
        'on' => 'På',
        'off' => 'Av',

        'privacy-mode' => 'Integritetsläge',
    ],

    'twofactor' => [
        'title' => 'Tvåfaktorsautentisering',
        'isEnabled' => 'Tvåstegsverifiering är för närvarande aktiverad på ditt konto.',
        'isDisabled' => 'Du har för närvarande inte tvåstegsverifiering aktiverad på ditt konto. Klicka på knappen nedan för att börja konfigurera den.',
        'disable' => 'Inaktivera Tvåstegsverifiering',
        'enable' => 'Aktivera Tvåstegsverifiering',
        
        'disable-dialog' => [
            'password' => 'Lösenord',
            'cancel' => 'Avbryt',
            'must-enter-password' => 'Du måste ange ditt kontolösenord för att fortsätta.',
            'disable' => 'Inaktivera',
        ],

        'setup-dialog' => [
            'description' => 'Skanna QR-koden ovan med den tvåstegsautentiseringsapp du väljer. Ange sedan den 6-siffriga koden som skapats i fältet nedan.',
            'account-password' => 'Kontolösenord',
            'qrcode-loading' => 'Väntar på att QR-koden ska laddas...',
            'enter-6digit-password' => 'Du måste ange den 6-siffriga koden och ditt lösenord för att fortsätta.',
            'enable' => 'Aktivera',
            'cancel' => 'Avbryt',
        ],
    ],

    'apiKey' => [
        'label' => 'Beskrivning',
        'description' => 'En beskrivning av denna API-nyckel.',
        'allowedIPs-label' => 'Tillåtna IP-adresser',
        'allowedIPs-description' => 'Lämna tomt för att tillåta vilken IP-adress som helst att använda denna API-nyckel, annars ange varje IP-adress på en ny rad.',
        'createButton' => 'Skapa',

        'your-keys' => 'Din API-Nyckel',
        'store-save' => 'API-Nyckeln du har begärt visas nedan. Förvara detta på en säker plats, det kommer inte att visas igen.',
        'close' => 'Stäng',

        'delete-api-key' => 'Ta bort API-Nyckel',
        'delete-key' => 'Ta Bort Nyckel',
        'all-requests-invalidated-1' => 'Alla förfrågningar med hjälp av',
        'all-requests-invalidated-2' => 'nyckel kommer att ogiltigförklaras.',
        'loading' => 'Laddar...',
        'no-key-found' => 'Det finns inga API-Nycklar för det här kontot.',
        'last-used' => 'Senast använd',
    ],

    'sshKey' => [
        'loading' => 'Laddar...',
        'no-key-found' => 'Det finns inga SSH-Nycklar för detta konto.',
        'added-on' => 'Tillagd på',

        'createForm' => [
            'key-name' => 'SSH-Nyckelnamn',
            'public-key' => 'Offentlig Nyckel',
            'public-key-desc' => 'Ange din offentliga SSH-Nyckel.',
            'save' => 'spara',
        ],

        'deleteForm' => [
            'delete-ssh-key' => 'Ta bort SSH-Nyckel',
            'delete-key' => 'Ta Bort Nyckel',
            'will-invalidate-1' => 'Ta bort',
            'will-invalidate-2' => 'SSH-Nyckeln ogiltigförklarar dess användning över panelen.',
        ],
    ],

    'profile' => [
        'update-profile' => 'Uppdatera profil',
        'first-name' => 'Förnamn',
        'last-name' => 'Efternamn',
        'username' => 'Användarnamn',
        'updated-success' => 'Profil uppdaterad.',
    ],

    'recoveryTokensDialog' => [
        'title' => 'Tvåstegsautentisering Aktiverad',
        'description' => 'Spara koderna nedan på ett säkert ställe. Om du förlorar åtkomsten till din telefon kan du använda dessa reservkoder för att logga in.',
        'alert' => 'Dessa koder kommer inte att visas igen.',
        'doneButton' => 'Klar',
    ],
];
