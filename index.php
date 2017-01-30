<html>
<head>

<?php

include "php/functions.php";
include "php/functions-xpath.php";
include "php/functions-formatting.php";

header('Content-type: text/html; charset=utf-8');
error_reporting(E_ALL);
ini_set('display_errors', 1);

$keyquery = @$_GET["key"];
if($keyquery == NULL)
{
    $keyquery = "cgi-bin/discus/discus.pl";
}

$krepUri = KrepUrl($keyquery);
//printfln("URI: %s", $krepUri);

$xpath = loadUriAsXPath($krepUri);

$title = query_first($xpath, "/html/head/title");
printf("<title>%s</title>", $title);
?>
</head>
<body>
<?php
$listDiscussions = query_first($xpath,
    "/html/body/div[@id='obal']/div[@id='obsah']/div[@id='odsazeni']/div[@id='sloupecD']");
printfln("List: %s", $listDiscussions);

print "<hr />";

?>

</body>
</html>
