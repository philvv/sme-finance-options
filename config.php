<?php

return [
    'production' => false,
    'baseUrl' => '',
    'quoteUrl' => 'https://partnerform.sorodo.com/mca/?cid=6378e4e7-6de9-4aa0-a103-5e5cbbd12d77&scid=3e1ec564-855a-45d2-a7e1-11ebbdf54154',
    'collections' => [],
    'active' => function ($page, $section) {
        $split = explode('/', $page->getPath());

        if (!isset($split[1])) return '';

        return str_contains($split[1], $section) ? 'active' : '';
    },
];
