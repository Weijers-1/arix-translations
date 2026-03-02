<?php

return [
    'account-overview' => 'Descripción general de la cuenta',
    'twofactor-messagebox' => 'Su cuenta debe tener habilitada la autenticación de dos factores para poder continuar.',
    'apikey' => 'Llave API',
    'sshkey' => 'Llave SSH',

    'update-password' => [
        'current' => 'Contraseña actual',
        'new' => 'Nueva contraseña',
        'requirements' => 'Su nueva contraseña debe tener al menos 8 caracteres y ser exclusiva de este sitio web.',
        'confirm' => 'Confirmar su nueva contraseña',
        'update' => 'Actualiza contraseña',
    ],

    'update-email' => [
        'isUpdated' => 'Su correo electrónico principal ha sido actualizado',
        'update' => 'Actualizar correo electrónico',
        'email' => 'Email',
        'confirm' => 'Confirmar su nueva contraseña',
    ],

    'appearance' => [
        'title' => 'Apariencia',
        'lightDarkMode' => 'Modo Claro/Oscuro',
        'light' => 'Claro',
        'dark' => 'Oscuro',
        'language' => 'Idioma del panel',
        'panel-sounds' => 'Sonidos del panel',
        'on' => 'Encendido',
        'off' => 'Apagado',

        'privacy-mode' => 'Modo de privacidad',
    ],

    'twofactor' => [
        'title' => 'Autenticación de dos factores',
        'isEnabled' => 'La verificación en dos pasos está actualmente habilitada en su cuenta.',
        'isDisabled' => 'Actualmente no tienes habilitada la verificación en dos pasos en tu cuenta. Haga clic en el botón a continuación para comenzar a configurarlo.',
        'disable' => 'Deshabilitar la autenticación de dos factores',
        'enable' => 'Habilitar la autenticación de dos factores',
        
        'disable-dialog' => [
            'password' => 'Contraseña',
            'cancel' => 'Cancelar',
            'must-enter-password' => 'Debe ingresar la contraseña de su cuenta para continuar.',
            'disable' => 'Desactivar',
        ],

        'setup-dialog' => [
            'description' => 'Escanee el código QR de arriba utilizando la aplicación de autenticación de dos pasos de su elección. Luego, ingrese el código de 6 dígitos generado en el campo a continuación.',
            'account-password' => 'Contraseña de la cuenta',
            'qrcode-loading' => 'Esperando a que se cargue el código QR...',
            'enter-6digit-password' => 'Debe ingresar el código de 6 dígitos y su contraseña para continuar.',
            'enable' => 'Habilitar',
            'cancel' => 'Cancelar',
        ],
    ],

    'apiKey' => [
        'label' => 'Descripción',
        'description' => 'Una descripción de esta clave API.',
        'allowedIPs-label' => 'IPs permitidas',
        'allowedIPs-description' => 'Deje en blanco para permitir que cualquier dirección IP use esta clave API, de lo contrario, proporcione cada dirección IP en una nueva línea.',
        'createButton' => 'Crear',

        'your-keys' => 'Tu clave API',
        'store-save' => 'La clave API que has solicitado se muestra a continuación. Por favor, guárdala en un lugar seguro, no se mostrará de nuevo.',
        'close' => 'Cerrar',

        'delete-api-key' => 'Eliminar clave API',
        'delete-key' => 'Eliminar clave',
        'all-requests-invalidated-1' => 'Todas las solicitudes que utilizan la',
        'all-requests-invalidated-2' => 'clave serán invalidadas.',
        'loading' => 'Cargando...',
        'no-key-found' => 'No existen claves API para esta cuenta.',
        'last-used' => 'Último usado',
    ],

    'sshKey' => [
        'loading' => 'Cargando...',
        'no-key-found' => 'No existen claves SSH para esta cuenta.',
        'added-on' => 'Añadido el',

        'createForm' => [
            'key-name' => 'Nombre de la clave SSH',
            'public-key' => 'Clave pública',
            'public-key-desc' => 'Ingrese su clave SSH pública.',
            'save' => 'Guardar',
        ],

        'deleteForm' => [
            'delete-ssh-key' => 'Eliminar clave SSH',
            'delete-key' => 'Eliminar clave',
            'will-invalidate-1' => 'Eliminar la',
            'will-invalidate-2' => 'clave SSH invalidará su uso en el Panel.',
        ],
    ],

    'profile' => [
        'update-profile' => 'Actualizar perfil',
        'first-name' => 'Nombre',
        'last-name' => 'Apellido',
        'username' => 'Nombre de usuario',
        'updated-success' => 'Perfil actualizado con éxito.',
    ],

    'recoveryTokensDialog' => [
        'title' => 'Autenticación de dos pasos habilitada',
        'description' => 'Guarde los códigos a continuación en un lugar seguro. Si pierde el acceso a su teléfono, puede usar estos códigos de respaldo para iniciar sesión.',
        'alert' => 'Estos códigos no se mostrarán nuevamente.',
        'doneButton' => 'Listo',
    ],
];
