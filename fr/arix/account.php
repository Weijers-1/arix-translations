<?php

return [
    'account-overview' => 'Vue du compte',
    'twofactor-messagebox' => 'Votre compte a besoin d\'un A2F',
    'apikey' => 'Clé API',
    'sshkey' => 'Clé SSH',

    'update-password' => [
        'current' => 'Mot de passe actuel',
        'new' => 'Nouveau mot de passe',
        'requirements' => 'Votre mot de passe doit faire 8 caractères.',
        'confirm' => 'Confirmer le nouveau mot de passe',
        'update' => 'Mettre à jour le mot de passe',
    ],

    'update-email' => [
        'isUpdated' => 'Votre adresse e-mail principale a été mise à jour',
        'update' => 'Mettre à jour l\'e-mail',
        'email' => 'E-mail',
        'confirm' => 'Confirmer le mot de passe',
    ],

    'appearance' => [
        'title' => 'Apparence',
        'lightDarkMode' => 'Mode Clair/Sombre',
        'light' => 'Clair',
        'dark' => 'Sombre',
        'language' => 'Langue du panneau',
        'panel-sounds' => 'Sons du panneau',
        'on' => 'Activé',
        'off' => 'Désactivé',

        'privacy-mode' => 'Mode Confidentialité',
    ],

    'twofactor' => [
        'title' => 'Authentification à deux facteurs',
        'isEnabled' => 'La vérification en deux étapes est actuellement activée sur votre compte.',
        'isDisabled' => 'Vous n\'avez actuellement pas activé la vérification en deux étapes sur votre compte. Cliquez sur le bouton ci-dessous pour commencer la configuration.',
        'disable' => 'Désactiver la vérification en deux étapes',
        'enable' => 'Activer la vérification en deux étapes',
        
        'disable-dialog' => [
            'password' => 'Mot de passe',
            'cancel' => 'Annuler',
            'must-enter-password' => 'Vous devez entrer le mot de passe de votre compte pour continuer.',
            'disable' => 'Désactiver',
        ],

        'setup-dialog' => [
            'description' => 'Scannez le code QR ci-dessus à l\'aide de l\'application d\'authentification à deux facteurs de votre choix. Ensuite, saisissez le code à 6 chiffres généré dans le champ ci-dessous.',
            'account-password' => 'Mot de passe du compte',
            'qrcode-loading' => 'En attente du chargement du code QR...',
            'enter-6digit-password' => 'Vous devez saisir le code à 6 chiffres et votre mot de passe pour continuer.',
            'enable' => 'Activer',
            'cancel' => 'Annuler',
        ],
    ],

    'apiKey' => [
        'label' => 'Description',
        'description' => 'Une description de cette clé API.',
        'allowedIPs-label' => 'Adresses IP autorisées',
        'allowedIPs-description' => 'Laissez vide pour autoriser n\'importe quelle adresse IP à utiliser cette clé API, sinon fournissez chaque adresse IP sur une nouvelle ligne.',
        'createButton' => 'Créer',

        'your-keys' => 'Votre clé API',
        'store-save' => 'La clé API que vous avez demandée est affichée ci-dessous. Veuillez la conserver dans un endroit sûr, elle ne sera plus affichée.',
        'close' => 'Fermer',

        'delete-api-key' => 'Supprimer la clé API',
        'delete-key' => 'Supprimer la clé',
        'all-requests-invalidated-1' => 'Toutes les demandes utilisant la',
        'all-requests-invalidated-2' => 'clé seront invalidées.',
        'loading' => 'Chargement...',
        'no-key-found' => 'Aucune clé API n\'existe pour ce compte.',
        'last-used' => 'Dernière utilisation',
    ],

    'sshKey' => [
        'loading' => 'Chargement...',
        'no-key-found' => 'Aucune clé SSH n\'existe pour ce compte.',
        'added-on' => 'Ajouté le',

        'createForm' => [
            'key-name' => 'Nom de la clé SSH',
            'public-key' => 'Clé publique',
            'public-key-desc' => 'Saisissez votre clé publique SSH.',
            'save' => 'Enregistrer',
        ],

        'deleteForm' => [
            'delete-ssh-key' => 'Supprimer la clé SSH',
            'delete-key' => 'Supprimer la clé',
            'will-invalidate-1' => 'La suppression de la',
            'will-invalidate-2' => 'clé SSH invalidera son utilisation à travers le panneau.',
        ],
    ],

    'profile' => [
        'update-profile' => 'Mettre à jour le profil',
        'first-name' => 'Prénom',
        'last-name' => 'Nom de famille',
        'username' => "Nom d'utilisateur",
        'updated-success' => 'Profil mis à jour avec succès.',
    ],

    'recoveryTokensDialog' => [
        'title' => 'Authentification à deux facteurs activée',
        'description' => 'Stockez les codes ci-dessous dans un endroit sûr. Si vous perdez l\'accès à votre téléphone, vous pouvez utiliser ces codes de secours pour vous connecter.',
        'alert' => 'Ces codes ne seront plus affichés.',
        'doneButton' => 'Terminé',
    ],
];
