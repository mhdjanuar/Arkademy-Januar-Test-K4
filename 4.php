<?php

function cetak_gambar($jumlah)
{
  if ($jumlah % 2) {
    for ($i=1; $i <= $jumlah ; $i++) {
      for ($j=1; $j <= $jumlah ; $j++) {
        if ($i == $j) {
          echo "* ";
        }
        elseif ($j == $jumlah-$i+1) {
          echo "* ";
        }
        else {
          echo "= ";
        }
      }

      echo "\n";
    }
  }
  else
  {
    echo "harus ganjil";
  }
}


cetak_gambar(7);
