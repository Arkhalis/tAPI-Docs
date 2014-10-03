<?php

function genHookSnippet($hook, $definition) {
	$hReturn = array_key_exists("return", $hook) ? $hook["return"] : array();
	$hReturnType = array_key_exists("type", $hReturn) ? $hReturn["type"] : "void";
	$hReturnDefault = $hReturnType == "void" ? "" : $hReturn["default"];
	$hName = $hook["hook"];
	$hArgs = array_key_exists("args", $hook) ? $hook["args"] : array();

	$s = "";
	if (!$definition) $s .= "public override ";
	$s .= $hReturnType." ".$hName;

	$s .= "(";
	$first = true;
	foreach ($hArgs as $arg) {
		if ($first) $first = false;
		else $s .= ", ";
		$s .= htmlentities($arg["type"])." ".$arg["name"];
	}
	$s .= ")";

	if ($definition) {
		$s .= ";";
	} else {
		$s .= " {";
		if ($hReturnDefault != "") $s .= " return ".$hReturnDefault.";";
		$s .= " }";
	}
	
	return $s;
}

function echoHook($hook) {
	echo("<tr class=\"property  myDropdown dropdown".(array_key_exists("warning",$hook) && $hook["warning"] ? " warning" : "")."\">");
		echo("<td style=\"padding-top: 12px; padding-bottom: 8px;\">");
			echo("<code style=\"font-size: 18px;\">".$hook["hook"]."</code>");
			echo("<div class=\"propertyButtonBlock btn-group\">");
				echo("<button type=\"button\" class=\"myButtonDropdown btn btn-default\"><span class=\"caret\"></span></button>");
			echo("</div>");
			echo("<div class=\"myPropertyInner\">".$hook["text"]."</div>");

			echo("<div class=\"myDropdownTarget myCopy\">");
				echo("<div style=\"margin-bottom: 12px; clear: both;\">
					<button type=\"button\" class=\"myCopyButton btn btn-default btn-sm\" style=\"float: left;\">Copy</button>
					<div style=\"float: left; position: relative; z-index: -1; margin-left: -4px; margin-top: 4px;\"><code class=\"myCopyText\" style=\"padding: 7px 6px 6px 10px;\">".genHookSnippet($hook, false)."</code></div>
				</div>");

				if (array_key_exists("args", $hook)) {
					echo("<table class=\"table table-condensed\" style=\"margin-bottom: 8px;\">");
						echo("<thead>
							<tr style=\"font-weight: bold;\">
								<td>Type</td>
								<td>Name</td>
								<td>Info</td>
							</tr>
						</thead>");
						echo("<tbody>");
						foreach ($hook["args"] as $arg) {
							echo("<tr>");
								echo("<td><code>".htmlentities($arg["type"])."</code></td>");
								echo("<td><code>".$arg["name"]."</code></td>");
								echo("<td>".$arg["text"]."</td>");
							echo("</tr>");
						}
						echo("</tbody>");
					echo("</table>");
				}

				if (array_key_exists("return", $hook)) {
					$hReturn = $hook["return"];
					if ($hReturn["type"] != "void") {
						echo("<table class=\"table table-condensed\" style=\"margin-bottom: 8px;\">");
							echo("<tbody><tr>");
								echo("<td><span style=\"font-weight: bold;\">Returns: </span> <code>".$hReturn["type"]."</code></td>");
								echo("<td>".$hReturn["text"]."</td>");
							echo("</tr></tbody>");
						echo("</table>");
					}
				}

				/*if (array_key_exists("drop",$prop)) echo($prop["drop"]);
				if (array_key_exists("default",$prop)) {
					if (is_bool($prop["default"])) $prop["default"] = "<code>".($prop["default"] ? "true" : "false")."</code>";
					echo("<div class=\"alert alert-info\"><strong>Default:</strong> ".(is_int($prop["default"]) ? "<code>".$prop["default"]."</code>" : $prop["default"])."</div>");
				}*/
			echo("</div>");
		echo("</td>");


		/*echo("<td>");
			if (is_array($prop["type"])) {
				$_first = true;
				foreach ($prop["type"] as $type) {
					if ($_first) $_first = false; else echo("<br />");
					echo(htmlentities($type));
				}
			} else echo(htmlentities($prop["type"]));
		echo("</td>");
		echo("<td>");
			echo("<div class=\"propertyButtonBlock btn-group\">");
				if (array_key_exists("drop",$prop) || array_key_exists("default",$prop)) echo("<button type=\"button\" class=\"myButtonDropdown btn btn-default btn-xs\"><span class=\"caret\"></span></button>");
			echo("</div>");
				echo("<div class=\"myPropertyInner\">".$prop["text"]."</div>");
				if (array_key_exists("drop",$prop) || array_key_exists("default",$prop)) {
					echo("<div class=\"myDropdownTarget\">");
						if (array_key_exists("drop",$prop)) echo($prop["drop"]);
						if (array_key_exists("default",$prop)) {
							if (is_bool($prop["default"])) $prop["default"] = "<code>".($prop["default"] ? "true" : "false")."</code>";
							echo("<div class=\"alert alert-info\"><strong>Default:</strong> ".(is_int($prop["default"]) ? "<code>".$prop["default"]."</code>" : $prop["default"])."</div>");
						}
					echo("</div>");
				}
		echo("</td>");*/
	echo("</tr>");
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="tAPI, where all your dreams come true">
		<meta name="keywords" content="tAPI, Terraria, modding, mod, API, application programming interface, game">
		<meta name="author" content="tAPI Development Team">
		<title>
			tAPI &middot; Docs &middot; <?php echo($hooksInfo["header"]); ?>
		</title>
		<link href="bootstrap.min.css" rel="stylesheet">
		<link href="docs.min.css" rel="stylesheet">
		<link href="styles.css" rel="stylesheet">
		<!--[if lt IE 9]><script src="../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<!--<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
			<link rel="shortcut icon" href="../assets/ico/favicon.ico">-->
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="./">tAPI Docs</a>
				</div>
				<div class="collapse navbar-collapse">
<?php loadCached("nav.php","nav.php"); ?>
				</div>
			</div>
		</div>
		<div class="container bs-docs-container">
			<div class="row">
				<div class="col-md-12" role="main">
					<div class="bs-docs-section">
						<h1 class="page-header" style="margin-top: 20px;"><?php echo($GLOBALS["hooksInfo"]["header"]); ?></h1>
						<table class="table table-condensed">
							<tbody>
<?php
foreach ($GLOBALS["hooks"] as $hook) {
	echoHook($hook);
}
?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="bootstrap.min.js"></script>
		<script src="docs.min.js"></script>
		<script src="ZeroClipboard.min.js"></script>
		
		<script>
			$(document).ready(function(){
				$(".myDropdown").each(function(id){
					var this1 = this;
					$(this).find(".myButtonDropdown").click(function(){
						$(this1).find(".myDropdownTarget").toggle();
						$(this1).toggleClass("dropdown dropup");
					});
				});

				$(".myCopy").each(function(id){
					var this1 = this;
					var client = new ZeroClipboard($(this).find(".myCopyButton"));
					client.on("copy", function (event){
						var clipboard = event.clipboardData;
						clipboard.setData("text/plain", $(this1).find(".myCopyText").text());
					});
				});
			});

			var zc = new ZeroClipboard(document.getElementById("copy-button"));
		</script>
	</body>
</html>