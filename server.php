<?php 
   header('Content-Type: application/json; charset=utf-8');
   
   if($_POST['name'] && $_POST['phone']) {
      $data = [ "name" => $_POST['name'], "phone" => $_POST['phone'],'res'=>'good'];
      
      echo json_encode($data);

   } else {
      echo json_encode(['res'=>'falid']);
   }