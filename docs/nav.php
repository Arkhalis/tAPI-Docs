<ul class="nav navbar-nav">
	<?php echo("<li class=\"dropdown".($gMode == "properties" ? " active" : "")."\">"); ?>
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">JSON <b class="caret"></b></a>
		<ul class="dropdown-menu">
			<?php echo($gDoc == "modinfo" ? "<li class=\"active\">" : "<li>"); ?><a href="./?mode=properties&doc=modinfo">ModInfo</a></li>
			<?php echo($gDoc == "item" ? "<li class=\"active\">" : "<li>"); ?><a href="./?mode=properties&doc=item">Item</a></li>
			<?php echo($gDoc == "npc" ? "<li class=\"active\">" : "<li>"); ?><a href="./?mode=properties&doc=npc">NPCs</a></li>
		</ul>
	</li>
</ul>