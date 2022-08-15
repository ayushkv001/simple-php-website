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
      } 
      $response = $db->query($sql);
      $db->close();
      return $response;
   }
?>