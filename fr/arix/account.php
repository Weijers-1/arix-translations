<?php

return [
    'account-settings' => 'Paramètres du Compte',
    'general' => 'Général',
    'security' => 'Sécurité',
    'ssh-keys' => 'Clés SSH',
    'api-keys' => 'Clés API',
    'activity' => 'Activité',

    'account-overview' => 'Vue du compte',
    'twofactor-messagebox' => 'L\'authentification à deux facteurs doit être activée sur votre compte pour pouvoir continuer.',

    'update-password' => [
        'current' => 'Mot de passe actuel',
        'new' => 'Nouveau mot de passe',
        'requirements' => 'Votre nouveau mot de passe doit comporter au moins 8 caractères et être unique à ce site web.',
        'confirm' => 'Confirmer le nouveau mot de passe',
        'update' => 'Mettre à jour le mot de passe',
    ],

    'update-email' => [
        'change-email' => 'Modifier l\'adresse e-mail',
        'title' => 'Mettre à jour l\'adresse e-mail',
        'description' => 'Mettez à jour l\'adresse e-mail de votre compte.',
        'isUpdated' => 'Votre adresse e-mail principale a été mise à jour.',
        'update' => 'Mettre à jour l\'e-mail',
        'email' => 'E-mail',
        'confirm' => 'Confirmez le mot de passe',
    ],

    'appearance' => [
        'title' => 'Apparence',
        'lightDarkMode' => 'Mode clair/sombre',
        'lightDarkMode-description' => 'Choisissez le style qui vous convient le mieux.',
        'display-mode' => 'Mode d\'affichage',
        'display-mode-description' => 'Basculer entre les modes d\'affichage normal et compact',
        'language' => 'Langue du panel',
        'language-description' => 'Utilisez le panneau dans différentes langues.',
        'panel-sounds' => 'Sons du panneau',
        'panel-sounds-description' => 'Diffusez un son aux moments clés du panel.',
        'privacy-mode' => 'Mode confidentialité',
        'privacy-mode-description' => 'Masquer les informations sensibles dans le panneau',
        'animations' => 'Animations',
        'animations-description' => 'Activer ou désactiver les animations dans le panneau',

        'light' => 'Clair',
        'dark' => 'Sombre',
        'on' => 'Activé',
        'off' => 'Désactivé',
        'normal' => 'Normal',
        'compact' => 'Compact',
    ],

    'twofactor' => [
        'title' => 'Authentification à deux facteurs',
        'isEnabled' => 'La vérification en deux étapes est actuellement activée sur votre compte.',
        'isDisabled' => 'La vérification en deux étapes n\'est pas actuellement activée sur votre compte. Cliquez sur le bouton ci-dessous pour commencer à la configurer.',
        'disable' => 'Désactiver la validation en deux étapes',
        'enable' => 'Activer la validation en deux étapes',

        'disable-dialog' => [
            'password' => 'Mot de passe',
            'cancel' => 'Annuler',
            'must-enter-password' => 'Vous devez saisir le mot de passe de votre compte pour continuer.',
            'disable' => 'Désactiver',
        ],

        'setup-dialog' => [
            'description' => 'Scannez le code QR ci-dessus à l\'aide de l\'application d\'authentification à deux facteurs de votre choix. Saisissez ensuite le code à 6 chiffres généré dans le champ ci-dessous.',
            'account-password' => 'Mot de passe du compte',
            'qrcode-loading' => 'En attente du chargement du code QR...',
            'enter-6digit-password' => 'Vous devez saisir le code à 6 chiffres et votre mot de passe pour continuer.',
            'enable' => 'Activer',
            'cancel' => 'Annuler',
        ],
    ],

    'apiKey' => [
        'title' => 'Clés API',
        'identifier' => 'Identifiant',
        'label' => 'Description',
        'description' => 'Une description de cette clé API.',
        'allowedIPs-label' => 'IP autorisées',
        'allowedIPs-description' => 'Laissez vide pour autoriser n\'importe quelle adresse IP à utiliser cette clé API, sinon indiquez chaque adresse IP sur une nouvelle ligne.',
        'createButton' => 'Créer',

        'store-save' => 'La clé API que vous avez demandée est affichée ci-dessous. Veuillez la conserver dans un endroit sûr, elle ne sera plus affichée.',
        'close' => 'Fermer',

        'delete-api-key' => 'Supprimer la clé API',
        'delete-key' => 'Supprimer la clé',
        'all-requests-invalidated-1' => 'Toutes les requêtes utilisant la',
        'all-requests-invalidated-2' => 'clé seront invalidées.',
        'loading' => 'Chargement...',
        'no-key-found' => 'Aucune clé API n\'existe pour ce compte.',
        'last-used' => 'Dernière utilisation',
        'expiresAt' => 'Expire le',
        'expiresAt-description' => 'La date à laquelle cette clé API expirera. Laissez vide pour aucune expiration.',
        'never' => 'Jamais',

        'create-api-key' => 'Créer une clé API',
        'create-new-api-key' => 'Créer une nouvelle clé API pour votre compte.'
    ],

    'sshKey' => [
        'ssh-keys' => 'Clés SSH',

        'name' => 'Nom',
        'fingerprint' => 'Empreinte',
        'created-at' => 'Créé le',

        'create-ssh-key' => 'Créer une clé SSH',
        'create-new-ssh-key' => 'Créer une nouvelle clé SSH pour votre compte.',

        'loading' => 'Chargement...',
        'no-key-found' => 'Aucune clé SSH n\'existe pour ce compte.',
        'added-on' => 'Ajouté le',

        'createForm' => [
            'key-name' => 'Nom de la clé SSH',
            'public-key' => 'Clé publique',
            'public-key-desc' => 'Entrez votre clé SSH publique.',
            'save' => 'Enregistrer',

            'upload-key' => 'Importer un fichier de clé',
        ],

        'deleteForm' => [
            'delete-ssh-key' => 'Supprimer la clé SSH',
            'delete-key' => 'Supprimer la clé',
            'will-invalidate-1' => 'La suppression de la',
            'will-invalidate-2' => 'clé SSH invalidera son utilisation dans le panel.',
        ],
    ],

    'recoveryTokensDialog' => [
        'title' => 'Authentification en deux étapes activée',
        'description' => 'Stockez les codes ci-dessous dans un endroit sûr. Si vous perdez l\'accès à votre téléphone, vous pouvez utiliser ces codes de secours pour vous connecter.',
        'alert' => 'Ces codes ne seront plus affichés.',
        'doneButton' => 'Terminé',
    ],

    'profile' => [
        'update-profile' => 'Mettre à jour le profil',
        'first-name' => 'Prénom',
        'last-name' => 'Nom',
        'username' => 'Nom d\'utilisateur',
        'updated-success' => 'Profil mis à jour avec succès.',
    ],

    'sessionHistory' => [
        'title' => 'Historique des sessions',
        'logged-in' => 'Connecté',
        'ip-address' => 'Adresse IP',
        'no-sessions' => 'Aucune session trouvée pour ce compte.',
    ]
];
