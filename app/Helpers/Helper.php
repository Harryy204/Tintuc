<?php
if (!function_exists('formatDate')) {
    function formatDate ($created_at, $str = 'd/m/Y') {
        $date = date_create($created_at);
        return date_format($date, $str);
    }
}

if (!function_exists('formatYoutubeLink')) {
    function formatYoutubeLink ($string) {
        return str_replace('https://www.youtube.com/embed/', '', $string);
    }
}