<?php

return [
    'production' => false,
    'root' => __DIR__,
    'baseUrl' => getenv('GHPAGE') == true ? 'https://phprn.github.io/phpeste' : '',
    'event_name' => 'PHPeste',
    'event_ticket' => 'mailto:contato@phpeste.org',
    'event_ticket_cta' => '🤔 Dúvidas? Entre em contato! 📢',
    'event_location' => 'SEBRAE - Natal/RN',
    'event_period' => '6, 7 e 8 de outubro',
    'event_contact_email' => 'contato@phpeste.org',
    'event_facebook' => '',
    'event_twitter' => 'https://twitter.com/phpestene',
    'event_instagram' => 'https://www.instagram.com/phpeste/',
    'event_vimeo' => '',
    'categories' => [
        'diamond' => [
            'description' => 'Diamante',
        ],
        'silver' => [
            'description' => 'Prata',
        ],
        'bronze' => [
            'description' => 'Bronze',
        ],
        'support' => [
            'description' => 'Apoio',
        ],
    ],
    'collections' => [
        'organizers' => [
            'path' => 'organizers',
            'sort' => 'first_name',
        ],
        'sponsors' => [
            'path' => 'sponsors',
            'sort' => 'name',
        ],
        'speakers' => [
            'path' => 'speakers',
            'sort' => 'first_name',
        ],
        'schedules' => [
            'path' => '{collection}/{title}',
            'sort' => 'speaker',
        ]
    ],
    'selected' => function ($page, $section) {
        return $page->getPath() === $section || str_contains($page->getPath(), $section) ? 'active' : '';
    },
];
