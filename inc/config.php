<?php
$siteName = "McDaniel's Auto Painting and Body Work";
$siteTwitter = "@mcdanielsqbw";
$siteKeywords = ",auto,body shop,auto painting";
$siteFacebookAdmin = "Facebook admin numeric ID";
// $siteHost = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI];
$siteHost = "http://" . $_SERVER[HTTP_HOST];
$pageURL = $siteHost . $_SERVER[REQUEST_URI];
$pageImage = $siteHost . "images/logo.png";
$pageDateModifiedFriendly = date("F d Y H:i:s",filemtime($pageURL));
// February 14 2006 13:22:46
$pageDateModified = date("Y-F-d\TH:i:s-5:00",filemtime($pageURL));
// 2013-09-17T05:59:00+01:00
?>
