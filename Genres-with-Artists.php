<?php
require_once("util-db.php");
require_once("model-Genres-with-Artists.php");

$pageTitle = "Artists-with-Genres";
include "view-header.php";
$Genres = selectGenres();
include "view-genres.php";
include "view-footer.php";
?>
