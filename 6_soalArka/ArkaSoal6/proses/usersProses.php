<?php
require_once '../database/database.php';
$db = new Database();

if (isset($_POST['kirim'])) {
  $nama = $_POST['name'];

  $users = array('name' => $nama);
  $db->insert('users',$users);
  header('location:../view/index.php');
}
