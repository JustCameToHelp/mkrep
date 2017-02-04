<?php

include "php/functions.php";
include "php/functions-xpath.php";
include "php/functions-formatting.php";

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
$listDiscussions = query_first($xpath,
    "/html/body/div[@id='obal']/div[@id='obsah']/div[@id='odsazeni']/div[@id='sloupecD']");
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1250" />
    <?php
    printf("<title>%s</title>", w1250toUtf8($title));
    ?>
</head>
<body>
    <?php
    printfln($listDiscussions);
    ?>
    <hr />
</body>
</html>
