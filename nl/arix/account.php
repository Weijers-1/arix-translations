<?php

return [
    'account-overview' => 'Accountoverzicht',
    'twofactor-messagebox' => 'Op je account moet Tweestapsverificatie zijn ingeschakeld om door te gaan.',
    'apikey' => 'API-sleutel',
    'sshkey' => 'SSH-sleutel',

    'update-password' => [
        'current' => 'Huidig wachtwoord',
        'new' => 'Nieuw wachtwoord',
        'requirements' => 'Je nieuwe wachtwoord moet minimaal 8 tekens lang zijn en uniek voor deze website.',
        'confirm' => 'Nieuw wachtwoord bevestigen',
        'update' => 'Wachtwoord veranderen',
    ],

    'update-email' => [
        'isUpdated' => 'Je primaire e-mailadres is bijgewerkt',
        'update' => 'E-mail veranderen',
        'email' => 'E-mail',
        'confirm' => 'Wachtwoord bevestigen',
    ],

    'appearance' => [
        'title' => 'Weergave',
        'lightDarkMode' => 'Lichte/Donkere modus',
        'light' => 'Licht',
        'dark' => 'Donker',
        'language' => 'Taal',
        'panel-sounds' => 'Geluiden',
        'on' => 'Aan',
        'off' => 'Uit',
        'privacy-mode' => 'Privacymodus',
    ],

    'twofactor' => [
        'title' => 'Tweestapsverificatie',
        'isEnabled' => 'Tweestapsverificatie is momenteel ingeschakeld op je account.',
        'isDisabled' => 'Je heeft momenteel geen tweestapsverificatie ingeschakeld op je account. Klik op de onderstaande knop om het te configureren.',
        'disable' => 'Tweestap uitzetten',
        'enable' => 'Tweestap aanzetten',
        
        'disable-dialog' => [
            'password' => 'Wachtwoord',
            'cancel' => 'Annuleren',
            'must-enter-password' => 'Je moet je wachtwoord invoeren om door te gaan.',
            'disable' => 'Uitschakelen',
        ],

        'setup-dialog' => [
            'description' => 'Scan de QR-code hierboven met de Tweestapsverificatie-app van je keuze. Voer vervolgens de gegenereerde 6-cijferige code in het onderstaande veld in.',
            'account-password' => 'Accountwachtwoord',
            'qrcode-loading' => 'Wachten tot QR-code is geladen...',
            'enter-6digit-password' => 'Je moet de 6-cijferige code en je wachtwoord invoeren om door te gaan.',
            'enable' => 'Zet aan',
            'cancel' => 'Annuleren',
        ],
    ],

    'apiKey' => [
        'label' => 'Beschrijving',
        'description' => 'Een beschrijving van deze API-sleutel.',
        'allowedIPs-label' => 'Toegestane IP-adressen',
        'allowedIPs-description' => 'Laat leeg om elk IP-adres toe te staan deze API-sleutel te gebruiken, anders geef elk IP-adres op een nieuwe regel op.',
        'createButton' => 'Aanmaken',

        'your-keys' => 'Je API-sleutel',
        'store-save' => 'De API-sleutel die je heeft aangevraagd, wordt hieronder weergegeven. Sla deze op een veilige locatie op, hij wordt niet opnieuw getoond.',
        'close' => 'Sluiten',

        'delete-api-key' => 'API-sleutel verwijderen',
        'delete-key' => 'Sleutel verwijderen',
        'all-requests-invalidated-1' => 'Alle verzoeken die gebruikmaken van de',
        'all-requests-invalidated-2' => 'sleutel worden ongeldig gemaakt.',
        'loading' => 'Laden...',
        'no-key-found' => 'Er zijn geen API-sleutels voor dit account.',
        'last-used' => 'Laatst gebruikt',
    ],

    'sshKey' => [
        'loading' => 'Laden...',
        'no-key-found' => 'Er zijn geen SSH-sleutels voor dit account.',
        'added-on' => 'Toegevoegd op',

        'createForm' => [
            'key-name' => 'SSH-sleutelnaam',
            'public-key' => 'Openbare sleutel',
            'public-key-desc' => 'Voer je openbare SSH-sleutel in.',
            'save' => 'opslaan',
        ],

        'deleteForm' => [
            'delete-ssh-key' => 'SSH-sleutel verwijderen',
            'delete-key' => 'Sleutel verwijderen',
            'will-invalidate-1' => 'Het verwijderen van de',
            'will-invalidate-2' => 'SSH-sleutel maakt het gebruik ervan in het paneel ongeldig.',
        ],
    ],

    'profile' => [
        'update-profile' => 'Profiel bijwerken',
        'first-name' => 'Voornaam',
        'last-name' => 'Achternaam',
        'username' => 'Gebruikersnaam',
        'updated-success' => 'Profiel succesvol bijgewerkt.',
    ],

    'recoveryTokensDialog' => [
        'title' => 'Tweestapsverificatie ingeschakeld',
        'description' => 'Sla de onderstaande codes op een veilige plek op. Als je geen toegang meer heeft tot je telefoon, kunt je deze back-up codes gebruiken om in te loggen.',
        'alert' => 'Deze codes worden niet opnieuw weergegeven.',
        'doneButton' => 'Klaar',
    ],
];