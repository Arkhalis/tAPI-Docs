<ul class="nav navbar-nav">
	<?php echo("<li class=\"dropdown".($GLOBALS["gMode"] == "properties" ? " active" : "")."\">"); ?>
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">JSON <b class="caret"></b></a>
		<ul class="dropdown-menu">
			<?php echo($GLOBALS["gDoc"] == "modinfo" ? "<li class=\"active\">" : "<li>"); ?><a href="./?mode=properties&doc=modinfo">ModInfo</a></li>
			<?php echo($GLOBALS["gDoc"] == "item" ? "<li class=\"active\">" : "<li>"); ?><a href="./?mode=properties&doc=item">Items</a></li>
			<?php echo($GLOBALS["gDoc"] == "npc" ? "<li class=\"active\">" : "<li>"); ?><a href="./?mode=properties&doc=npc">NPCs</a></li>
			<?php echo($GLOBALS["gDoc"] == "tile" ? "<li class=\"active\">" : "<li>"); ?><a href="./?mode=properties&doc=tile">Tiles</a></li>
		</ul>
	</li>
</ul>