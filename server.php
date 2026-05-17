<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 *
 * Modified for Railway deployment with PHP built-in server.
 * The built-in server runs from the project root (not public/),
 * so we must serve static files through PHP instead of returning false.
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? ''
);

// Check if the requested file exists in the public directory
$filePath = __DIR__ . '/public' . $uri;

// Resolve real path (follows symlinks like public/storage -> storage/app/public)
$realPath = realpath($filePath);

if ($uri !== '/' && $realPath && is_file($realPath)) {
    // Determine content type
    $mimeTypes = [
        'css'   => 'text/css',
        'js'    => 'application/javascript',
        'json'  => 'application/json',
        'png'   => 'image/png',
        'jpg'   => 'image/jpeg',
        'jpeg'  => 'image/jpeg',
        'gif'   => 'image/gif',
        'svg'   => 'image/svg+xml',
        'ico'   => 'image/x-icon',
        'webp'  => 'image/webp',
        'woff'  => 'font/woff',
        'woff2' => 'font/woff2',
        'ttf'   => 'font/ttf',
        'eot'   => 'application/vnd.ms-fontobject',
        'pdf'   => 'application/pdf',
        'mp4'   => 'video/mp4',
        'xml'   => 'application/xml',
        'txt'   => 'text/plain',
        'map'   => 'application/json',
    ];

    $ext = strtolower(pathinfo($realPath, PATHINFO_EXTENSION));
    $contentType = $mimeTypes[$ext] ?? (mime_content_type($realPath) ?: 'application/octet-stream');

    // Set cache headers for static assets
    if (in_array($ext, ['css', 'js', 'png', 'jpg', 'jpeg', 'gif', 'svg', 'ico', 'webp', 'woff', 'woff2', 'ttf', 'eot'])) {
        header('Cache-Control: public, max-age=604800'); // 7 days
    }

    header('Content-Type: ' . $contentType);
    header('Content-Length: ' . filesize($realPath));
    readfile($realPath);
    return;
}

// Route all other requests through Laravel
require_once __DIR__ . '/public/index.php';
