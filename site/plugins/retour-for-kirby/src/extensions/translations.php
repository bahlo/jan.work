<?php

use Kirby\Toolkit\Dir;
use Kirby\Toolkit\F;

$translations = [];
$root = dirname(__DIR__) . '/i18n';

foreach (Dir::files($root) as $file) {
    $locale = basename($file, '.json');
    if ($content = F::read($root . '/' . $file)) {
        $translations[$locale] = json_decode($content, true);
    }
}

return $translations;
