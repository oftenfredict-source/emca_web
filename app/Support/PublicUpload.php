<?php

namespace App\Support;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;

class PublicUpload
{
    /**
     * Write a file into every web-visible public root we know about.
     * Shared hosts often separate Laravel public/ from public_html.
     */
    public static function storeUploadedFile(UploadedFile $file, string $relativeDirectory, string $filename): string
    {
        $relativeDirectory = trim(str_replace('\\', '/', $relativeDirectory), '/');
        $relativePath = $relativeDirectory.'/'.$filename;
        $contents = file_get_contents($file->getRealPath());

        if ($contents === false) {
            throw new \RuntimeException('Unable to read uploaded file contents.');
        }

        $written = false;

        foreach (self::targetDirectories($relativeDirectory) as $directory) {
            if (! is_dir($directory) && ! @mkdir($directory, 0755, true) && ! is_dir($directory)) {
                Log::warning('Could not create public upload directory.', ['directory' => $directory]);

                continue;
            }

            $fullPath = rtrim($directory, '/\\').DIRECTORY_SEPARATOR.$filename;

            if (@file_put_contents($fullPath, $contents) === false) {
                Log::warning('Could not write public upload file.', ['path' => $fullPath]);

                continue;
            }

            @chmod($fullPath, 0644);
            $written = true;
        }

        if (! $written) {
            throw new \RuntimeException('Unable to store uploaded file in a public web directory.');
        }

        return $relativePath;
    }

    /**
     * Delete a relative public path from all known public roots.
     */
    public static function delete(string $relativePath): void
    {
        $relativePath = ltrim(str_replace('\\', '/', $relativePath), '/');
        $directory = trim(dirname($relativePath), '.');
        $filename = basename($relativePath);

        foreach (self::targetDirectories($directory === '\\' ? '' : $directory) as $dir) {
            $fullPath = rtrim($dir, '/\\').DIRECTORY_SEPARATOR.$filename;

            if (is_file($fullPath)) {
                @unlink($fullPath);
            }
        }
    }

    /**
     * Copy local public/images/team files into the configured web root.
     *
     * @return int number of files copied
     */
    public static function syncDirectory(string $relativeDirectory = 'images/team'): int
    {
        $relativeDirectory = trim(str_replace('\\', '/', $relativeDirectory), '/');
        $source = public_path($relativeDirectory);

        if (! is_dir($source)) {
            return 0;
        }

        $copied = 0;
        $targets = collect(self::targetDirectories($relativeDirectory))
            ->reject(fn (string $dir) => realpath($dir) && realpath($source) && realpath($dir) === realpath($source))
            ->values();

        foreach (scandir($source) ?: [] as $file) {
            if ($file === '.' || $file === '..' || $file === '.gitkeep') {
                continue;
            }

            $from = $source.DIRECTORY_SEPARATOR.$file;

            if (! is_file($from)) {
                continue;
            }

            foreach ($targets as $dir) {
                if (! is_dir($dir) && ! @mkdir($dir, 0755, true) && ! is_dir($dir)) {
                    continue;
                }

                $to = rtrim($dir, '/\\').DIRECTORY_SEPARATOR.$file;

                if (@copy($from, $to)) {
                    @chmod($to, 0644);
                    $copied++;
                }
            }
        }

        return $copied;
    }

    /**
     * @return list<string>
     */
    public static function targetDirectories(string $relativeDirectory): array
    {
        $relativeDirectory = trim(str_replace('\\', '/', $relativeDirectory), '/');
        $roots = [];

        $configured = env('PUBLIC_UPLOAD_ROOT');
        if (filled($configured)) {
            $roots[] = rtrim(str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $configured), '/\\');
        }

        $documentRoot = $_SERVER['DOCUMENT_ROOT'] ?? null;
        if (filled($documentRoot) && is_dir($documentRoot)) {
            $roots[] = rtrim(str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $documentRoot), '/\\');
        }

        foreach ([
            base_path('../public_html'),
            base_path('../../public_html'),
            base_path('public_html'),
        ] as $guess) {
            if (is_dir($guess)) {
                $roots[] = rtrim(str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $guess), '/\\');
            }
        }

        $roots[] = rtrim(public_path(), '/\\');

        return collect($roots)
            ->filter()
            ->unique()
            ->map(function (string $root) use ($relativeDirectory) {
                return $relativeDirectory === ''
                    ? $root
                    : $root.DIRECTORY_SEPARATOR.str_replace('/', DIRECTORY_SEPARATOR, $relativeDirectory);
            })
            ->values()
            ->all();
    }
}
