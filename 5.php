<?php

  function minmax($array)
  {
    $jumlah = array_search(min($array),$array,true);

      if ($jumlah == 0)
      {
        for ($i=0; $i < 1; $i++) {
            $hasil = array(min($array) , max($array));
          }
      }
      else
      {
        for ($i=0; $i < $jumlah; $i++) {
            unset($array[$i]);
            $hasil = array(min($array) , max($array));
          }
      }


    print_r($hasil);
  }


  //jalankan fungsi di bawah

  $data = ['h','g','a','b','d','f'];
  $dataLain = ['a','b','c','d'];

  minmax($data);
  echo "\n";
  minmax($dataLain);
