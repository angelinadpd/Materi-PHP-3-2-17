<?php

/**
* break adalah perintah kepada web server untuk menghentikan perulangan diluar dari perencanaan
*break digunakan pada perulangan for, while, nested loop

* contoh
*/


for ($i=0; $i <10; $i++)
{
  for ($j=0; $j <10; $j++)
  {
    if ($i==4)
    {
      break 2;
    }
    echo $i;
  }
echo "<br />";

?>
