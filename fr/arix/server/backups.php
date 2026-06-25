<?php

return[
    'backups' => 'Sauvegardes',
    'manage-backups' => 'Gérer les sauvegardes',
    'create-backup' => 'Créer une sauvegarde',
    'have-been-allocated' => '{{current}} sur {{max}} sauvegardes ont été créées pour ce serveur.',

    'name' => 'Nom',
    'size' => 'Taille',
    'creation-date' => 'Date de création',
    'checksum' => 'Somme de contrôle',

    'failed' => 'Échec',
    'continue' => 'Continuer',

    'download' => 'Télécharger',
    'restore' => 'Restaurer',
    'lock' => 'Verrouiller',
    'unlock' => 'Déverrouiller',
    'delete' => 'Supprimer',

    'limit-is-0' => 'Les sauvegardes ne peuvent pas être créées pour ce serveur car la limite est définie à 0.',
    'try-going-back' => 'Il semble que nous n\'ayons plus de sauvegardes à afficher, essayez de revenir en arrière.',
    'no-backups' => 'Il semble qu\'aucune sauvegarde ne soit actuellement stockée pour ce serveur.',
    'no-longer-protected' => 'Cette sauvegarde ne sera plus protégée contre les suppressions automatiques ou accidentelles.',
    'your-server-will-be-stopped' => 'Votre serveur sera arrêté. Vous ne pourrez pas contrôler l\'état d\'alimentation, accéder au gestionnaire de fichiers ou créer des sauvegardes supplémentaires jusqu\'à la fin de l\'opération.',
    'delete-all-files' => 'Supprimer tous les fichiers avant de restaurer la sauvegarde.',
    'permanent-operation' => 'Il s\'agit d\'une opération permanente. La sauvegarde ne pourra pas être récupérée une fois supprimée.',

    'create' => [
        'title' => 'Créer une sauvegarde du serveur',
        'backup-name' => 'Nom de la sauvegarde',
        'backup-name-description' => 'Si fourni, le nom utilisé pour référencer cette sauvegarde.',
        'ignored-files-directories' => 'Fichiers et dossiers ignorés',
        'ignored-files-directories-description' => 'Entrez les fichiers ou dossiers à ignorer lors de la génération de cette sauvegarde. Laissez vide pour utiliser le fichier .pteroignore à la racine du serveur s\'il existe. Le support des caractères génériques est disponible, ainsi que l\'exclusion de règles en ajoutant un point d\'exclamation devant le chemin.',
        'locked' => 'Verrouillé',
        'locked-description' => 'Empêche la suppression de cette sauvegarde jusqu\'à son déverrouillage explicite.',
        'start' => 'Démarrer la sauvegarde',
    ]
];
