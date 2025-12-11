<?php

function redirect_to_lowercase() {
    $request_uri = $_SERVER['REQUEST_URI'];

    // Parse path and query separately
    $parsed_url = parse_url($request_uri);
    $path = $parsed_url['path'] ?? '';
    $query = isset($parsed_url['query']) ? '?' . $parsed_url['query'] : '';

    // Only process if it includes /market-research/
    if (stripos($path, '/market-research/') !== false) {

        // Lowercase the path only
        $lower_path = strtolower($path);

        // Only redirect if path case differs (ignore query string)
        if ($path !== $lower_path) {
            $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
            $host = $_SERVER['HTTP_HOST'];
            $new_url = $protocol . '://' . $host . $lower_path . $query;

            header("Location: $new_url", true, 301);
            exit();
        }
    }
}
