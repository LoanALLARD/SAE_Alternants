<?php

namespace App\core;

class Translation
{

    private $translations = [];

    public function __construct($lang = 'fr')
    {
        $file = __DIR__ . "/../config/languages/translation-$lang.json";
        if (file_exists($file)) {
            $this->translations = json_decode(file_get_contents($file), true);
        }
    }

    public function get($key)
    {
        return $this->translations[$key] ?? $key;
    }

}