<?php

$source = file_get_contents(__DIR__ . '/../resources/views/pages/coaching-details.blade.php');
$outputDir = __DIR__ . '/../resources/views/pages/solutions';

if (! is_dir($outputDir)) {
    mkdir($outputDir, 0755, true);
}

$solutions = require __DIR__ . '/../config/solutions.php';

foreach ($solutions as $slug => $solution) {
    $content = $source;

    $content = str_replace('Coaching Deatails', $solution['title'], $content);
    $content = str_replace('Citizenship Test', $solution['title'], $content);
    $content = str_replace(
        '<title>Visaland - Immigration & Visa Consulting HTML Template</title>',
        '<title>' . $solution['title'] . ' - {{ config(\'company.legal_name\') }}</title>',
        $content
    );
    $content = str_replace(
        'content="Immigration and Visa Consulting Html Template"',
        'content="' . $solution['title'] . ' solution by {{ config(\'company.name\') }}"',
        $content
    );

    file_put_contents($outputDir . '/' . $slug . '.blade.php', $content);
    echo 'Created: solutions/' . $slug . '.blade.php' . PHP_EOL;
}

echo "Done.\n";
