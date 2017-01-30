<?php

function query_first($xPathObj, $xPathQuery)
{
	$domNodeList = $xPathObj->query($xPathQuery);
	if ($domNodeList == FALSE)
	{
		return "XPath query malformed.";
	}
	if ($domNodeList->length == 0)
	{
		return "XPath query returned empty list.";
	}
	
	$firstNode = $domNodeList[0];
	
	return query_childs($xPathObj, $firstNode);
}

function query_childs($xPathObj, $parentNode)
{
	if (!$parentNode->hasChildNodes())
	{
		return "No child nodes.";
	}
	
	$childNodes = $parentNode->childNodes;
	$result = "";
	foreach ($childNodes as $node)
	{
		$result .= $xPathObj->document->saveHTML($node);
	}
	return $result;
}

?>
