<?php
require_once("util-db.php");
require_once("model-stream.php");

$pageTitle = "Stream";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']){
    case "Add":
      if (insertStream($_POST['sName'])){
           echo '<div class="alert alert-success" role="alert">Streaming Service Added</div>';
      }else{
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }    
      break;
        
    case "Edit":
      if (updateStream($_POST['sName'], $_POST['stid'])){
           echo '<div class="alert alert-success" role="alert">Stream Edited</div>';
      }else{
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }    
      break;
   case "Delete":
      if(deleteStream($_POST['stid'])) {
        echo '<div class="alert alert-success" role="alert">Stream Deleted</div>';
      } else{
         echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}

$stream = selectStream();
include "view-stream.php";
include "view-footer.php";
?>
