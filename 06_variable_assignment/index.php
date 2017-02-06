<?php

    /** Basic syntax Variable Assignment

    * Assignment adalah operator untuk menambah atau memasukan  nilai kedalam variable
    * PHp memiliki 3 jenis operator Assignment dan kita telah menggunakan 1 yaitu tanda = untuk mendefinisikan variable.
    */

    $a = 5;
    $b = 15;
    $c = 20;

    echo "\$a=$a, \$b=$b, \$c=$c";
    echo "<br />";

    // $a=20, $b=15, $c=5

    $a = $b = $c+5;
    echo "\$a=$a, \$b=$b, \$c=$c";

    // $a = 10, $b = 10, $c = 5

?>
