<?php

return [
    'account-overview' => 'Paskyros apžvalga',
    'twofactor-messagebox' => 'Norėdami tęsti, savo paskyroje turite įjungti dviejų veiksnių autentifikavimą.',
    'apikey' => 'API raktas',
    'sshkey' => 'SSH raktas',

    'update-password' => [
        'current' => 'Dabartinis slaptažodis',
        'new' => 'Naujas slaptažodis',
        'requirements' => 'Jūsų naujas slaptažodis turi būti bent 8 simbolių ilgio ir unikalus šiai svetainei.',
        'confirm' => 'Patvirtinkite naują slaptažodį',
        'update' => 'Atnaujinti slaptažodį',
    ],

    'update-email' => [
        'isUpdated' => 'Jūsų pagrindinis el. paštas buvo atnaujintas',
        'update' => 'Atnaujinti el. paštą',
        'email' => 'El. paštas',
        'confirm' => 'Patvirtinkite slaptažodį',
    ],

    'appearance' => [
        'title' => 'Išvaizda',
        'lightDarkMode' => 'Šviesus/tamsus režimas',
        'light' => 'Šviesus',
        'dark' => 'Tamsus',
        'language' => 'Sąsajos kalba',
        'panel-sounds' => 'Garso efektai',
        'on' => 'Įjungta',
        'off' => 'Išjungta',
    ],

    'twofactor' => [
        'title' => 'Dviejų veiksnių autentifikavimas',
        'isEnabled' => 'Jūsų paskyroje šiuo metu įjungtas dviejų veiksnių autentifikavimas.',
        'isDisabled' => 'Šiuo metu nesate įjungę dviejų veiksnių autentifikavimo savo paskyroje. Spustelėkite mygtuką žemiau, kad pradėtumėte jo konfigūravimą.',
        'disable' => 'Išjungti dviejų veiksnių autentifikavimą',
        'enable' => 'Įjungti dviejų veiksnių autentifikavimą',
        
        'disable-dialog' => [
            'password' => 'Slaptažodis',
            'cancel' => 'Atšaukti',
            'must-enter-password' => 'Norėdami tęsti, turite įvesti savo paskyros slaptažodį.',
            'disable' => 'Išjungti',
        ],

        'setup-dialog' => [
            'description' => 'Nuskaitykite aukščiau esantį QR kodą naudodami savo pasirinktą dviejų veiksnių autentifikavimo programėlę. Tada įveskite sugeneruotą 6 skaitmenų kodą žemiau esančiame lauke.',
            'account-password' => 'Paskyros slaptažodis',
            'qrcode-loading' => 'Laukiama, kol bus įkeltas QR kodas...',
            'enter-6digit-password' => 'Norėdami tęsti, turite įvesti 6 skaitmenų kodą ir savo slaptažodį.',
            'enable' => 'Įjungti',
            'cancel' => 'Atšaukti',
        ],
    ],

    'apiKey' => [
        'label' => 'Aprašymas',
        'description' => 'Šio API rakto aprašymas.',
        'allowedIPs-label' => 'Leidžiami IP adresai',
        'allowedIPs-description' => 'Palikite tuščią, kad leisti bet kuriam IP adresui naudoti šį API raktą, arba nurodykite kiekvieną IP adresą naujoje eilutėje.',
        'createButton' => 'Sukurti',

        'your-keys' => 'Jūsų API raktai',
        'store-save' => 'Jūsų užklaustas API raktas pateikiamas žemiau. Išsaugokite jį saugioje vietoje, jis daugiau nebus rodomas.',
        'close' => 'Uždaryti',

        'delete-api-key' => 'Ištrinti API raktą',
        'delete-key' => 'Ištrinti raktą',
        'all-requests-invalidated-1' => 'Visi užklausimai, naudojantys',
        'all-requests-invalidated-2' => 'raktą, bus panaikinti.',
        'loading' => 'Įkeliama...',
        'no-key-found' => 'Šiai paskyrai nėra sukurta jokių API raktų.',
        'last-used' => 'Paskutinį kartą naudotas',
    ],

    'sshKey' => [
        'loading' => 'Įkeliama...',
        'no-key-found' => 'Šiai paskyrai nėra SSH raktų.',
        'added-on' => 'Pridėtas',

        'createForm' => [
            'key-name' => 'SSH rakto pavadinimas',
            'public-key' => 'Viešasis raktas',
            'public-key-desc' => 'Įveskite savo viešąjį SSH raktą.',
            'save' => 'Išsaugoti',
        ],

        'deleteForm' => [
            'delete-ssh-key' => 'Ištrinti SSH raktą',
            'delete-key' => 'Ištrinti raktą',
            'will-invalidate-1' => 'Pašalinus',
            'will-invalidate-2' => 'SSH raktą, jo naudojimas valdymo skydelyje taps nebegaliojantis.',
        ],
    ],

    'profile' => [
        'update-profile' => 'Atnaujinti profilį',
        'first-name' => 'Vardas',
        'last-name' => 'Pavardė',
        'username' => 'Vartotojo vardas',
        'updated-success' => 'Profilis sėkmingai atnaujintas.',
    ],

    'recoveryTokensDialog' => [
        'title' => 'Dviejų veiksnių autentifikavimas įjungtas',
        'description' => 'Išsaugokite žemiau esančius kodus saugioje vietoje. Jei neteksite prieigos prie telefono, galėsite naudoti šiuos atsarginius kodus prisijungimui.',
        'alert' => 'Šie kodai daugiau niekada nebus rodomi.',
        'doneButton' => 'Atlikta',
    ],
];