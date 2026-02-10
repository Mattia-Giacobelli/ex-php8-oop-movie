<?php

trait Language
{

    public static $language = 'Italiano';

    public function getLanguage()
    {
        return self::$language;
    }
}
