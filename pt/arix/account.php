<?php

return [
    'account-overview' => 'Visão Geral da Conta',
    'twofactor-messagebox' => 'Sua conta deve ter autenticação de dois fatores ativada para continuar.',
    'apikey' => 'Chave de API',
    'sshkey' => 'Chave SSH',

    'update-password' => [
        'current' => 'Senha Atual',
        'new' => 'Nova Senha',
        'requirements' => 'Sua nova senha deve ter pelo menos 8 caracteres de comprimento e ser única para este site.',
        'confirm' => 'Confirmar Nova Senha',
        'update' => 'Atualizar Senha',
    ],

    'update-email' => [
        'isUpdated' => 'Seu email principal foi atualizado',
        'update' => 'Atualizar Email',
        'email' => 'Email',
        'confirm' => 'Confirmar Senha',
    ],

    'appearance' => [
        'title' => 'Aparência',
        'lightDarkMode' => 'Modo Claro/Escuro',
        'light' => 'Claro',
        'dark' => 'Escuro',
        'language' => 'Idioma do Painel',
        'panel-sounds' => 'Sons do Painel',
        'on' => 'Ligado',
        'off' => 'Desligado',

        'privacy-mode' => 'Modo de privacidade',
    ],

    'twofactor' => [
        'title' => 'Autenticação de Dois Fatores',
        'isEnabled' => 'A verificação em duas etapas está atualmente ativada em sua conta.',
        'isDisabled' => 'Você não tem atualmente a verificação em duas etapas ativada em sua conta. Clique no botão abaixo para começar a configurá-la.',
        'disable' => 'Desativar Verificação em Duas Etapas',
        'enable' => 'Ativar Verificação em Duas Etapas',
        
        'disable-dialog' => [
            'password' => 'Senha',
            'cancel' => 'Cancelar',
            'must-enter-password' => 'Você deve inserir a senha da sua conta para continuar.',
            'disable' => 'Desativar',
        ],

        'setup-dialog' => [
            'description' => 'Digitalize o código QR acima usando o aplicativo de autenticação de dois fatores de sua escolha. Em seguida, insira o código de 6 dígitos gerado no campo abaixo.',
            'account-password' => 'Senha da Conta',
            'qrcode-loading' => 'Aguardando o carregamento do código QR...',
            'enter-6digit-password' => 'Você deve inserir o código de 6 dígitos e sua senha para continuar.',
            'enable' => 'Ativar',
            'cancel' => 'Cancelar',
        ],
    ],

    'apiKey' => [
        'label' => 'Descrição',
        'description' => 'Uma descrição para esta chave de API.',
        'allowedIPs-label' => 'IPs Permitidos',
        'allowedIPs-description' => 'Deixe em branco para permitir que qualquer endereço IP use esta chave de API, caso contrário, forneça cada endereço IP em uma nova linha.',
        'createButton' => 'Criar',

        'your-keys' => 'Sua Chave de API',
        'store-save' => 'A chave de API solicitada é mostrada abaixo. Por favor, armazene-a em um local seguro, ela não será mostrada novamente.',
        'close' => 'Fechar',

        'delete-api-key' => 'Excluir Chave de API',
        'delete-key' => 'Excluir Chave',
        'all-requests-invalidated-1' => 'Todas as solicitações usando a',
        'all-requests-invalidated-2' => 'chave serão invalidadas.',
        'loading' => 'Carregando...',
        'no-key-found' => 'Nenhuma chave de API existe para esta conta.',
        'last-used' => 'Último uso',
    ],

    'sshKey' => [
        'loading' => 'Carregando...',
        'no-key-found' => 'Nenhuma Chave SSH existe para esta conta.',
        'added-on' => 'Adicionado em',

        'createForm' => [
            'key-name' => 'Nome da Chave SSH',
            'public-key' => 'Chave Pública',
            'public-key-desc' => 'Insira sua chave SSH pública.',
            'save' => 'Salvar',
        ],

        'deleteForm' => [
            'delete-ssh-key' => 'Excluir Chave SSH',
            'delete-key' => 'Excluir Chave',
            'will-invalidate-1' => 'Remover a',
            'will-invalidate-2' => 'chave SSH invalidará seu uso no Painel.',
        ],
    ],

    'profile' => [
        'update-profile' => 'Atualizar perfil',
        'first-name' => 'Nome',
        'last-name' => 'Sobrenome',
        'username' => 'Nome de usuário',
        'updated-success' => 'Perfil atualizado com sucesso.',
    ],

    'recoveryTokensDialog' => [
        'title' => 'Autenticação de Dois Fatores Ativada',
        'description' => 'Guarde os códigos abaixo em um local seguro. Se você perder o acesso ao seu telefone, poderá usar esses códigos de backup para fazer login.',
        'alert' => 'Esses códigos não serão mostrados novamente.',
        'doneButton' => 'Concluído',
    ],
];
