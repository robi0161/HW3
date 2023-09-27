<?php
require_once("util-db.php");
require_once("model-genres.php");

$pageTitle = "Genres";
include "view-header.php";
$Genres = selectGenres();
include "view-genres.php";
?>
