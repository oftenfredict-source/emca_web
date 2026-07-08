<?php

$files = array_merge(
    glob(__DIR__ . '/../resources/views/pages/*.blade.php'),
    glob(__DIR__ . '/../resources/views/errors/*.blade.php')
);

foreach ($files as $file) {
    $content = file_get_contents($file);
    $original = $content;

    if (str_ends_with($file, 'index.blade.php')) {
        $content = preg_replace(
            '/<!-- Header Top Start -->.*?<!-- Header Area Start -->/s',
            "@include('partials.header-top-home')\n\n        <!-- Header Area Start -->",
            $content,
            1
        );
    } elseif (str_contains($content, 'header-top-section-3')) {
        $content = preg_replace(
            '/<!-- Header Top Start -->.*?<!-- Header Area Start -->/s',
            "@include('partials.header-top')\n\n        <!-- Header Area Start -->",
            $content,
            1
        );
    }

    if ($content !== $original) {
        file_put_contents($file, $content);
        echo 'Updated: ' . basename($file) . PHP_EOL;
    }
}

echo "Done.\n";
