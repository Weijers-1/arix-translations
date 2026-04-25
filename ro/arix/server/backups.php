<?php

return[
    'backups' => 'Backup-uri',
    'manage-backups' => 'Administreaza Backup-uri',
    'create-backup' => 'Creaza backup',
    'have-been-allocated' => '{{current}} din {{max}} backup-uri au fost create pentru acest server.',

    'name' => 'Nume',
    'size' => 'Marime',
    'creation-date' => 'Data Crearii',
    'checksum' => 'Checksum',

    'failed' => 'A esuat',
    'continue' => 'Continua',

    'download' => 'Descarcare',
    'restore' => 'Restabilire',
    'lock' => 'Blocat',
    'unlock' => 'Deblocat',
    'delete' => 'Sterge',

    'limit-is-0' => 'Nu pot fi create backup-uri pentru acest server, deoarece limita este setata la 0.',
    'try-going-back' => 'Se pare ca am ramas fara backup-uri pentru a va arata, incercati sa reveniti la aceasta pagina curand.',
    'no-backups' => 'Se pare ca nu exista backup-uri pentru acest server.',
    'no-longer-protected' => 'Aceast backup nu va mai fi protejat de stergeri automate sau accidentale.',
    'your-server-will-be-stopped' => 'Server-ul tau va fi oprit. Nu veti putea controla starea de alimentare, sa accesati fisierele sau sa creati backup-uri pana la finalizare.',
    'delete-all-files' => 'Sterge toate fisierele inainte de a restabili un backup.',
    'permanent-operation' => 'Aceasta operatiune este permanenta. Backup-ul nu poate fi recuperat după ștergere.',

    'create' => [
        'title' => 'Creaza un backup',
        'backup-name' => 'Numele Backup-uli',
        'backup-name-description' => 'Daca este furnizat, numele backup-uli ar trebui sa fie afisat.',
        'ignored-files-directories' => 'Fisiere si Directoare Ignorate',
        'ignored-files-directories-description' => ' Introduceti fisierele sau folderele ignorate in timp ce generati aceast backup. Lasati necompletat pentru a utiliza continutul fisierului .pteroignore in radacina directorului server-ului, daca este prezent. Potrivirea wildcard a fisierelor si folderelor este acceptata in plus fata de anularea unei reguli prin prefixarea caii cu un semn de exclamare.',
        'locked' => 'Blocat',
        'locked-description' => 'Impiedica aceast backup sa fie sters pana cand este deblocat in mod explicit.',
        'start' => 'Se porneste backup-ul',
    ]
];
