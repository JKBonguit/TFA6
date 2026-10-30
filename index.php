<?php

// InfinityFree commonly serves the uploaded project root as public_html.
// Use Laravel when vendor/ is installed; otherwise use the included hosting fallback.
if (is_file(__DIR__.'/vendor/autoload.php')) {
    require __DIR__.'/public/index.php';
    exit;
}

require __DIR__.'/public/fallback.php';
