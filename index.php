<?php
	include "php/functions.php";
	include "php/functions-xpath.php";

    //error_reporting(E_ALL);
    //ini_set('display_errors', 1);

    $keyquery = $_GET["key"];
    if($keyquery == NULL)
    {
        $keyquery = "cgi-bin/discus/discus.pl";
    }

	$krepUri = KrepUrl($keyquery);
    printfln("URI: %s", $krepUri);

	$xpath = loadUriAsXPath($krepUri);

    $title = query_first($xpath, "/html/head/title");
    printfln($title);

	print "<hr />";
?>
