<?php
include("includes/config.php");
include("includes/functions.php");

$id = $_GET["id"];
$loadurl = "http://rss.thepiratebay.se/$id";
$loadurl = get_data("$loadurl");
$loadurl = remove_bloat($loadurl);
echo ($loadurl);
?>