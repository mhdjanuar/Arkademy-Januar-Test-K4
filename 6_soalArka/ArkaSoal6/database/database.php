<?php

/**
 *
 */
class Database
{
  private $host="localhost",
          $username="root",
          $password="",
          $db="dataprogramers";

  protected $con;

  public function __construct()
  {
    $this->con = mysqli_connect($this->host,$this->username,$this->password);
    mysqli_select_db($this->con,$this->db);
  }

  public function insert($table,$field){
      $columns = implode(" , ", array_keys($field));
      $values = implode(" ' , '",array_values($field));
      $insert = "INSERT INTO $table($columns) VALUES('$values')";
      mysqli_query($this->con,$insert);
    }

    public function findAll($table){
       //SELECT * FROM $table
       $select = "SELECT * FROM $table";
       $array = array();
       $query = mysqli_query($this->con,$select);
       while ($row = mysqli_fetch_assoc($query)) {
         $array[] = $row;
       }

       return $array;
    }

    public function findById($table,$where = ''){
      //SELECT * FROM $table WHERE $field = $id;
      $sql = "SELECT * FROM $table ";
      if ($where) {
        $sql .= " WHERE ".$where;
      }
      $array = array();
      $query = mysqli_query($this->con,$sql);
      while ($row = mysqli_fetch_assoc($query)) {
        $array[] = $row;
      }

      return $array;
      // echo $sql;
    }

    public function update($table,array $data, $where = ''){
      $sql = "UPDATE $table SET";
      foreach ($data as $field => $value) {
        $sql .= " $field = '$value' , ";
      }

      $sql = rtrim($sql, ' ,');
      if ($where) {
        $sql .= " WHERE " .$where;
      }

      mysqli_query($this->con,$sql);
      return true;
    }

    public function delete($table,$where = '')
    {
      $sql = "DELETE FROM $table ";
      if ($where) {
        $sql .= " WHERE " .$where;
      }
      mysqli_query($this->con,$sql);

      return true;
    }

}

// $db = new Database();
// $can = $db->findAll('candidates');
// foreach ($can as $item) {
//   echo $item['name'];
// }
