<?php
	include "php/functions.php";
	include "php/functions-xpath.php";

    //error_reporting(E_ALL);
    //ini_set('display_errors', 1);

	$startPage = "http://www.k-report.net/cgi-bin/discus/discus.pl";
	$xpath = loadUriAsXPath($startPage);

    $title = query_first($xpath, "/html/head/title");
    print $title;

	print "<br/>END.";
?>
