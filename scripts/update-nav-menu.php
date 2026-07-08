<?php

$files = array_merge(
    glob(__DIR__ . '/../resources/views/pages/*.blade.php'),
    glob(__DIR__ . '/../resources/views/errors/*.blade.php')
);

$pattern = '/<li class="has-dropdown">\s*<a href="\{\{ route\(\'news\'\) \}\}">\s*Pages\s*<i class="fas fa-angle-down"><\/i>\s*<\/a>\s*<ul class="submenu">.*?<li><a href="\{\{ url\(\'\/preview-404\'\) \}\}">404 Page<\/a><\/li>\s*<\/ul>\s*<\/li>/s';

$replacement = "@include('partials.nav-pages-solutions')";

foreach ($files as $file) {
    $content = file_get_contents($file);
    $updated = preg_replace($pattern, $replacement, $content, 1, $count);

    if ($count > 0) {
        file_put_contents($file, $updated);
        echo 'Updated: ' . basename($file) . PHP_EOL;
    }
}

echo "Done.\n";
