<?php

define("LOCALMODE", false);
define("REMOTEURL", "https://raw.githubusercontent.com/Arkhalis/tAPIPublic/master/docs/");
define("LOCALURL", LOCALMODE ? (file_exists("localurl.txt") ? file_get_contents("localurl.txt") : "docs/") : "");

$GLOBALS["gMode"] = isset($_GET["mode"]) ? $_GET["mode"] : "properties";

$GLOBALS["jsonDoc"] = isset($_GET["doc"]) ? $_GET["doc"] : "modinfo";
if (strpos($GLOBALS["jsonDoc"],".") !== false) $GLOBALS["jsonDoc"] = "";
$GLOBALS["csDoc"] = $GLOBALS["gMode"] == "hooks" ? (isset($_GET["doc"]) ? $_GET["doc"] : "modbase") : "";
if (strpos($GLOBALS["csDoc"],".") !== false) $GLOBALS["csDoc"] = "";

global $maxCache, $cacheDate;
$maxCache = 60*60*24;
$cacheDate = file_exists("cache/_cache.dat") ? intval(file_get_contents("cache/_cache.dat")) : 0;

function deleteDir($dirPath) {
	if (!is_dir($dirPath)) throw new InvalidArgumentException("$dirPath must be a directory");
	if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') $dirPath .= '/';
	$files = glob($dirPath . '*', GLOB_MARK);
	foreach ($files as $file) {
		if (is_dir($file)) deleteDir($file);
		else unlink($file);
	}
	rmdir($dirPath);
}

function loadCached($url, $fname) {
	global $maxCache, $cacheDate;
	$url = (LOCALMODE ? LOCALURL : REMOTEURL).$url;

	if (LOCALMODE) {
		include($url);
	} else {
		if (time() < $cacheDate + $maxCache) {
			if (!file_exists("cache/".$fname)) file_put_contents("cache/".$fname,file_get_contents($url));
			include("cache/".$fname);
		} else {
			if (file_exists("cache")) deleteDir("cache");
			mkdir("cache");
			file_put_contents("cache/_cache.dat","".time());
			file_put_contents("cache/".$fname,file_get_contents($url));
			include("cache/".$fname);
		}
	}
}

switch ($GLOBALS["gMode"]) {
	case "clearcache": {
		if (file_exists("cache")) deleteDir("cache");
		mkdir("cache");
	} break;
	case "properties": {
		loadCached("props/".$GLOBALS["jsonDoc"].".php","prop_".$GLOBALS["jsonDoc"].".php");
		include("properties.php");
	} break;
	case "hooks": {
		loadCached("hooks/".$GLOBALS["csDoc"].".php","hook_".$GLOBALS["csDoc"].".php");
		include("hooks.php");
	} break;
}

?>