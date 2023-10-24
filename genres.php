<?php
require_once("util-db.php");
require_once("model-genres.php");

$pageTitle = "Genres";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']){
    case "Add":
      insertGenre($_POST['gName'], $_POST['gDesc']);
      break;
  }
}

$Genres = selectGenres();
include "view-genres.php";
?>
