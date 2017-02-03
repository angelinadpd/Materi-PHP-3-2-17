<?php

/**
* Structur Switch
* switch berfungsi  untuk mencocokan variable dengan septiap case yang tertulis
* jika case cocok dengan variable, maka akan menjalan kan code di dalam case
* fungsi code break di dalam case adaah untuk menghentikan pengecekan
*
* Syntax :
    switch(var){
        case kondisi1:
            #code di eksekusi jika var=kondisi1;
            break;
        case kondisi2:
            #code di eksekusi jika var=kondisi2;
            break;
        default:
            code di eksekusi jika tidak ada yang sama dengan case;
    }

*/
$a=2;

switch ($a) {
    case 2:
        //di eksekusi jika a = 2
        echo " a = 2 ";
        break;
    case 4:
        //di eksekusi jika a = 4
        echo "a = 4";
        break;

    default:
        //dieksekusi jika tidk sama dengan semua case
        echo "bukan 4 dan bukan 2";
        break;
}


?>
