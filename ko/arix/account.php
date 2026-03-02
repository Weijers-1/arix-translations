<?php

return [
    'account-overview' => '계정 개요',
    'twofactor-messagebox' => '계속하려면 계정에 이중 인증을 활성화해야 합니다.',
    'apikey' => 'API 키',
    'sshkey' => 'SSH 키',

    'update-password' => [
        'current' => '현재 비밀번호',
        'new' => '새 비밀번호',
        'requirements' => '새 비밀번호는 적어도 8자 이상이어야 하며 이 웹사이트에 대해 고유해야 합니다.',
        'confirm' => '새 비밀번호 확인',
        'update' => '비밀번호 업데이트',
    ],

    'update-email' => [
        'isUpdated' => '기본 이메일이 업데이트되었습니다.',
        'update' => '이메일 업데이트',
        'email' => '이메일',
        'confirm' => '비밀번호 확인',
    ],

    'appearance' => [
        'title' => '외관',
        'lightDarkMode' => '라이트/다크 모드',
        'light' => '라이트',
        'dark' => '다크',
        'language' => '패널 언어',
        'panel-sounds' => '패널 사운드',
        'on' => '켜기',
        'off' => '끄기',

        'privacy-mode' => '개인 정보 보호 모드',
    ],

    'twofactor' => [
        'title' => '이중 인증',
        'isEnabled' => '현재 계정에서는 이중 확인이 활성화되어 있습니다.',
        'isDisabled' => '현재 계정에서는 이중 확인이 활성화되어 있지 않습니다. 아래 버튼을 클릭하여 설정을 시작하십시오.',
        'disable' => '이중 확인 해제',
        'enable' => '이중 확인 활성화',
        
        'disable-dialog' => [
            'password' => '비밀번호',
            'cancel' => '취소',
            'must-enter-password' => '계속하려면 계정 비밀번호를 입력해야 합니다.',
            'disable' => '비활성화',
        ],

        'setup-dialog' => [
            'description' => 'QR 코드를 사용하여 원하는 두 단계 인증 앱에서 코드를 생성한 후 아래 필드에 생성된 6 자리 코드를 입력하십시오.',
            'account-password' => '계정 비밀번호',
            'qrcode-loading' => 'QR 코드 로딩 대기 중...',
            'enter-6digit-password' => '계속하려면 6 자리 코드와 비밀번호를 입력해야 합니다.',
            'enable' => '활성화',
            'cancel' => '취소',
        ],
    ],

    'apiKey' => [
        'label' => '설명',
        'description' => '이 API 키에 대한 설명입니다.',
        'allowedIPs-label' => '허용된 IP 주소',
        'allowedIPs-description' => '이 API 키를 사용하는 모든 IP 주소를 허용하려면 비워 두십시오. 그렇지 않으면 각 IP 주소를 새로운 줄에 제공하십시오.',
        'createButton' => '생성',

        'your-keys' => '당신의 API 키',
        'store-save' => '요청한 API 키가 아래에 표시됩니다. 안전한 위치에 저장하십시오. 이것은 더 이상 표시되지 않습니다.',
        'close' => '닫기',

        'delete-api-key' => 'API 키 삭제',
        'delete-key' => '키 삭제',
        'all-requests-invalidated-1' => '사용 중인 모든 요청이',
        'all-requests-invalidated-2' => '키가 무효화됩니다.',
        'loading' => '로딩 중...',
        'no-key-found' => '이 계정에는 API 키가 없습니다.',
        'last-used' => '최종 사용',
    ],

    'sshKey' => [
        'loading' => '로딩 중...',
        'no-key-found' => '이 계정에는 SSH 키가 없습니다.',
        'added-on' => '추가된 날짜',

        'createForm' => [
            'key-name' => 'SSH 키 이름',
            'public-key' => '공개 키',
            'public-key-desc' => '공개 SSH 키를 입력하십시오.',
            'save' => '저장',
        ],

        'deleteForm' => [
            'delete-ssh-key' => 'SSH 키 삭제',
            'delete-key' => '키 삭제',
            'will-invalidate-1' => '제거하면',
            'will-invalidate-2' => 'SSH 키를 제거하면 사용이 무효화됩니다.',
        ],
    ],

    'profile' => [
        'update-profile' => '프로필 업데이트',
        'first-name' => '이름',
        'last-name' => '성',
        'username' => '사용자 이름',
        'updated-success' => '프로필이 성공적으로 업데이트되었습니다.',
    ],

    'recoveryTokensDialog' => [
        'title' => '이중 인증 활성화됨',
        'description' => '아래 코드를 안전한 위치에 저장하십시오. 전화기에 액세스를 잃으면 이 백업 코드를 사용하여 로그인할 수 있습니다.',
        'alert' => '이 코드는 더 이상 표시되지 않습니다.',
        'doneButton' => '완료',
    ],
];
