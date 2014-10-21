<?php

$GLOBALS["propsInfo"] = array(
	"header" => "Tiles",
	"info" => "Configuration for a tile.",
	"tags" => array(
		array(
			"tag" => "internal",
			"name" => "Internal"
		),
		array(
			"tag" => "info",
			"name" => "Informative"
		),
		array(
			"tag" => "stats",
			"name" => "Stats"
		),
		array(
			"tag" => "looks",
			"name" => "Appearance"
		),
		array(
			"tag" => "interface",
			"name" => "Interface"
		),
		array(
			"tag" => "gplay",
			"name" => "Gameplay"
		),
		array(
			"tag" => "temp",
			"name" => "Temporary"
		)
	)
);

$GLOBALS["props"] = array(
	array(
		"tags" => array("temp"),
		"name" => "name",
		"type" => "string",
		"text" => "The unique tile name in the mod.",
		"default" => "The tile's JSON file name without extension",
	),
	array(
		"tags" => array("temp"),
		"name" => "displayName",
		"type" => "string",
		"text" => "The tile's displayed name. (Map, etc.)"
	),	
	array(
		"tags" => array("temp"),
		"name" => "texture",
		"type" => "string",
		"text" => "The texture path for the tile.",
		"default" => "The tile's JSON path, without extension"
	),
	array(
		"tags" => array("temp"),
		"name" => "code",
		"type" => "string",
		"text" => "Full type name for the per-tile-type <code>ModTileType</code>-extending class to be used for this tile.",
		"default" => "<code>{internalName}.Tiles.{filename}</code>"
	),
	array(
		"tags" => array("temp"),
		"name" => "instanceCode",
		"type" => "string",
		"text" => "Full type name for the per-tile-instance <code>ModTile</code>-extending class to be used for this tile.",
		"default" => "No default, you must specify this in your JSON.",
		"drop" => "
			<div class=\"alert alert-info\">The difference between this and <code>code</code> is this is a new class for every tile placed, while 
			code is one class for the entire tile type.</div>
		"		
	),
	array(
		"tags" => array("temp"),
		"name" => "width",
		"type" => "int",
		"text" => "The amount of tiles on the X axis this tile takes up.",
		"drop" => "
			<div class=\"alert alert-info\">For example, a chest has a width of 2.</div>
		"
	),
	array(
		"tags" => array("temp"),
		"name" => "height",
		"type" => "int",
		"text" => "The amount of tiles on the Y axis this tile takes up.",
		"drop" => "
			<div class=\"alert alert-info\">For example, a chest has a height of 2.</div>
		"
	),
	array(
		"tags" => array("temp"),
		"name" => "size",
		"type" => "int[2]",
		"text" => "The amount of tiles on the X and Y axis this tile takes up.",
		"drop" => "
			<div class=\"alert alert-info\">For example, a chest has a size of <code>[2, 2]</code>.</div>
		"
	),
	array(
		"tags" => array("temp"),
		"name" => "frameWidth",
		"type" => "int",
		"text" => "The tile's per-tile frame width.",
		"default" => "16"
	),
	array(
		"tags" => array("temp"),
		"name" => "frameHeight",
		"type" => "int",
		"text" => "The tile's per-tile frame height.",
		"default" => "16"
	),
	array(
		"tags" => array("temp"),
		"name" => "drawOffsetY",
		"type" => "int",
		"text" => "The draw offset of the tile on the Y axis. (Negative moves up, Positive moves down)",
		"default" => "0",
		"drop" => "
			<div class=\"alert alert-info\">Can be used to make tiles embedded in the tile below or above it.</div>
		"
	),
	array(
		"tags" => array("temp"),
		"name" => "sheetYAligned",
		"type" => "bool",
		"text" => "Wether the tile's spritesheet has frames along the X or Y axis.",
		"default" => "false",
		"drop" => "
			<div class=\"alert alert-info\">This is mainly used for placeStyle as well as animation.</div>
		"	
	),
	array(
		"tags" => array("temp"),
		"name" => "checkWalls",
		"type" => "bool",
		"text" => "Wether or not this tile should check tile placement if walls behind it are broken.",
		"default" => "false, true if the tile has the \"wall\" placement condition."
	),
	array(
		"tags" => array("temp"),
		"name" => "solid",
		"type" => "bool",
		"text" => "Wether or not a tile has collision.",
		"default" => "true"
	),
	array(
		"tags" => array("temp"),
		"name" => "solidTop",
		"type" => "bool",
		"text" => "Wether or not the player can walk on this tile if it's nonsolid. (such as tables, bookcases, etc.)",
		"default" => "false",
		"drop" => "
			<div class=\"alert alert-info\">Note: Having this false, but <code>solid</code> true, does not result in a mostly solid tile with a nonsolid top.
			<code>solid</code> accounts for the entire tile. To make a table-like tile, have <code>solid</code> be false and <code>solidTop</code> be true.</div>
		"	
	),
	array(
		"tags" => array("temp"),
		"name" => "frameImportant",
		"type" => "bool",
		"text" => "Wether or not to save the tile's frames.",
		"default" => "false",
		"drop" => "
			<div class=\"alert alert-info\">This should be true on any tile that is not 1x1 or a tile that has anything frame-dependent.</div>
		"		
	),
	array(
		"tags" => array("temp"),
		"name" => "directional",
		"type" => "bool",
		"text" => "Wether or not this tile should place the first or second frame based on player direction.",
		"default" => "false",
		"drop" => "
			<div class=\"alert alert-info\">
			This is mainly used for stuff like furniture, beds, etc..
			</div>
		"		
	),		
	array(
		"tags" => array("temp"),
		"name" => "placementFrameX",
		"type" => "int",
		"text" => "The specific X frame of the tile to use when it is placed.",
		"default" => "0",
		"drop" => "
			<div class=\"alert alert-info\">
			Note: This is only used if you have <code>frameImportant</code> set to true.
			This is the frame count, not actual pixels.
			</div>
		"	
	),
	array(
		"tags" => array("temp"),
		"name" => "placementFrameY",
		"type" => "int",
		"text" => "The specific Y frame of the tile to use when it is placed.",
		"default" => "0",
		"drop" => "
			<div class=\"alert alert-info\">
			Note: This is only used if you have <code>frameImportant</code> set to true.
			This is the frame count, not actual pixels.
			</div>
		"
	),
	array(
		"tags" => array("temp"),
		"name" => "placementConditions",
		"type" => "string or string[]",
		"text" => "A string or string[] of preset conditions used to determine of a tile can be placed or stay in place.",
		"default" => "<code>placeTouchingSolid</code> is the tile is 1x1, <code>flatGroundSolid</code> if not.",
		"drop" => "
			<div class=\"alert alert-info\">
			Note: A string with 'Solid' at the end only allows placement if every tile it checks has <code>solid</code> as true.<br>
			The strings accepted as placement conditions are:<br>
			<dl>
			<dt><code>air</code></dt><dd><b>-</b> can be placed anywhere, always.</dd>
			<dt><code>wall</code></dt><dd><b>-</b> can be placed if the tile has walls behind all of it.</dd>
			<dt><code>placeTouching</code> or <code>placeTouchingSolid</code></dt><dd><b>-</b> can be placed if the tile has at least one tile or wall touching it.</dd>
			<dt><code>side</code></dt><dd><b>-</b> can be placed if the tile has tiles all along one of it's sides.</dd>
			<dt><code>flatGround</code> or <code>flatGroundSolid</code></dt><dd><b>-</b> can be placed if the tile has tiles all along it's bottom side.</dd>
			<dt><code>flatCeiling</code> or <code>flatCeilingSolid</code></dt><dd><b>-</b> can be placed if the tile has tiles all along it's top side.</dd>
			</dl>
			</div>
		"
	),
	array(
		"tags" => array("temp"),
		"name" => "placementOrigin",
		"type" => "int[2]",
		"text" => "The tile within the tile that is considered the placement tile. (The tile the mouse is over when placing)",
		"default" => "[0, 0]"
	),
	array(
		"tags" => array("temp"),
		"name" => "breaksFast",
		"type" => "bool",
		"text" => "Wether or not a tile breaks immediately when hit.",
		"default" => "false"
	),
	array(
		"tags" => array("temp"),
		"name" => "breaksByPick",
		"type" => "bool",
		"text" => "Wether or not a tile breaks from a pickaxe.",
		"default" => "false"
	),
	array(
		"tags" => array("temp"),
		"name" => "breaksByAxe",
		"type" => "bool",
		"text" => "Wether or not a tile breaks from an axe.",
		"default" => "false"
	),
	array(
		"tags" => array("temp"),
		"name" => "breaksByHammer",
		"type" => "bool",
		"text" => "Wether or not a tile breaks from a hammer.",
		"default" => "false"
	),
	array(
		"tags" => array("temp"),
		"name" => "breaksByCut",
		"type" => "bool",
		"text" => "Wether or not a tile breaks when hit by a melee weapon or projectile.",
		"default" => "false"
	),
	array(
		"tags" => array("temp"),
		"name" => "breaksByWater",
		"type" => "bool",
		"text" => "Wether or not a tile breaks when submerged in water or honey.",
		"default" => "false"
	),
	array(
		"tags" => array("temp"),
		"name" => "breaksByLava",
		"type" => "bool",
		"text" => "Wether or not a tile breaks when submerged in lava.",
		"default" => "false"
	),
	array(
		"tags" => array("temp"),
		"name" => "minPick",
		"type" => "int",
		"text" => "The minimum pick value required to mine this tile.",
		"default" => "0"
	),
	array(
		"tags" => array("temp"),
		"name" => "minAxe",
		"type" => "int",
		"text" => "The minimum axe value required to mine this tile.",
		"default" => "0"
	),
	array(
		"tags" => array("temp"),
		"name" => "minHammer",
		"type" => "int",
		"text" => "The minimum hammer value required to mine this tile.",
		"default" => "0"
	),
	array(
		"tags" => array("temp"),
		"name" => "ratePick",
		"type" => "float",
		"text" => "A multiplier for how fast the tile is mined by a pickaxe.",
		"default" => "1f"
	),
	array(
		"tags" => array("temp"),
		"name" => "rateAxe",
		"type" => "float",
		"text" => "A multiplier for how fast the tile is mined by an axe.",
		"default" => "1f"
	),
	array(
		"tags" => array("temp"),
		"name" => "rateHammer",
		"type" => "float",
		"text" => "A multiplier for how fast the tile is mined by a hammer.",
		"default" => "1f"
	),
	array(
		"tags" => array("temp"),
		"name" => "table",
		"type" => "bool",
		"text" => "Wether or not this tile should be considered a table. (Used in NPC Housing)",
		"default" => "false"
	),
	array(
		"tags" => array("temp"),
		"name" => "chair",
		"type" => "bool",
		"text" => "Wether or not this tile should be considered a chair. (Used in NPC Housing)",
		"default" => "false"
	),
	array(
		"tags" => array("temp"),
		"name" => "torch",
		"type" => "bool",
		"text" => "Wether or not this tile should be considered a torch. (Used in NPC Housing)",
		"default" => "false"
	),
	array(
		"tags" => array("temp"),
		"name" => "door",
		"type" => "bool",
		"text" => "Wether or not this tile should be considered a door. (Used in NPC Housing)",
		"default" => "false"
	),
	array(
		"tags" => array("temp"),
		"name" => "rope",
		"type" => "bool",
		"text" => "Causes this tile to have similar behavior to a rope.",
		"default" => "false"
	),
	array(
		"tags" => array("temp"),
		"name" => "noAttach",
		"type" => "bool",
		"text" => "Causes this tile to not be 'attachable' by other tiles.
		In other words, a tile that needs a placement condition checking this tile will always return false for this tile.",
		"default" => "false"
	),
	array(
		"tags" => array("temp"),
		"name" => "tileDungeon",
		"type" => "bool",
		"text" => "Wether or not this tile should be considered part of the dungeon.",
		"default" => "false"
	),
	array(
		"tags" => array("temp"),
		"name" => "spawn",
		"type" => "bool",
		"text" => "Wether or not this tile should be considered a viable spawn point.",
		"default" => "false",
		"drop" => "
			<div class=\"alert alert-info\">
			Note that this is does not make the tile function like a bed; you need to make the spawn point click code yourself. This merely
			prevents the game from removing the spawn point for your tile when it runs spawn point validity checks.
			</div>
		"		
	),
	array(
		"tags" => array("temp"),
		"name" => "spawnAt",
		"type" => "int[2]",
		"text" => "The tile position within this tile the player should respawn at.",
		"default" => "The bottom middle of the tile",
		"drop" => "
			<div class=\"alert alert-info\">
			This only is used if <code>spawn</code> is true. Also, this does not prevent the player from teleporting to the nearest 
			tile below them, so try to avoid Y values that are not at the bottom layer of the tile.
			</div>
		"		
	),
	array(
		"tags" => array("temp"),
		"name" => "adjTile",
		"type" => "int and/or string array",
		"text" => "Array of tile IDs, names of tiles, or both that this tile can be considered when crafting.",
		"default" => "false",
		"drop" => "
			<div class=\"alert alert-info\">
			For example, \"adjTile\": [\"Furnace\", \"Work Bench\"], would produce a tile that is considered a furnace and a workbench when
			choosing what recipes the player can make.
			</div>
		"
	),	
	array(
		"tags" => array("temp"),
		"name" => "blocksLight",
		"type" => "bool",
		"text" => "Wether or not this tile blocks light from passing through it.",
		"default" => "false"
	),
	array(
		"tags" => array("temp"),
		"name" => "blocksSun",
		"type" => "bool",
		"text" => "Wether or not this tile blocks sunlight from passing through it.",
		"default" => "false"
	),
	array(
		"tags" => array("temp"),
		"name" => "glows",
		"type" => "bool",
		"text" => "Wether or not this tile glows in the dark. Make this true if this tile uses the hook <code>ModifyLight</code>.",
		"default" => "false"
	),
	array(
		"tags" => array("temp"),
		"name" => "shines",
		"type" => "bool",
		"text" => "Wether or not this tile spawns sparkle dust if it is properly lit.",
		"default" => "false"
	),
	array(
		"tags" => array("temp"),
		"name" => "shineChance",
		"type" => "int",
		"text" => "The chance of the sparkle. (Higher numbers == less chance)",
		"default" => "0"
	),
	array(
		"tags" => array("temp"),
		"name" => "frame",
		"type" => "int",
		"text" => "The start frame for the tile's animation.",
		"default" => "0"	
	),
	array(
		"tags" => array("temp"),
		"name" => "frameMax",
		"type" => "int",
		"text" => "The maximum frame of the tile.",
		"default" => "0",
		"drop" => "
			<div class=\"alert alert-info\">If this and <code>frameCounterMax</code> are greater then 0, the tile will animate.</div>
		"
	),
	array(
		"tags" => array("temp"),
		"name" => "frameCounter",
		"type" => "int",
		"text" => "The start count for the frame counter of the tile's animation.",
		"default" => "0"
	),
	array(
		"tags" => array("temp"),
		"name" => "frameCounterMax",
		"type" => "int",
		"text" => "The maximum for the frame counter of the tile's animation.",
		"default" => "0",
		"drop" => "
			<div class=\"alert alert-info\">If this and <code>frameMax</code> are greater then 0, the tile will animate.</div>
		"
	),
	array(
		"tags" => array("temp"),
		"name" => "brick",
		"type" => "bool",
		"text" => "Wether or not this tile should be considered bricks.",
		"default" => "false"
	),
	array(
		"tags" => array("temp"),
		"name" => "moss",
		"type" => "bool",
		"text" => "Wether or not this tile should be considered moss.",
		"default" => "false"
	),
	array(
		"tags" => array("temp"),
		"name" => "stone",
		"type" => "bool",
		"text" => "Wether or not this tile should be considered stone.",
		"default" => "false"
	),
	array(
		"tags" => array("temp"),
		"name" => "mergeDirt",
		"type" => "bool",
		"text" => "Wether or not this tile should merge with dirt.",
		"default" => "false",
		"drop" => "
			<div class=\"alert alert-info\">DO NOT HAVE THIS TRUE IF <code>tileMerge</code> CONTAINS DIRT IN IT! Having both causes graphical glitches.</div>
		"
	),
	array(
		"tags" => array("temp"),
		"name" => "tileSand",
		"type" => "bool",
		"text" => "Wether or not this tile should be considered sand. (does not grant gravity to the tile)",
		"default" => "false"
	),
	array(
		"tags" => array("temp"),
		"name" => "tileFlame",
		"type" => "bool",
		"text" => "Wether or not this tile has a vanilla 'flame texture'. Almost all custom tiles will have this as false.",
		"default" => "false"
	),
	array(
		"tags" => array("temp"),
		"name" => "alchemyFlower",
		"type" => "bool",
		"text" => "Wether or not this tile is considered a potion herb. Does nothing except change the default sound the tile makes.",
		"default" => "false"
	),
	array(
		"tags" => array("temp"),
		"name" => "sound",
		"type" => "int",
		"text" => "The sound ID that this tile uses when it is killed.",
		"default" => "0",
		"drop" => "
			<div class=\"alert alert-info\">This is unused unless <code>soundGroup</code> is above 0.</div>
		"
	),
	array(
		"tags" => array("temp"),
		"name" => "soundGroup",
		"type" => "int",
		"text" => "The soundGroup ID that this tile uses when it is killed.",
		"default" => "0"
	),
	array(
		"tags" => array("temp"),
		"name" => "dust",
		"type" => "int",
		"text" => "The dust ID that this tile uses when it is mined or killed.",
		"default" => "0"
	),
	array(
		"tags" => array("temp"),
		"name" => "mapColor",
		"type" => "int[4]",
		"text" => "The color the tile uses on the map.",
		"default" => "None, it is ignored if not specified."
	),
	array(
		"tags" => array("temp"),
		"name" => "mapHoverText",
		"type" => "string",
		"text" => "The text used when the tile is hovered over.",
		"default" => "None, it is ignored if not specified."
	),
	array(
		"tags" => array("temp"),
		"name" => "drop",
		"type" => "int or string",
		"text" => "The item this tile will drop when killed.",
		"default" => "0 (nothing)"
	),
	array(
		"tags" => array("temp"),
		"name" => "tileMerge",
		"type" => "int and/or string array",
		"text" => "Array of tile IDs, names of tiles, or both that this tile merges with.",
		"default" => "None (merges with nothing except itself)",
		"drop" => "
			<div class=\"alert alert-info\">There are some special behaviors:
			
			<code>#NormalTiles</code> - Causes the tile to merge with every tile in the game that is not frameImportant and is 1x1 in size.
			<code>#Ores</code> - Causes the tile to merge will all vanilla ores. This is usually used with the behavior below to exclude the vanilla ores from the above.
			
			Having a ! before an entry (such as <code>!#Ores</code>) means the opposite - do NOT merge with this tile. 
			This is used to exclude tiles from the above two if used.</div>
		"
	),
	array(
		"tags" => array("temp"),
		"name" => "treasure",
		"type" => "bool",
		"text" => "Wether or not this tile should glow if the player has Spelunker.",
		"default" => "false"
	),
	array(
		"tags" => array("temp"),
		"name" => "danger",
		"type" => "bool",
		"text" => "Wether or not this tile should glow if the player has Dangersense.",
		"default" => "false"
	),
	array(
		"tags" => array("temp"),
		"name" => "grass",
		"type" => "bool",
		"text" => "Wether or not the tile should be considered grass frame-wise.",
		"default" => "false"
	)
);

?>