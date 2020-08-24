<?php

namespace PhantomInstaller;

class PhantomBinary
{
    const BIN = 'C:\xampp\htdocs\sih2020jute\vendor\bin\phantomjs.exe';
    const DIR = 'C:\xampp\htdocs\sih2020jute\vendor\bin';

    public static function getBin() {
        return self::BIN;
    }

    public static function getDir() {
        return self::DIR;
    }
}
