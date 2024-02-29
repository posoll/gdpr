<?php
include("includes/config.php");
include("includes/functions.php");
$scriptname = $_SERVER["SCRIPT_NAME"];
$loadurl    = $_SERVER["REQUEST_URI"];
$q          = $_GET['q'];
$q          = str_replace(" ", "", $q);
if ($q != "")
{
	$loadurl  = str_replace("$scriptname", "http://$domaintoproxy/s/", $loadurl);
	$loadurl  = search_curl($loadurl);
	$finalurl = str_replace("/0/99/", "/0/7/", $loadurl);
}
else
{
	$finalurl = "/recent";
	echo $finalurl;
}
@header("Location: $finalurl");
exit;
?>