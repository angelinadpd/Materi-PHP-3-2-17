<?php

    /**
    * fungsi ini sama seperti if else
    * tetapi else if bisa mengeksekusi lebih dari 1 kondisi
    * Syntax :

    if(kondisi){
        #code...
    }else if(kondisi){
        #code..
    }else{
        #code...
    }

    */

$a=8;

if($a>10){
    //code akan di eksekusi jika kondisi true
    echo "\$a lebih dari 10";
}else if($a==10){
    //code akan di eksekusi jika kondisi if pertama false
    //dan true pada if ke 2
    echo "\$a sama dengan 10";
}else{
    //code akan di eksekusi jika semua kondisi false
    echo "\$ kurang dari 10";
}

?>
