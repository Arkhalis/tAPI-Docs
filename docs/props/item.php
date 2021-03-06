<?php

$GLOBALS["propsInfo"] = array(
	"header" => "Items",
	"info" => "Configuration for an item.",
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
			"tag" => "looks",
			"name" => "Appearance"
		),
		array(
			"tag" => "armor",
			"name" => "Armor"
		),
		array(
			"tag" => "use",
			"name" => "Use"
		),
		array(
			"tag" => "combat",
			"name" => "Combat"
		),
		array(
			"tag" => "potion",
			"name" => "Potion"
		),
		array(
			"tag" => "tile",
			"name" => "Tile"
		),
		array(
			"tag" => "def",
			"name" => "Unsorted"
		)
	)
);

$GLOBALS["props"] = array(
	array(
		"name" => "name",
		"tags" => array("def"),
		"type" => "string",
		"text" => "The unique item name in the mod",
		"default" => "File name without extension",
		"drop" => "
			<div class=\"alert alert-info\"><code>width</code> and <code>height</code> properties can be used instead.</div>
		"
	),
	array(
		"name" => "texture",
		"tags" => array("def"),
		"type" => "string",
		"text" => "Path to the texture used by this item, not including file extension.",
		"default" => "current JSON filename"
	),
	array(
		"name" => "code",
		"tags" => array("def"),
		"type" => "string",
		"text" => "Full type name for the <code>ModItem</code>-extending class to be used for this item.",
		"default" => "<code>{internalName}.Items.{filename}</code>"
	),
	array(
		"name" => "displayName",
		"tags" => array("def"),
		"type" => "string",
		"text" => "Item name in-game (in interface)."
	),
				
	array(
		"name" => "size",
		"tags" => array("def"),
		"type" => "int[2]",
		"text" => "Item hitbox when laying in the world.",
		"drop" => "
			<div class=\"alert alert-info\"><code>width</code> and <code>height</code> properties can be used instead.</div>
		"
	),
	array(
		"name" => "width",
		"tags" => array("def"),
		"type" => "int",
		"text" => "Item hitbox width when laying in the world.",
		"drop" => "
			<div class=\"alert alert-info\"><code>size</code> property can be used instead.</div>
		"
	),
	array(
		"name" => "height",
		"tags" => array("def"),
		"type" => "int",
		"text" => "Item hitbox height when laying in the world.",
		"drop" => "
			<div class=\"alert alert-info\"><code>size</code> property can be used instead.</div>
		"
	),
	array(
		"name" => "scale",
		"tags" => array("def"),
		"type" => "float",
		"text" => "Scale multiplier used when drawing the item in the world.",
		"default" => 1
	),
	array(
			"name" => "tooltip",
			"tags" => array("def"),
			"type" => array("string","string[?]"),
			"text" => "The tooltip of the item, as seen in game.",
			"drop" => "
				<div class=\"bs-example\">
					<code>
						\"tooltip\": \"The cabin\"
					</code>
					<hr class=\"hr-separator\" />
					<div><code>\"tooltip\": [</code></div>
					<div class=\"code-indent\"><code>\"Call in Jan Egeland!\",</code></div>
					<div class=\"code-indent\"><code>\"I'm in second line!\"</code></div>
					<div><code>]</code></div>
				</div>
			"
	),
	array(
			"name" => "useStyle",
			"tags" => array("def"),
			"type" => "int",
			"text" => "Use style to use.",
			"default" => 0
	),
	array(
			"name" => "holdStyle",
			"tags" => array("def"),
			"type" => "int",
			"text" => "Hold style to use.",
			"default" => 0
	),
	array(
			"name" => "useAnimation",
			"tags" => array("def"),
			"type" => "int",
			"text" => "How long the animation of an item lasts in <abbr title=\"1 tick = 1/60 second\n1 second = 60 ticks\">ticks</abbr>.",
			"default" => 100
	),
	array(
			"name" => "useTime",
			"tags" => array("def"),
			"type" => "int",
			"text" => "How long it takes to use an item in <abbr title=\"1 tick = 1/60 second\n1 second = 60 ticks\">ticks</abbr>.",
			"default" => 100
	),
	array(
			"name" => "channel",
			"tags" => array("def"),
			"type" => "bool",
			"text" => "Whether the item can be channeled.",
			"default" => false
	),
	array(
		"name" => "maxStack",
		"tags" => array("def"),
		"type" => "int",
		"text" => "The maximum stack size of the item.",
		"default" => 1
	),
	array(
		"name" => array("pick","axe","hammer"),
		"tags" => array("def"),
		"type" => "int",
		"text" => "The pickaxe/axe/hammer power of the item, as a percentage.",
		"default" => 0
	),
	array(
		"name" => "tileBoost",
		"tags" => array("def"),
		"type" => "int",
		"text" => "The tile placement range increase when equipped.",
		"default" => 0
	),
	array(
		"name" => "placeStyle",
		"tags" => array("def"),
		"type" => "int",
		"text" => "Tile placement style to use.",
		"default" => 0
	),
	array(
		"name" => "damage",
		"tags" => array("def"),
		"type" => "int",
		"text" => "Item damage.",
		"default" => 0
	),
	array(
		"name" => "knockback",
		"tags" => array("def"),
		"type" => "float",
		"text" => "Item knockback strength.",
		"default" => 0
	),
	array(
		"name" => array("healLife","healMana"),
		"tags" => array("def"),
		"type" => "int",
		"text" => "How much current life/mana the item gives when consumed.",
		"default" => 0
	),
	array(
		"name" => "potion",
		"tags" => array("def"),
		"type" => "bool",
		"text" => "Whether the item is a potion (triggers the <em>Potion Sickness</em> debuff).",
		"default" => false
	),
	array(
		"name" => "consumable",
		"tags" => array("def"),
		"type" => "bool",
		"text" => "Whether the item is consumed on usage.",
		"default" => false
	),
	array(
		"name" => "autoReuse",
		"tags" => array("def"),
		"type" => "bool",
		"text" => "Whether the item can be continuously used by holding down.",
		"default" => false
	),
	array(
		"name" => "useTurn",
		"tags" => array("def"),
		"type" => "bool",
		"text" => "Whether the player will turn to face the mouse.",
		"default" => false
	),
	array(
		"name" => "defense",
		"tags" => array("def"),
		"type" => "int",
		"text" => "The defense the item provides when equipped.",
		"default" => 0
	),
	array(
		"name" => "rare",
		"tags" => array("def"),
		"type" => "int",
		"text" => "The rarity value of the item.",
		"default" => 0,
		"drop" => "
			<div class=\"table-responsive\">
				<table class=\"table table-condensed\">
					<thead>
						<tr>
							<th>Value</th>
							<th>Color</th>
							<th>Lava immunity</th>
						</tr>
					</thead>
					<tbody>
						<tr><td>-1 and less</td><td style=\"color: gray;\">Gray</td><td></td></tr>
						<tr><td>0</td><td style=\"color: black;\">White</td><td></td></tr>
						<tr><td>1</td><td style=\"color: blue;\">Blue</td><td><span class=\"glyphicon glyphicon-ok\" style=\"color: green;\"></span></td></tr>
						<tr><td>2</td><td style=\"color: green;\">Green</td><td><span class=\"glyphicon glyphicon-ok\" style=\"color: green;\"></span></td></tr>
						<tr><td>3</td><td style=\"color: rgb(220,120,0);\">Orange</td><td><span class=\"glyphicon glyphicon-ok\" style=\"color: green;\"></span></td></tr>
						<tr><td>4</td><td style=\"color: red;\">Red</td><td><span class=\"glyphicon glyphicon-ok\" style=\"color: green;\"></span></td></tr>
						<tr><td>5</td><td style=\"color: fuchsia;\">Magenta</td><td><span class=\"glyphicon glyphicon-ok\" style=\"color: green;\"></span></td></tr>
						<tr><td>6</td><td style=\"color: purple;\">Purple</td><td><span class=\"glyphicon glyphicon-ok\" style=\"color: green;\"></span></td></tr>
						<tr><td>7</td><td style=\"color: GreenYellow;\">Light Green</td><td><span class=\"glyphicon glyphicon-ok\" style=\"color: green;\"></span></td></tr>
						<tr><td>8</td><td style=\"color: yellow;\">Yellow</td><td><span class=\"glyphicon glyphicon-ok\" style=\"color: green;\"></span></td></tr>
						<tr><td>9</td><td style=\"color: cyan;\">Cyan</td><td><span class=\"glyphicon glyphicon-ok\" style=\"color: green;\"></span></td></tr>
					</tbody>
				</table>
			</div>
		"
	),
	array(
		"name" => "shootSpeed",
		"tags" => array("def"),
		"type" => "float",
		"text" => "How fast projectiles are shot by this item.",
		"default" => 1
	),
	array(
		"name" => "notAmmo",
		"tags" => array("def"),
		"type" => "bool",
		"text" => "Whether the ammo tooltip of the item should be hidden (for example, coins for <em>Coin Gun</em>).",
		"default" => false
	),
	array(
		"name" => "lifeRegen",
		"tags" => array("def"),
		"type" => "int",
		"text" => "How much life regeneration the item provides when equipped.",
		"default" => 0
	),
	array(
		"name" => "manaIncrease",
		"tags" => array("def"),
		"type" => "int",
		"text" => "How much mana the item provides when equipped.",
		"default" => 0
	),
	array(
		"name" => "mana",
		"tags" => array("def"),
		"type" => "int",
		"text" => "How much mana it takes to use the item.",
		"default" => 0
	),
	array(
		"name" => "noUseGraphic",
		"tags" => array("def"),
		"type" => "bool",
		"text" => "Whether or not to hide the item when used.",
		"default" => false
	),
	array(
		"name" => "vanity",
		"tags" => array("def"),
		"type" => "bool",
		"text" => "Whether or not the item is a vanity item.",
		"default" => false
	),
	array(
		"name" => "crit",
		"tags" => array("def"),
		"type" => "int",
		"text" => "The critical chance bonus of the item, in percent.",
		"default" => 0
	),
	array(
		"name" => array("melee","ranged","magic","summon"),
		"tags" => array("def"),
		"type" => array("bool"),
		"text" => "Specifies item damage type.",
		"default" => false,
		"drop" => "
			<div class=\"alert alert-info\">Some items don't have any damage type specified, which effects in them not getting any <code>+X% {type} damage</code> effects (for example, <em>Explosive Bunny</em>).</div>
		"
	),
	array(
		"name" => "reuseDelay",
		"tags" => array("def"),
		"type" => "int",
		"text" => "The delay before an item can be used again, in <abbr title=\"1 tick = 1/60 second\n1 second = 60 ticks\">ticks</abbr>.",
		"default" => 0
	),
	array(
		"name" => "color",
		"tags" => array("def"),
		"type" => array("int[3]","int[4]"),
		"text" => "The color to tint the item's texture, in RGB or RGBA format.",
		"default" => "<code>[255,255,255]</code>",
		"drop" => "
			<div class=\"bs-example\">
				<code>\"color\": [255,255,255]</code> - white<br />
				<code>\"color\": [255,0,0,127]</code> - red, half-transparent<br />
			</div>
		"
	),
	array(
		"name" => "notMaterial",
		"tags" => array("def"),
		"type" => "bool",
		"text" => "Whether the material tooltip of the item should be hidden (for example, <em>Phaseblades</em>).",
		"default" => false
	),
	array(
		"name" => "mech",
		"tags" => array("def"),
		"type" => "bool",
		"text" => "Whether wires should display when this item is selected.",
		"default" => false
	),
	array(
		"name" => "makeNPC",
		"tags" => array("def"),
		"type" => array("int","string"),
		"text" => "The NPC spawned when using this item.",
		"drop" => "
			<div class=\"bs-example\">
				<code>\"makeNPC\": 355</code> - vanilla npc 355 (<em>Firefly</em>)<br />
				<code>\"makeNPC\": \"My NPC\"</code> - a custom NPC from the same mod as the item
			</div>
		"
	),
		
		
		
		
		
		
		
		
		
	array(
		"name" => "value",
		"tags" => array("def"),
		"type" => array("int","int[1-4]"),
		"text" => "Item buying value (selling value is 5x smaller).",
		"drop" => "
			<div class=\"bs-example\">
				<code>\"value\": 105099</code> - 10g 50s 99c<br />
				<code>\"value\": [2,20,9,3]</code> - 2p 20g 9s 3c
			</div>
		"
	),
	array(
		"name" => "holdoutOffset",
		"tags" => array("def"),
		"type" => "float[2]",
		"text" => "The offset of the item texture while held, in pixels.",
		"default" => "<code>[0,0]</code>"
	),
	array(
		"name" => "holdoutOrigin",
		"tags" => array("def"),
		"type" => "float[2]",
		"text" => "The origin of the item texture while held, in decimal percent."
	),
	array(
		"name" => "noMelee",
		"tags" => array("def"),
		"type" => "bool",
		"text" => "Whether or not to prevent melee damage from this item.",
		"default" => false
	),
	array(
		"name" => "useSound",
		"tags" => array("def"),
		"type" => array("int","string"),
		"text" => "The sound played when using the item.",
		"drop" => "
			<div class=\"bs-example\">
				<code>\"useSound\": 12</code> - vanilla sound 12 (<em>Space Gun</em>)<br />
				<code>\"useSound\": \"MySound\"</code> - custom sound filename without the extension
			</div>
		",
		"warning" => true
	),
	array(
		"name" => "shoot",
		"tags" => array("def"),
		"type" => array("int","string"),
		"text" => "Projectile type used by this weapon.",
		"drop" => "
			<div class=\"bs-example\">
				<code>\"shoot\": 27</code> - vanilla projectile 27 (<em>Water Bolt</em>)<br />
				<code>\"shoot\": \"MyProjectile\"</code> - custom projectile
			</div>
		"
	),
	array(
		"name" => "useAmmo",
		"tags" => array("def"),
		"type" => array("int","string"),
		"text" => "The type of the ammo used by this item. If weapon's <code>useAmmo</code> and ammo's <code>ammo</code> properties match, the projectile is fired and ammo consumed.",
		"drop" => "
			<div class=\"bs-example\">
				<code>\"useAmmo\": 14</code> - vanilla type 14 (bullets)<br />
				<code>\"useAmmo\": \"MyAmmoType\"</code> - custom ammo type
			</div>
		"
	),
	array(
		"name" => "ammo",
		"tags" => array("def"),
		"type" => array("int","string"),
		"text" => "The type of the ammo of this item. If weapon's <code>useAmmo</code> and ammo's <code>ammo</code> properties match, the projectile is fired and ammo consumed.",
		"drop" => "
			<div class=\"bs-example\">
				<code>\"ammo\": 14</code> - vanilla type 14 (bullets)<br />
				<code>\"ammo\": \"MyAmmoType\"</code> - custom ammo type
			</div>
		"
	),
	array(
		"name" => "accessory",
		"tags" => array("def"),
		"type" => "bool",
		"text" => "Whether the item is an accessory.",
		"default" => false
	),
	array(
		"name" => "buff",
		"tags" => array("def"),
		"type" => array("int","string"),
		"text" => "The type of the buff given by this item.",
		"drop" => "
			<div class=\"bs-example\">
				<code>\"buff\": 26</code> - vanilla buff 26 (<em>Well Fed</em>)<br />
				<code>\"buff\": \"MyBuff\"</code> - custom buff
			</div>
		"
	),
	array(
		"name" => "buffTime",
		"tags" => array("def"),
		"type" => "int",
		"text" => "The duration of the buff given by this item in <abbr title=\"1 tick = 1/60 second\n1 second = 60 ticks\">ticks</abbr>.",
		"default" => 0
	),
	array(
		"name" => "createTile",
		"tags" => array("def"),
		"type" => array("int","string"),
		"text" => "The type of the tile created by this item.",
		"drop" => "
			<div class=\"bs-example\">
				<code>\"createTile\": 62</code> - vanilla tile 62 (<em>Jungle Vines</em>)<br />
				<code>\"createTile\": \"MyTile\"</code> - custom tile
			</div>
		"
	),
	array(
		"name" => "tileWand",
		"tags" => array("def"),
		"type" => array("int","string"),
		"text" => "The material consumed when placing tiles.",
		"drop" => "
			<div class=\"bs-example\">
				<code>\"tileWand\": 9</code> - vanilla item 9 (<em>Wood</em>)<br />
				<code>\"tileWand\": \"MyItem\"</code> - custom item
			</div>
		"
	),
	array(
		"name" => "createWall",
		"tags" => array("def"),
		"type" => array("int","string"),
		"text" => "The type of the wall created by this item.",
		"drop" => "
			<div class=\"bs-example\">
				<code>\"createWall\": 1</code> - vanilla wall 1 (<em>Stone Wall</em>)<br />
				<code>\"createWall\": \"MyWall\"</code> - custom wall
			</div>
		"
	),
		
		
		
		
		
		
	array(
		"name" => "hairType",
		"tags" => array("def"),
		"type" => "int{x}",
		"text" => "How to handle hair drawing.",
		"default" => 0,
		"drop" => "
			<div class=\"table-responsive\">
				<table class=\"table table-condensed\">
					<thead>
						<th>Value</th>
						<th>Behavior</th>
					</thead>
					<tbody>
						<tr><td>0</td><td>No hair</td><td></td></tr>
						<tr><td>1</td><td>Over hair</td></tr>
						<tr><td>2</td><td>Over alternate hair (for hats)</td></tr>
						<tr><td>3</td><td>No head</td></tr>
					</tbody>
				</table>
			</div>
		"
	),
	array(
		"name" => "setName",
		"tags" => array("def"),
		"type" => "string",
		"text" => "Name of the armor set this item belongs to."
	),
	array(
		"name" => array("armorHead","armorBody","armorLegs"),
		"tags" => array("def"),
		"type" => "bool",
		"text" => "Whether this can be equipped as head/body/legs armor.",
		"default" => false
	),
	array(
		"name" => "hasHands",
		"tags" => array("def"),
		"type" => "bool",
		"text" => "Whether or not the armor texture includes hands, disabling drawing the naked hands.",
		"default" => false
	),
	array(
		"name" => "hasArms",
		"tags" => array("def"),
		"type" => "bool",
		"text" => "Whether or not the armor texture includes arms, disabling drawing the naked arms.",
		"default" => false
	),
	array(
		"name" => array("textureHead","textureBody","textureLegs"),
		"tags" => array("def"),
		"type" => "string",
		"text" => "Path to the head/body/legs texture used by this item, not including file extension.",
		"default" => "<code>{texture}._Head</code> / <code>{texture}._Body</code> / <code>{texture}._Legs</code>"
	),
	array(
		"name" => "textureArm",
		"tags" => array("def"),
		"type" => "string",
		"text" => "Path to the arm texture used by this item, not including file extension.",
		"default" => "<code>{texture}._Arm</code>"
	),
	array(
		"name" => "textureFemale",
		"tags" => array("def"),
		"type" => "string",
		"text" => "Path to the female body texture used by this item, not including file extension.",
		"default" => "<code>{texture}._Body_Female</code>"
	),
	array(
		"name" => "recipes",
		"tags" => array("def"),
		"type" => "object(recipe)[?]",
		"text" => "An array of recipes.",
		"drop" => "
		
		",
		"warning" => true
	),
	array(
		"name" => "noWet",
		"tags" => array("def"),
		"type" => "bool",
		"text" => "Wether or not this item can be used underwater.",
		"default" => "false (can be used underwater)"
	),
	array(
		"name" => "mountType",
		"tags" => array("def"),
		"type" => "int",
		"text" => "The type of mount this item spawns.",
		"default" => "0 (None)",
		"drop" => "
			<div class=\"alert alert-info\">This currently only supports 1 through 6 (vanilla mounts). Custom ones may be supported in the future.</div>
		"	
	)
);

?>
