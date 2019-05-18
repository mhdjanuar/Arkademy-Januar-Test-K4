<?php

function myCountChar($string,$kondisi)
{
  $pecah = str_split($string,1);

  $cari = array_count_values($pecah);

  echo "Akan diperoleh result : $cari[$kondisi]";

}


myCountChar("bootcamp","o");
echo "\n";
myCountChar("arkademy","k");
