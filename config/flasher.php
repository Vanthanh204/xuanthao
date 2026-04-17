<?php

return [
    'default' => 'toastr',
    'main_script' => 'https://cdn.jsdelivr.net/npm/@flasher/flasher@1.3.2/dist/flasher.min.js',
    'styles' => [],
    'auto_render' => false,
    'auto_translate' => true,
    'flash_bag' => [
        'enabled' => true,
        'types' => [
            'success' => ['success'],
            'error' => ['error', 'danger'],
            'warning' => ['warning', 'alarm'],
            'info' => ['info', 'notice', 'alert'],
        ],
    ],
    'filter_criteria' => [],
];
