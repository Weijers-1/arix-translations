<?php

return [
    'account-overview' => 'Account ka overview',
    'twofactor-messagebox' => 'Aage badhne ke liye aapke account par 2-factor authentication on hona chahiye.',
    'apikey' => 'API key',
    'sshkey' => 'SSH key',

    'update-password' => [
        'current' => 'Current password',
        'new' => 'Naya password',
        'requirements' => 'Aapka naya password kam se kam 8 characters ka ho aur is website ke liye unique ho.',
        'confirm' => 'Naya password confirm karo',
        'update' => 'Password update karo',
    ],

    'update-email' => [
        'isUpdated' => 'Aapka email successfuly update ho gaya.',
        'update' => 'Email update karo',
        'email' => 'Email',
        'confirm' => 'Password confirm karo',
    ],

    'appearance' => [
        'title' => 'Appearance',
        'lightDarkMode' => 'Light / dark mode',
        'light' => 'Light',
        'dark' => 'Dark',
        'language' => 'Panel language',
        'panel-sounds' => 'Panel sounds',
        'on' => 'On',
        'off' => 'Off',

        'privacy-mode' => 'Privacy Mode',
    ],

    'twofactor' => [
        'title' => 'Two-factor authentication',
        'isEnabled' => 'Aapke account par abhi 2-factor authentication on hai.',
        'isDisabled' => 'Aapke account par abhi 2-factor authentication on nahi hai. Niche diye gaye button se ise setup karo.',
        'disable' => 'Two-factor off karo',
        'enable' => 'Two-factor on karo',
        
        'disable-dialog' => [
            'password' => 'Password',
            'cancel' => 'Cancel',
            'must-enter-password' => 'Aage badhne ke liye aapko apne account ka password daalna hoga.',
            'disable' => 'Disable',
        ],

        'setup-dialog' => [
            'description' => 'Upar dikh raha QR code apni pasand ki 2-factor app se scan karo. Phir niche field me 6 digit ka code daalo.',
            'account-password' => 'Account password',
            'qrcode-loading' => 'QR code load hone ka wait ho raha hai...',
            'enter-6digit-password' => 'Aage badhne ke liye 6 digit ka code aur apna password daalo.',
            'enable' => 'Enable karo',
            'cancel' => 'Cancel',
        ],
    ],

    'apiKey' => [
        'label' => 'Description',
        'description' => 'Is API key ka description.',
        'allowedIPs-label' => 'Allowed IPs',
        'allowedIPs-description' => 'Kisi bhi IP ko is API key use karne dene ke liye khaali chhodo, warna har IP ko alag line par likho.',
        'createButton' => 'Create',

        'your-keys' => 'Aapki API keys',
        'store-save' => 'Aapki mangi hui API key niche dikh rahi hai. Isse kahin safe jagah par save kar lo, baad me dobara nahi dikhegi.',
        'close' => 'Close',

        'delete-api-key' => 'API key delete karo',
        'delete-key' => 'Key delete karo',
        'all-requests-invalidated-1' => 'Is key se chalne wali saari',
        'all-requests-invalidated-2' => 'requests invalid ho jayengi.',
        'loading' => 'Loading...',
        'no-key-found' => 'Is account ke liye koi API keys nahi mili.',
        'last-used' => 'Last used',
    ],

    'sshKey' => [
        'loading' => 'Loading...',
        'no-key-found' => 'Is account ke liye koi SSH keys nahi mili.',
        'added-on' => 'Added on',

        'createForm' => [
            'key-name' => 'SSH key ka naam',
            'public-key' => 'Public key',
            'public-key-desc' => 'Apni public SSH key yahan daalo.',
            'save' => 'Save',
        ],

        'deleteForm' => [
            'delete-ssh-key' => 'SSH key delete karo',
            'delete-key' => 'Key delete karo',
            'will-invalidate-1' => 'Is',
            'will-invalidate-2' => 'SSH key ko delete karne se iska use poori tarah se band ho jayega.',
        ],
    ],

    'profile' => [
        'update-profile' => 'Profile update karo',
        'first-name' => 'First Name',
        'last-name' => 'Last Name',
        'username' => 'Username',
        'updated-success' => 'Profile successfully updated.',
    ],

    'recoveryTokensDialog' => [
        'title' => 'Two-factor on hai',
        'description' => 'Niche diye gaye codes ko kahin safe jagah par likh lo. Agar aapka phone kho jaye to in backup codes se sign in kar sakte ho.',
        'alert' => 'Ye codes dobara nahi dikhaye jayenge.',
        'doneButton' => 'Done',
    ],
];
