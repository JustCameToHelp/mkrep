<?php

function KrepUrl($key)
{
    return "http://www.k-report.net/" . $key;
}

function readUri($s) {
    // create curl resource
    $ch = curl_init();
    if(!$ch) return NULL;
    // set url
    curl_setopt($ch, CURLOPT_URL, $s);
    //return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // $output contains the output string
    $output = curl_exec($ch);
    // close curl resource to free up system resources
    curl_close($ch);
    return $output ? $output : NULL;
}

function w1250toUtf8($strW1250)
{
    return iconv('windows-1250','utf-8',$strW1250);
}

function loadUriAsDomDocument($uri)
{
    $pageDataRaw = readUri($uri);
    $pageData = w1250toUtf8($pageDataRaw);

    $doc = new DOMDocument();
    @$doc->loadHTML($pageData);

    return $doc;
}

function loadUriAsXPath($uri)
{
    $doc = loadUriAsDomDocument($uri);
    return new DOMXpath($doc);
}

 ?>
