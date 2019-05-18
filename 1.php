<?php

  function getBiodata()
  {

    //membuat class anonim
    $biodata = new stdClass();

    $biodata->name = "Muhammad Januar";
    $biodata->addres = "Jakarta Timur";
    $biodata->hobbies = array('Koding','Voli');
    $biodata->is_maried = false;
    $biodata->school =  array('HighSchool' => 'SMK N 24', 'Universitas' => 'None');
    $biodata->skills =  array(
                              array('name' => 'PHP', 'score' => 70 ),
                              array('name' => 'JAVA', 'score' => 50 )
                        );

    //mengembalikan data dalam bentuk json
    return json_encode($biodata);
  }


  //jalankan fungsi di bawah
  echo getBiodata();

?>
