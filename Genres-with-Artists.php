<?php
require_once("util-db.php");
require_once("model-Genres-with-Artists.php");

$pageTitle = "Genres-with-Artists";
include "view-header.php";
$Genres = selectGenresWithArtists($_GET['id']);
include "view-genres-with-artists.php";
include "view-footer.php";
?>
