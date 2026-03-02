<?php

return [
    'account-overview' => 'Kontoübersicht',
    'twofactor-messagebox' => 'In deinem Konto muss die Zwei-Faktor-Authentifizierung aktiviert sein, um fortfahren zu können.',
    'apikey' => 'API-Schlüssel',
    'sshkey' => 'SSH-Schlüssel',

    'update-password' => [
        'current' => 'Aktuelles Passwort',
        'new' => 'Neues Passwort',
        'requirements' => 'Dein neues Passwort sollte mindestens 8 Zeichen lang sein und nur für diese Website gelten.',
        'confirm' => 'Neues Passwort bestätigen',
        'update' => 'Passwort aktualisieren',
    ],

    'update-email' => [
        'isUpdated' => 'Deine primäre E-Mail wurde aktualisiert',
        'update' => 'E-Mail aktualisieren',
        'email' => 'E-Mail',
        'confirm' => 'Passwort bestätigen',
    ],

    'appearance' => [
        'title' => 'Aussehen',
        'lightDarkMode' => 'Hell/Dunkel Modus',
        'light' => 'Hell',
        'dark' => 'Dunkel',
        'language' => 'Panel-Sprache',
        'panel-sounds' => 'Panel Sounds',
        'on' => 'Ein',
        'off' => 'Aus',

        'privacy-mode' => 'Datenschutzmodus',
    ],

    'twofactor' => [
        'title' => 'Zwei-Faktor-Authentifizierung',
        'isEnabled' => 'Die Zwei-Schritt-Verifizierung ist derzeit in deinem Konto aktiviert.',
        'isDisabled' => 'In deinem Konto ist die Zwei-Schritt-Verifizierung derzeit nicht aktiviert. Klicke auf die Schaltfläche unten, um mit der Konfiguration zu beginnen.',
        'disable' => 'Two-Step deaktivieren',
        'enable' => 'Aktiviere die Zwei-Schritt-Verifizierung',
        
        'disable-dialog' => [
            'password' => 'Passwort',
            'cancel' => 'Abbrechen',
            'must-enter-password' => 'Du musst dein Kontopasswort eingeben, um fortzufahren.',
            'disable' => 'Deaktivieren',
        ],

        'setup-dialog' => [
            'description' => 'Scanne den obigen QR-Code mit der zweistufigen Authentifizierungs-App deiner Wahl. Gib dann den generierten 6-stelligen Code in das folgende Feld ein.',
            'account-password' => 'Kontopasswort',
            'qrcode-loading' => 'Warte darauf, dass der QR-Code geladen wird...',
            'enter-6digit-password' => 'Du musst den 6-stelligen Code und dein Passwort eingeben, um fortzufahren.',
            'enable' => 'Aktivieren',
            'cancel' => 'Abbrechen',
        ],
    ],

    'apiKey' => [
        'label' => 'Beschreibung',
        'description' => 'Eine Beschreibung dieses API-Schlüssels',
        'allowedIPs-label' => 'Erlaubte IPs',
        'allowedIPs-description' => 'Leer lassen, wenn jede IP-Adresse diesen API-Schlüssel verwenden darf, andernfalls jede IP-Adresse in einer neuen Zeile angeben',
        'createButton' => 'Erstellen',

        'your-keys' => 'Dein API-Schlüssel',
        'store-save' => 'Der API-Schlüssel, den du angefordert hast, wird unten angezeigt. Bitte speichere ihn an einem sicheren Ort, er wird nicht mehr angezeigt.',
        'close' => 'Schließen',

        'delete-api-key' => 'API-Schlüssel löschen',
        'delete-key' => 'Schlüssel löschen',
        'all-requests-invalidated-1' => 'Alle Anfragen, die den',
        'all-requests-invalidated-2' => 'Der Schlüssel wird für ungültig erklärt.',
        'loading' => 'Laden...',
        'no-key-found' => 'Für dieses Konto existieren keine API-Schlüssel.',
        'last-used' => 'Zuletzt verwendet',
    ],

    'sshKey' => [
        'loading' => 'Laden...',
        'no-key-found' => 'Für dieses Konto existieren keine SSH-Schlüssel.',
        'added-on' => 'Hinzugefügt am',

        'createForm' => [
            'key-name' => 'SSH-Schlüsselname',
            'public-key' => 'Öffentlicher Schlüssel',
            'public-key-desc' => 'Gib deinen öffentlichen SSH-Schlüssel ein.',
            'save' => 'Speichern',
        ],

        'deleteForm' => [
            'delete-ssh-key' => 'SSH-Schlüssel löschen',
            'delete-key' => 'Schlüssel löschen',
            'will-invalidate-1' => 'Entfernen des',
            'will-invalidate-2' => 'Durch das Entfernen des SSH-Schlüssels wird seine Verwendung im Panel ungültig.',
        ],
    ],

    'profile' => [
        'update-profile' => 'Profil aktualisieren',
        'first-name' => 'Vorname',
        'last-name' => 'Nachname',
        'username' => 'Benutzername',
        'updated-success' => 'Profil erfolgreich aktualisiert.',
    ],

    'recoveryTokensDialog' => [
        'title' => 'Zwei-Schritt-Authentifizierung aktiviert',
        'description' => 'Bewahre die folgenden Codes an einem sicheren Ort auf. Wenn du den Zugang zu deinem Telefon verlierst, kannst du diese Backup-Codes verwenden, um dich anzumelden',
        'alert' => 'Diese Codes werden nicht mehr angezeigt.',
        'doneButton' => 'Fertig',
    ],
];