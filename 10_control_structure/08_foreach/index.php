<?php
/**
* Perulangan foreach

* digunakan untuk perulangan array atau object
* ada dua syntax memakai foreach

* Syntax 1 :

* foreach($variable as $key => $value)
* {
    //kode yang akan di eksekusi
* }

* Syntax 2 :

* foreach($variable as $value)
* {
    //kode yang akan di eksekusi
* }

* perbedaannya hanya pada variable key guna untuk mengulangi semua index yang ada dalam array
* dan pada Syntax 2 tifak ada variable key
* item pada setiap index array bisa di akses melalui variable value
*/

$variable=[1, 5, 15, 25];

foreach ($variable as $key => $value) {
    echo $key . ' - ' . $value . '<br />';
}

//akan mencetak nilai
// 0 - 1
// 1 - 5
// 2 - 15
// 3 - 25

// sisi kiri merupakan index pada array
// sisi kanan adalah value yang terdapat pada tiap item array $variable

?>
