<?php

return [
    'account-overview' => 'アカウント概要',
    'twofactor-messagebox' => '続行するには、アカウントで二要素認証を有効にする必要があります。',
    'apikey' => 'APIキー',
    'sshkey' => 'SSHキー',

    'update-password' => [
        'current' => '現在のパスワード',
        'new' => '新しいパスワード',
        'requirements' => '新しいパスワードは8文字以上で、このウェブサイトで一意のものである必要があります。',
        'confirm' => '新しいパスワードを確認',
        'update' => 'パスワードを更新',
    ],

    'update-email' => [
        'isUpdated' => 'プライマリメールアドレスが更新されました',
        'update' => 'メールを更新',
        'email' => 'メール',
        'confirm' => 'パスワードを確認',
    ],

    'appearance' => [
        'title' => '外観',
        'lightDarkMode' => 'ライト/ダークモード',
        'light' => 'ライト',
        'dark' => 'ダーク',
        'language' => 'パネル言語',
        'panel-sounds' => 'パネルサウンド',
        'on' => 'オン',
        'off' => 'オフ',
        'privacy-mode' => 'プライバシーモード',
    ],

    'twofactor' => [
        'title' => '二要素認証',
        'isEnabled' => '現在、アカウントで二段階認証が有効になっています。',
        'isDisabled' => '現在、アカウントで二段階認証が有効になっていません。下のボタンをクリックして設定を開始してください。',
        'disable' => '二段階を無効化',
        'enable' => '二段階を有効化',
        
        'disable-dialog' => [
            'password' => 'パスワード',
            'cancel' => 'キャンセル',
            'must-enter-password' => '続行するにはアカウントのパスワードを入力してください。',
            'disable' => '無効化',
        ],

        'setup-dialog' => [
            'description' => '選択した二段階認証アプリで上のQRコードをスキャンしてください。次に、生成された6桁のコードを下のフィールドに入力してください。',
            'account-password' => 'アカウントパスワード',
            'qrcode-loading' => 'QRコードの読み込みを待っています...',
            'enter-6digit-password' => '続行するには6桁のコードとパスワードを入力してください。',
            'enable' => '有効化',
            'cancel' => 'キャンセル',
        ],
    ],

    'apiKey' => [
        'label' => '説明',
        'description' => 'このAPIキーの説明。',
        'allowedIPs-label' => '許可されたIP',
        'allowedIPs-description' => 'このAPIキーを使用できるIPアドレスを制限しない場合は空白のままにしてください。それ以外の場合は、各IPアドレスを新しい行に入力してください。',
        'createButton' => '作成',

        'your-keys' => 'あなたのAPIキー',
        'store-save' => 'リクエストしたAPIキーが以下に表示されています。安全な場所に保存してください。再び表示されることはありません。',
        'close' => '閉じる',

        'delete-api-key' => 'APIキーを削除',
        'delete-key' => 'キーを削除',
        'all-requests-invalidated-1' => 'を使用するすべてのリクエストが',
        'all-requests-invalidated-2' => '無効になります。',
        'loading' => '読み込み中...',
        'no-key-found' => 'このアカウントにはAPIキーが存在しません。',
        'last-used' => '最終使用',
    ],

    'sshKey' => [
        'loading' => '読み込み中...',
        'no-key-found' => 'このアカウントにはSSHキーが存在しません。',
        'added-on' => '追加日',

        'createForm' => [
            'key-name' => 'SSHキー名',
            'public-key' => '公開鍵',
            'public-key-desc' => '公開SSHキーを入力してください。',
            'save' => '保存',
        ],

        'deleteForm' => [
            'delete-ssh-key' => 'SSHキーを削除',
            'delete-key' => 'キーを削除',
            'will-invalidate-1' => 'を削除すると、',
            'will-invalidate-2' => 'SSHキーのパネル全体での使用が無効になります。',
        ],
    ],

    'profile' => [
        'update-profile' => 'プロフィールを更新',
        'first-name' => '名',
        'last-name' => '姓',
        'username' => 'ユーザー名',
        'updated-success' => 'プロフィールが正常に更新されました。',
    ],

    'recoveryTokensDialog' => [
        'title' => '二段階認証が有効化されました',
        'description' => '以下のコードを安全な場所に保存してください。スマートフォンへのアクセスを失った場合、これらのバックアップコードでサインインできます。',
        'alert' => 'これらのコードは再び表示されません。',
        'doneButton' => '完了',
    ],
];