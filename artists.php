<?php
require_once("util-db.php");
require_once("model-artists.php");

$pageTitle = "Artists";
include "view-header.php";
$Artists = selectAtrists();
include "view-artists.php";
include "view-footer.php";
?>
