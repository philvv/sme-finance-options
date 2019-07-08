<?php

return [
    'production' => false,
    'baseUrl' => '',
    'collections' => [],
    'active' => function ($page, $section) {
        $split = explode('/', $page->getPath());

        if (!isset($split[1])) return '';

        return str_contains($split[1], $section) ? 'active' : '';
    },
];
