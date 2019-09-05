<?php

return [
    'production' => false,
    'baseUrl' => '',
    'quoteUrl' => 'https://www.capalona.co.uk/partner/smefinanceoptions',
    'collections' => [],
    'active' => function ($page, $section) {
        $split = explode('/', $page->getPath());

        if (!isset($split[1])) return '';

        return str_contains($split[1], $section) ? 'active' : '';
    },
];
