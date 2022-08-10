<?php
   function sql($sql){
      class MyDB extends SQLite3 {
         function __construct() {
            $this->open('data.db');
         }
      }
      $db = new MyDB();
      if(!$db) {
         echo $db->lastErrorMsg();
      } else {
         echo "Opened database successfully\n";
      }
      $response = $db->query($sql);
      $row = $response->fetchArray();
      $db->close();
      return $row;
   }
?>