<?php

/**
 * Converts Visaland HTML template files to Laravel Blade views.
 * Run: php scripts/convert-template.php
 */

$basePath = dirname(__DIR__);
$templateDir = $basePath . '/public/visaland-html';
$outputDir = $basePath . '/resources/views/pages';

$pages = [
    'index',
    'about',
    'contact',
    'service',
    'service-details',
    'team',
    'team-details',
    'news',
    'news-grid',
    'news-details',
    'faq',
    'coaching',
    'coaching-details',
    'country',
    'country-details',
];

$routeMap = [
    'index.html' => "{{ route('home') }}",
    'index-2.html' => "{{ route('home') }}",
    'index-3.html' => "{{ route('home') }}",
    'index-4.html' => "{{ route('home') }}",
    'index-one-page.html' => "{{ route('home') }}",
    'index-two-page.html' => "{{ route('home') }}",
    'index-three-page.html' => "{{ route('home') }}",
    'index-four-page.html' => "{{ route('home') }}",
    'about.html' => "{{ route('about') }}",
    'contact.html' => "{{ route('contact') }}",
    'service.html' => "{{ route('service') }}",
    'service-details.html' => "{{ route('service.details') }}",
    'team.html' => "{{ route('team') }}",
    'team-details.html' => "{{ route('team.details.index') }}",
    'news.html' => "{{ route('news') }}",
    'news-grid.html' => "{{ route('news.grid') }}",
    'news-details.html' => "{{ route('news.details') }}",
    'faq.html' => "{{ route('faq') }}",
    'coaching.html' => "{{ route('coaching') }}",
    'coaching-details.html' => "{{ route('coaching.details') }}",
    'country.html' => "{{ route('country') }}",
    'country-details.html' => "{{ route('country.details') }}",
    '404.html' => "{{ url('/preview-404') }}",
];

if (! is_dir($outputDir)) {
    mkdir($outputDir, 0755, true);
}

function convertHtml(string $html, array $routeMap): string
{
    $html = preg_replace_callback(
        '/\b(href|src|data-background|data-src)=["\']assets\/([^"\']+)["\']/i',
        fn ($m) => sprintf('%s="{{ asset(\'visaland-html/assets/%s\') }}"', $m[1], $m[2]),
        $html
    );

    $html = preg_replace_callback(
        '/url\(\s*[\'"]assets\/([^\'"]+)[\'"]\s*\)/i',
        fn ($m) => sprintf('url(\'{{ asset(\'visaland-html/assets/%s\') }}\')', $m[1]),
        $html
    );

    $html = str_replace(
        'href="style.css"',
        'href="{{ asset(\'visaland-html/style.css\') }}"',
        $html
    );

    foreach ($routeMap as $file => $route) {
        $html = preg_replace(
            '/href=["\']' . preg_quote($file, '/') . '["\']/i',
            'href="' . $route . '"',
            $html
        );
    }

    return $html;
}

foreach ($pages as $page) {
    $source = $templateDir . '/' . $page . '.html';

    if (! file_exists($source)) {
        echo "Skipped (not found): {$page}.html\n";
        continue;
    }

    $html = file_get_contents($source);
    $blade = convertHtml($html, $routeMap);
    $output = $outputDir . '/' . $page . '.blade.php';

    file_put_contents($output, $blade);
    echo "Converted: {$page}.blade.php\n";
}

// 404 error page
$errorDir = $basePath . '/resources/views/errors';
if (! is_dir($errorDir)) {
    mkdir($errorDir, 0755, true);
}

$source404 = $templateDir . '/404.html';
if (file_exists($source404)) {
    $blade404 = convertHtml(file_get_contents($source404), $routeMap);
    file_put_contents($errorDir . '/404.blade.php', $blade404);
    echo "Converted: errors/404.blade.php\n";
}

echo "Done.\n";
