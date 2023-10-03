<?php
require_once("util-db.php");
require_once("model-songs-by-genre.php");

$pageTitle = "Songs by Genre";
include "view-header.php";
$Songs = selectSongsByGenre($_POST['sid']);
include "view-songs-by-genre.php";
include "view-footer.php";
?>
