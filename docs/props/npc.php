<?php

$GLOBALS["propsInfo"] = array(
	"header" => "NPCs",
	"info" => "Configuration for an NPC.",
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
		)
	)
);

$GLOBALS["props"] = array(
	array(
		"tags" => array("looks"),
		"name" => "texture",
		"type" => "string",
		"text" => "Path to the texture used by this NPC, not including file extension.",
		"default" => "current JSON filename"
	),
	array(
		"tags" => array("internal"),
		"name" => "code",
		"type" => "string",
		"text" => "Full type name for the <code>ModNPC</code>-extending class to be used for this NPC.",
		"default" => "<code>{internalName}.NPCs.{filename}</code>"
	),
	array(
		"tags" => array("info"),
		"name" => "displayName",
		"type" => "string",
		"text" => "NPC name in-game."
	),
	array(
		"tags" => array("looks"),
		"name" => "size",
		"type" => "int[2]",
		"text" => "NPC size in pixels.",
		"drop" => "
			<div class=\"alert alert-info\"><code>width</code> and <code>height</code> properties can be used instead.</div>
		"
	),
	array(
		"tags" => array("looks"),
		"name" => "width",
		"type" => "int",
		"text" => "NPC width in pixels.",
		"drop" => "
			<div class=\"alert alert-info\"><code>size</code> property can be used instead.</div>
		"
	),
	array(
		"tags" => array("looks"),
		"name" => "height",
		"type" => "int",
		"text" => "NPC height in pixels.",
		"drop" => "
			<div class=\"alert alert-info\"><code>size</code> property can be used instead.</div>
		"
	),
	array(
		"tags" => array("looks"),
		"name" => "scale",
		"type" => "float",
		"text" => "A scale multiplier to be used by the NPC.",
		"default" => 1
	),
	array(
		"tags" => array("gplay"),
		"name" => "npcSlots",
		"type" => "float",
		"text" => "The amount of spawn slots this NPC takes up, the higher the value, the less other NPCs can spawn.",
		"default" => 1
	),
	array(
		"tags" => array("looks"),
		"name" => "frameCount",
		"type" => "int",
		"text" => "The amount of frames used in this NPC's texture.",
		"default" => 1
	),
	array(
		"tags" => array("gplay"),
		"name" => "aiStyle",
		"type" => "int",
		"text" => "The AI used by this NPC."
	),
	array(
		"tags" => array("looks"),
		"name" => "animationStyle",
		"type" => "int",
		"text" => "The animation style used by this NPC."
	),
	array(
		"tags" => array("gplay"),
		"name" => "friendly",
		"type" => "bool",
		"text" => "Whether this NPC is friendly.",
		"default" => false
	),
	array(
		"tags" => array("gplay"),
		"name" => "townNPC",
		"type" => "bool",
		"text" => "Whether this NPC is a town NPC.",
		"default" => false
	),
	array(
		"tags" => array("interface"),
		"name" => "textureHead",
		"type" => "string",
		"text" => "Used only by town NPCs. Path to the head texture used by this NPC, not including file extension.",
		"default" => "<code>{texture}._Head</code>"
	),
	array(
		"tags" => array("info"),
		"name" => "occupation",
		"type" => "string",
		"text" => "The type of town NPC this NPC is.",
		"default" => "current JSON filename"
	),
	array(
		"tags" => array("gplay"),
		"name" => "male",
		"type" => "bool",
		"text" => "Whether this Town NPC is male or female."
	),
	array(
		"tags" => array("interface"),
		"name" => "shop",
		"type" => "bool",
		"text" => "Whether this Town NPC has a shop.",
		"default" => false
	),
	array(
		"tags" => array("gplay"),
		"name" => "boss",
		"type" => "bool",
		"text" => "Whether this NPC is a boss.",
		"default" => false
	),
	array(
		"tags" => array("internal"),
		"name" => "netAlways",
		"type" => "bool",
		"text" => "Whether this NPC should always be synced in multiplayer.",
		"default" => false
	),
	array(
		"tags" => array("stats"),
		"name" => "lifeMax",
		"type" => "int",
		"text" => "The maximum amount of life for this NPC."
	),
	array(
		"tags" => array("stats"),
		"name" => "damage",
		"type" => "int",
		"text" => "The amount of damage dealt by the NPC.",
		"default" => 0
	),
	array(
		"tags" => array("stats"),
		"name" => "defense",
		"type" => "int",
		"text" => "The amount of defense had by the NPC.",
		"default" => 0
	),
	array(
		"tags" => array("stats"),
		"name" => "knockbackResist",
		"type" => "float",
		"text" => "The amount of resistance to knockback the NPC has.",
		"default" => 1
	),
	array(
		"tags" => array("gplay"),
		"name" => "dontTakeDamage",
		"type" => "bool",
		"text" => "Whether the NPC is immune to damage.",
		"default" => false
	),
	array(
		"tags" => array("gplay"),
		"name" => "lavaImmune",
		"type" => "bool",
		"text" => "Whether the NPC is immune to lava damage.",
		"default" => false
	),
	array(
		"tags" => array("gplay"),
		"name" => "noGravity",
		"type" => "bool",
		"text" => "Whether the NPC is unaffected by gravity.",
		"default" => false
	),
	array(
		"tags" => array("gplay"),
		"name" => "noTileCollide",
		"type" => "bool",
		"text" => "Whether the NPC can pass through tiles.",
		"default" => false
	),
	array(
		"tags" => array("looks"),
		"name" => "behindTiles",
		"type" => "bool",
		"text" => "Whether or not the NPC is drawn behind tiles.",
		"default" => false
	),
	array(
		"tags" => array("stats"),
		"name" => "critChance",
		"type" => "int",
		"text" => "The chance of the NPC performing a critical strike, in percent.",
		"default" => 0
	),
	array(
		"tags" => array("stats"),
		"name" => "critMult",
		"type" => "float",
		"text" => "The damage multiplier when the NPC performs a critical strike.",
		"default" => 2
	),
	array(
		"tags" => array("looks"),
		"name" => "color",
		"type" => array("int[3]","int[4]"),
		"text" => "The color to tint the NPC's texture, in RGB or RGBA format.",
		"default" => "<code>[255,255,255]</code>",
		"drop" => "
			<div class=\"bs-example\">
				<code>\"color\": [255,255,255]</code> - white<br />
				<code>\"color\": [255,0,0,127]</code> - red, half-transparent<br />
			</div>
		"
	),
	array(
		"tags" => array("looks"),
		"name" => "alpha",
		"type" => "int",
		"text" => "The transparency of the NPC, where 0 is opaque, and 255 is invisible.",
		"default" => 0
	),
	array(
		"tags" => array("interface"),
		"name" => "showHealthBar",
		"type" => "bool",
		"text" => "Whether to show the health bar above the NPC.",
		"default" => true
	),
	array(
		"tags" => array("interface"),
		"name" => "lifeBarScale",
		"type" => "float",
		"text" => "A scale multiplier used by the NPC's life bar.",
		"default" => 1
	),
	array(
		"tags" => array("interface"),
		"name" => "realLifeHealthBar",
		"type" => "bool",
		"text" => "Whether or not to use the <code>realLife</code> value for the health bar, used for multipart NPCs.",
		"default" => false
	),
	array(
		"tags" => array("gplay"),
		"name" => "buffImmune",
		"type" => "<string/int>[?]",
		"text" => "An array of buff names and types that this NPC is immune to.",
		"warning" => true
	),
	array(
		"tags" => array("gplay"),
		"name" => "soundHit",
		"type" => array("int","string"),
		"text" => "The hit sound used by this NPC.",
		"drop" => "
			<div class=\"bs-example\">
				<code>\"soundHit\": 12</code> - vanilla sound 12 (<em>Space Gun</em>)<br />
				<code>\"soundHit\": \"MySound\"</code> - custom sound filename without the extension
			</div>
		",
		"warning" => true
	),
	array(
		"tags" => array("gplay"),
		"name" => "soundKilled",
		"type" => array("int","string"),
		"text" => "The death sound used by this NPC.",
		"drop" => "
			<div class=\"bs-example\">
				<code>\"soundKilled\": 12</code> - vanilla sound 12 (<em>Space Gun</em>)<br />
				<code>\"soundKilled\": \"MySound\"</code> - custom sound filename without the extension
			</div>
		",
		"warning" => true
	),
	array(
		"tags" => array("info"),
		"name" => "value",
		"type" => array("int","int[1-4]"),
		"text" => "NPC's value (also the average amount of copper coins it drops).",
		"drop" => "
			<div class=\"bs-example\">
				<code>\"value\": 105099</code> - 10g 50s 99c<br />
				<code>\"value\": [2,20,9,3]</code> - 2p 20g 9s 3c
			</div>
		"
	),
	
	array(
		"tags" => array("gplay"),
		"name" => "music",
		"type" => "string",
		"text" => "The name of the music to play when this NPC is on screen.",
		"warning" => true
	),
	array(
		"tags" => array("gplay"),
		"name" => "drops",
		"type" => "object[?]",
		"text" => "An array of items this NPC can drop.",
		"warning" => true
	),
	array(
		"tags" => array("gplay"),
		"name" => "coldDamage",
		"type" => "bool",
		"text" => "Wether or not the damage this npc causes should be considered 'cold' damage. (Used to reduce damage with the warmth potion).",
		"default" => "false"
	),
	array(
		"tags" => array("gplay"),
		"name" => "collisonFallThrough",
		"type" => "bool",
		"text" => "Wether or not the this npc falls through platforms. (Only used by npcs using zombie AI (aiStyle 3)).",
		"default" => "false"
	)
);

?>