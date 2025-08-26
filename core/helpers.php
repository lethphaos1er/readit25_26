<?php

namespace Core\Helpers;

function truncate(string $text, int $length = 100): string
{
    if (strlen($text) > $length) {
        $cut = substr($text, 0, $length);
        $cut = substr($cut, 0, strrpos($cut, ' '));
        return $cut . '...';
    } else {
        return $text;
    }
}

function slugify(string $text): string
{
    // Replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);

    // Transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // Remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // Trim
    $text = trim($text, '-');

    // Remove duplicate -
    $text = preg_replace('~-+~', '-', $text);

    // Lowercase
    $text = strtolower($text);

    if (empty($text)) {
        return 'n-a';
    }

    return $text;
}