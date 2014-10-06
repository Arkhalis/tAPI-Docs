<?php

function echoProps($tag) {
	echo("<table class=\"table table-condensed\">");
		echo("
			<thead>
				<tr>
					<th>Name</th>
					<th>Type</th>
					<th>Info</th>
				</tr>
			</thead>
		");
		
		echo("<tbody>");
			foreach ($GLOBALS["props"] as $prop) {
				if (!array_key_exists("tags",$prop)) continue;
				if (!in_array($tag,$prop["tags"])) continue;
				
				echo("<tr class=\"property".(array_key_exists("drop",$prop) || array_key_exists("default",$prop) ? " myDropdown dropdown" : "").(array_key_exists("default",$prop) ? " myDefault" : "").(array_key_exists("warning",$prop) && $prop["warning"] ? " warning" : "")."\">");
					echo("<td>");
						if (is_array($prop["name"])) {
							$_first = true;
							foreach ($prop["name"] as $name) {
								if ($_first) $_first = false; else echo("<br />");
								echo("<code>".$name."</code>");
							}
						} else echo("<code>".$prop["name"]."</code>");
					echo("</td>");
					echo("<td>");
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
					echo("</td>");
				echo("</tr>");
			}
		echo("</tbody>");
	echo("</table>");
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
			tAPI &middot; Docs &middot; <?php echo($propsInfo["header"]); ?>
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
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
		<div class="container bs-docs-container" style="margin-top: 71px;">
			<div class="row">
				<div class="col-md-9" role="main">
					<div class="bs-docs-section">
						<h1 class="page-header" style="margin-top: 20px;"><?php echo($GLOBALS["propsInfo"]["header"]); ?></h1>
<?php
foreach ($GLOBALS["propsInfo"]["tags"] as $tag) {
	echo("<a id=\"tag-".$tag["tag"]."\"></a>");
	echo("<h3>".$tag["name"]."</h3>");
	if (array_key_exists("info",$tag)) echo("<p>".$tag["info"]."</p>");
	echo("<div class=\"table-responsive\" style=\"margin-left: 16px;\">");
		echoProps($tag["tag"]);
	echo("</div>");
}
?>
					</div>
				</div>
				<div class="col-md-3">
					<div class="bs-docs-sidebar hidden-print" style="position: fixed; top: 71px;" role="complementary">
						<ul class="nav bs-docs-sidenav">
<?php
foreach ($GLOBALS["propsInfo"]["tags"] as $tag) {
	echo("<li><a href=\"#tag-".$tag["tag"]."\">".$tag["name"]."</a></li>");
}
?>
						</ul>
						<a class="back-to-top" href="#top">
						Back to top
						</a>
					</div>
				</div>
			</div>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="bootstrap.min.js"></script>
		<script src="docs.min.js"></script>
		
		<script>
			$(document).ready(function(){
				$(".myDropdown").each(function(id){
					var this1 = this;
					$(this).find(".myButtonDropdown").click(function(){
						$(this1).find(".myDropdownTarget").toggle();
						$(this1).toggleClass("dropdown dropup");
					});
				});
			});
		</script>
	</body>
</html>