<?php
$get = $_GET['x'];
if (strpos($_GET['x'], '/language/') !== false)
{
    $loadurl = file_get_contents("home.html");
    echo ($loadurl);
    exit;
}
if ($get == "/settings" || $get == "/language" || $get == "/" || $get == "")
{
    $loadurl = file_get_contents("home.html");
    echo ($loadurl);
    exit;
}
include("includes/config.php");
include("includes/functions.php");
$loadurl = $get;
$loadurl = "https://$domaintoproxy$loadurl";
$loadurl = str_replace(" ", "%20", $loadurl);
$loadurl = get_data("$loadurl");
$loadurl = remove_bloat("$loadurl");
echo ($loadurl);
exit;
?>