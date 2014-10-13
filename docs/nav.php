<ul class="nav navbar-nav">
	<?php echo("<li class=\"dropdown".($GLOBALS["gMode"] == "properties" ? " active" : "")."\">"); ?>
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">JSON <b class="caret"></b></a>
		<ul class="dropdown-menu">
			<?php echo($GLOBALS["jsonDoc"] == "modinfo" ? "<li class=\"active\">" : "<li>"); ?><a href="./?mode=properties&doc=modinfo">ModInfo</a></li>
			<?php echo($GLOBALS["jsonDoc"] == "buff" ? "<li class=\"active\">" : "<li>"); ?><a href="./?mode=properties&doc=buff">Buffs</a></li>
			<?php echo($GLOBALS["jsonDoc"] == "item" ? "<li class=\"active\">" : "<li>"); ?><a href="./?mode=properties&doc=item">Items</a></li>
			<?php echo($GLOBALS["jsonDoc"] == "npc" ? "<li class=\"active\">" : "<li>"); ?><a href="./?mode=properties&doc=npc">NPCs</a></li>
			<?php echo($GLOBALS["jsonDoc"] == "prefix" ? "<li class=\"active\">" : "<li>"); ?><a href="./?mode=properties&doc=prefix">Prefixes</a></li>
			<?php echo($GLOBALS["jsonDoc"] == "projectile" ? "<li class=\"active\">" : "<li>"); ?><a href="./?mode=properties&doc=projectile">Projectiles</a></li>
			<?php echo($GLOBALS["jsonDoc"] == "tile" ? "<li class=\"active\">" : "<li>"); ?><a href="./?mode=properties&doc=tile">Tiles</a></li>
			<?php echo($GLOBALS["jsonDoc"] == "wall" ? "<li class=\"active\">" : "<li>"); ?><a href="./?mode=properties&doc=wall">Walls</a></li>
		</ul>
	</li>
	<?php echo("<li class=\"dropdown".($GLOBALS["gMode"] == "hooks" ? " active" : "")."\">"); ?>
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">CS <b class="caret"></b></a>
		<ul class="dropdown-menu">
			<?php echo($GLOBALS["csDoc"] == "modbase" ? "<li class=\"active\">" : "<li>"); ?><a href="./?mode=hooks&doc=modbase">ModBase</a></li>
			<?php echo($GLOBALS["csDoc"] == "modbuff" ? "<li class=\"active\">" : "<li>"); ?><a href="./?mode=hooks&doc=modbuff">ModBuff</a></li>
			<?php echo($GLOBALS["csDoc"] == "modinterface" ? "<li class=\"active\">" : "<li>"); ?><a href="./?mode=hooks&doc=modinterface">ModInterface</a></li>
			<?php echo($GLOBALS["csDoc"] == "moditem" ? "<li class=\"active\">" : "<li>"); ?><a href="./?mode=hooks&doc=moditem">ModItem</a></li>
			<?php echo($GLOBALS["csDoc"] == "modnet" ? "<li class=\"active\">" : "<li>"); ?><a href="./?mode=hooks&doc=modnet">ModNet</a></li>
			<?php echo($GLOBALS["csDoc"] == "modnpc" ? "<li class=\"active\">" : "<li>"); ?><a href="./?mode=hooks&doc=modnpc">ModNPC</a></li>
			<?php echo($GLOBALS["csDoc"] == "modplayer" ? "<li class=\"active\">" : "<li>"); ?><a href="./?mode=hooks&doc=modplayer">ModPlayer</a></li>
			<?php echo($GLOBALS["csDoc"] == "modprefix" ? "<li class=\"active\">" : "<li>"); ?><a href="./?mode=hooks&doc=modprefix">ModPrefix</a></li>
			<?php echo($GLOBALS["csDoc"] == "modprojectile" ? "<li class=\"active\">" : "<li>"); ?><a href="./?mode=hooks&doc=modprojectile">ModProjectile</a></li>
			<?php echo($GLOBALS["csDoc"] == "modtile" ? "<li class=\"active\">" : "<li>"); ?><a href="./?mode=hooks&doc=modtile">ModTile</a></li>
			<?php echo($GLOBALS["csDoc"] == "modtiletype" ? "<li class=\"active\">" : "<li>"); ?><a href="./?mode=hooks&doc=modtiletype">ModTileType</a></li>
			<?php echo($GLOBALS["csDoc"] == "modworld" ? "<li class=\"active\">" : "<li>"); ?><a href="./?mode=hooks&doc=modworld">ModWorld</a></li>
		</ul>
	</li>
</ul>