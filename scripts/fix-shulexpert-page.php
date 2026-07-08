<?php

$file = __DIR__ . '/../resources/views/pages/solutions/shulexpert.blade.php';
$lines = file($file);

$removeStart = null;
$removeEnd = null;

foreach ($lines as $i => $line) {
    if ($removeStart === null && str_contains($line, "@include('pages.solutions.partials.shulexpert-content')")) {
        $removeStart = $i + 3;
        continue;
    }

    if ($removeStart !== null && str_contains($line, 'How To Do Test Preparation')) {
        $removeEnd = $i + 3;
        break;
    }
}

if ($removeStart !== null && $removeEnd !== null) {
    array_splice($lines, $removeStart, $removeEnd - $removeStart + 1);
    file_put_contents($file, implode('', $lines));
    echo "Removed lines {$removeStart} to {$removeEnd}\n";
} else {
    echo "Failed: start={$removeStart} end={$removeEnd}\n";
}
