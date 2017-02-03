<?php
/*
* single quoted string adalah cara paling simpel untuk penulisan karakter (string) di php

* ini adalah satu cara unutk menspesifikasikan karakter

* untuk penulisan dengan ini tambahkan backslash(\), berhubung ini untuk meng-escape

* maka untuk menuliskan kita membutnya menjadi double blackslash(\\)
*/

$string = 'contoh string single quoted';
echo "$string";    // hasil contoh string single quoted
echo "<br>";
var_dump($string);    // hasil string(27)"contoh string single quoted"