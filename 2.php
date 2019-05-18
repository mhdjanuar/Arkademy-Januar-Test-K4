<?php

function acak($panjang)
{

  $karakter = 'asdfghjklqwertyuiopzxcvbnm1234567890';

  $string = '';

  //untuk mengacak karakter yang akan di masukan ke dalam variabel string
  for ($i=0; $i < $panjang ; $i++) {
    $pos = rand(0, strlen($karakter)-1);

    $string .= $karakter{$pos};
  }

  //mengembalikan string
  return $string;
}

function cetak($cetak)
{
  for ($i=1; $i <= $cetak ; $i++) {
    $data[$i] = acak(32);
  }

  print_r($data);
}

//jalankan fungsi di bawah

cetak(3);

?>
