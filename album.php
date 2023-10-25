<?php
require_once("util-db.php");
require_once("model-album.php");

$pageTitle = "Album";
include "view-header.php";
$album = selectAlbum();
include "view-album.php";
include "view-footer.php";
?>
