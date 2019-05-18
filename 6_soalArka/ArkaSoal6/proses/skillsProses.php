<?php
require_once '../database/database.php';
$db = new Database();

if (isset($_POST['kirim'])) {
  $nama = $_POST['nameSkills'];
  $userid = $_POST['iduser'];

  $skills = array('name' => $nama, 'user_id' => $userid);
  $db->insert('skills',$skills);
  header('location:../view/index.php');
}
