<?php
/**
* Perulangan While
*
* Syntax :
while(kondisi){
    # kode yang akan di ulangi
}

* kode didalam while akan di ulangi jika kondisi nya benar
*/
$a=1;
while ($a <= 10) {
    echo $a;
    $a++; //akan menambah nilai value
}

//hasil code : 12345678910
// Jika tidak ada $a++, maka akan menghasilkan infinite looping
// apakah operator ++ bisa diganti ?
// bisa
// tergantung kebutuhan, ada ++, -- , += , -=

?>
