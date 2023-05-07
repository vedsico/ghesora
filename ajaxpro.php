<?php


   require('db_config.php');


   $sql = "SELECT * FROM categories
         WHERE make_id LIKE '%".$_GET['id']."%'"; 


   $result = $mysqli->query($sql);


   $json = [];
   while($row = $result->fetch_assoc()){
        $json[$row['id']] = $row['model_name'];
   }


   echo json_encode($json);
?>