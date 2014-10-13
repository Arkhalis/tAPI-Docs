<?php

$GLOBALS["hooksInfo"] = array(
	"header" => "ModPlayer"
);

$GLOBALS["hooks"] = array(
	array(
		"hook" => "PreUpdate",
		"text" => "Called before the player update code, every update frame."
	),
	array(
		"hook" => "MidUpdate",
		"text" => "Called in the middle of the player update code, after resolving equipped items' effects, every update frame."
	),
	array(
		"hook" => "PostUpdate",
		"text" => "Called after the player update code, every update frame."
	),
	array(
		"hook" => "PreResetEffects",
		"text" => "Called before the reset effects player code, every update frame."
	),
	array(
		"hook" => "PostResetEffects",
		"text" => "Called after the reset effects player code, every update frame."
	),

	array(
		"hook" => "OnInventoryReset",
		"args" => array(
			array(
				"type" => "bool", "name" => "mediumcoreRespawn",
				"text" => "Whether the inventory is being re-filled after dying on mediumcore."
			)
		),
		"text" => "Called when a new player is created or a mediumcore player dies."
	),

	array(
		"hook" => "PreItemCheck",
		"text" => "Called before the item check code."
	),
	array(
		"hook" => "PostItemCheck",
		"text" => "Called after the item check code."
	),
	array(
		"hook" => "PreShoot",
		"args" => array(
			array(
				"type" => "Vector2", "name" => "position",
				"text" => "Initial position of the projectile."
			),
			array(
				"type" => "Vector2", "name" => "velocity",
				"text" => "Velocity of the projectile."
			),
			array(
				"type" => "int", "name" => "projType",
				"text" => "Projectile type."
			),
			array(
				"type" => "int", "name" => "damage",
				"text" => "Projectile damage."
			),
			array(
				"type" => "float", "name" => "knockback",
				"text" => "Projectile knockback."
			)
		),
		"return" => array("type" => "bool", "default" => "true", "text" => "Whether to continue shooting the projectile."),
		"text" => "Called before a player shoots a projectile."
	),

	array(
		"hook" => "PreHurt",
		"args" => array(
			array(
				"type" => "bool", "name" => "pvp",
				"text" => "Whether the damage is from a PVP source."
			),
			array(
				"type" => "bool", "name" => "quiet",
				"text" => "Whether to create a CombatText instance."
			),
			array(
				"type" => "ref bool", "name" => "getHurt",
				"text" => "Should the player actually take damage."
			),
			array(
				"type" => "ref bool", "name" => "playSound",
				"text" => "Whether to play the hit sound."
			),
			array(
				"type" => "ref bool", "name" => "genGore",
				"text" => "Whether to create gore."
			),
			array(
				"type" => "ref int", "name" => "damage",
				"text" => "Damage done."
			),
			array(
				"type" => "ref int", "name" => "hitDirection",
				"text" => "Attack direction (used for knockback)."
			),
			array(
				"type" => "ref string", "name" => "deathText",
				"text" => "The text to use in a case the player would die from this damage."
			),
			array(
				"type" => "ref bool", "name" => "crit",
				"text" => "Should the attack be a crit."
			),
			array(
				"type" => "ref float", "name" => "critMultiplier",
				"text" => "Crit damage multiplier."
			)
		),
		"text" => "Called before a player gets damaged."
	),
	array(
		"hook" => "PostHurt",
		"args" => array(
			array(
				"type" => "bool", "name" => "pvp",
				"text" => "Whether the damage is from a PVP source."
			),
			array(
				"type" => "bool", "name" => "quiet",
				"text" => "Whether to create a CombatText instance."
			),
			array(
				"type" => "int", "name" => "hitDirection",
				"text" => "Attack direction (used for knockback)."
			),
			array(
				"type" => "string", "name" => "deathText",
				"text" => "The text to use in a case the player would die from this damage."
			),
			array(
				"type" => "bool", "name" => "crit",
				"text" => "Should the attack be a crit."
			),
			array(
				"type" => "float", "name" => "critMultiplier",
				"text" => "Crit damage multiplier."
			),
			array(
				"type" => "ref double", "name" => "parsedDamage",
				"text" => "The final damage dealt."
			)
		),
		"text" => "Called after a player gets damaged."
	),

	array(
		"hook" => "PreKill",
		"args" => array(
			array(
				"type" => "double", "name" => "damage",
				"text" => "The final damage value that killed the player."
			),
			array(
				"type" => "int", "name" => "hitDirection",
				"text" => "Hit direction of the final blow (used for knockback)."
			),
			array(
				"type" => "bool", "name" => "pvp",
				"text" => "Whether the final blow was from a PVP source."
			),
			array(
				"type" => "string", "name" => "deathText",
				"text" => "The text to use in the chat on death."
			)
		),
		"return" => array("type" => "bool?", "default" => "null", "text" => "Whether the player should actually die."),
		"text" => "Called before a player dies."
	),
	array(
		"hook" => "PostKill",
		"args" => array(
			array(
				"type" => "double", "name" => "damage",
				"text" => "The final damage value that killed the player."
			),
			array(
				"type" => "int", "name" => "hitDirection",
				"text" => "Hit direction of the final blow (used for knockback)."
			),
			array(
				"type" => "bool", "name" => "pvp",
				"text" => "Whether the final blow was from a PVP source."
			),
			array(
				"type" => "string", "name" => "deathText",
				"text" => "The text to use in the chat on death."
			)
		),
		"text" => "Called after a player dies."
	),

	array(
		"hook" => "FrameEffects",
		"text" => "Called after the vanilla frame effects (visible accessories and such) code."
	),

	array(
		"hook" => "PreHorizontalMovement",
		"args" => array(
			array(
				"type" => "ref bool", "name" => "letRun",
				"text" => "Whether the horizontal movement code should run."
			),
			array(
				"type" => "ref bool", "name" => "emitDust",
				"text" => "Should the player emit dust (Hermes Boots effect for example)."
			),
			array(
				"type" => "ref bool", "name" => "playSound",
				"text" => "Whether the Hermes Boots sound effect should be played."
			)
		),
		"text" => "Called before the horizontal player movement code runs."
	),

	array(
		"hook" => "DamagePlayer",
		"args" => array(
			array(
				"type" => "NPC", "name" => "npc",
				"text" => "The NPC dealing damage to the player."
			),
			array(
				"type" => "int", "name" => "hitDir",
				"text" => "Hit direction (used for knockback)."
			),
			array(
				"type" => "ref int", "name" => "damage",
				"text" => "Damage dealt."
			),
			array(
				"type" => "ref bool", "name" => "crit",
				"text" => "Should the attack be a crit."
			),
			array(
				"type" => "ref float", "name" => "critMult",
				"text" => "Crit damage multiplier."
			)
		),
		"text" => "Called before an NPC damages a player."
	),
	array(
		"hook" => "DamagePlayer",
		"args" => array(
			array(
				"type" => "Projectile", "name" => "projectile",
				"text" => "The Projectile dealing damage to the player."
			),
			array(
				"type" => "int", "name" => "hitDir",
				"text" => "Hit direction (used for knockback)."
			),
			array(
				"type" => "ref int", "name" => "damage",
				"text" => "Damage dealt."
			),
			array(
				"type" => "ref bool", "name" => "crit",
				"text" => "Should the attack be a crit."
			),
			array(
				"type" => "ref float", "name" => "critMult",
				"text" => "Crit damage multiplier."
			)
		),
		"text" => "Called before a Projectile damages a player."
	),
	array(
		"hook" => "DealtPlayer",
		"args" => array(
			array(
				"type" => "NPC", "name" => "npc",
				"text" => "The NPC dealing damage to the player."
			),
			array(
				"type" => "int", "name" => "hitDir",
				"text" => "Hit direction (used for knockback)."
			),
			array(
				"type" => "int", "name" => "damage",
				"text" => "Damage dealt."
			),
			array(
				"type" => "bool", "name" => "crit",
				"text" => "Should the attack be a crit."
			)
		),
		"text" => "Called after an NPC damages a player."
	),
	array(
		"hook" => "DealtPlayer",
		"args" => array(
			array(
				"type" => "Projectile", "name" => "projectile",
				"text" => "The Projectile dealing damage to the player."
			),
			array(
				"type" => "int", "name" => "hitDir",
				"text" => "Hit direction (used for knockback)."
			),
			array(
				"type" => "int", "name" => "damage",
				"text" => "Damage dealt."
			),
			array(
				"type" => "bool", "name" => "crit",
				"text" => "Should the attack be a crit."
			)
		),
		"text" => "Called after a Projectile damages a player."
	),

	array(
		"hook" => "DamagePVP",
		"args" => array(
			array(
				"type" => "Player", "name" => "victim",
				"text" => "The Player being dealt damage."
			),
			array(
				"type" => "int", "name" => "hitDir",
				"text" => "Hit direction (used for knockback)."
			),
			array(
				"type" => "ref int", "name" => "damage",
				"text" => "Damage dealt."
			),
			array(
				"type" => "ref bool", "name" => "crit",
				"text" => "Should the attack be a crit."
			),
			array(
				"type" => "ref float", "name" => "critMult",
				"text" => "Crit damage multiplier."
			)
		),
		"text" => "Called before this player damages another player directly (item swing)."
	),
	array(
		"hook" => "DamagePVP",
		"args" => array(
			array(
				"type" => "Projectile", "name" => "projectile",
				"text" => "The Projectile dealing damage."
			),
			array(
				"type" => "Player", "name" => "victim",
				"text" => "The Player being dealt damage."
			),
			array(
				"type" => "int", "name" => "hitDir",
				"text" => "Hit direction (used for knockback)."
			),
			array(
				"type" => "ref int", "name" => "damage",
				"text" => "Damage dealt."
			),
			array(
				"type" => "ref bool", "name" => "crit",
				"text" => "Should the attack be a crit."
			),
			array(
				"type" => "ref float", "name" => "critMult",
				"text" => "Crit damage multiplier."
			)
		),
		"text" => "Called before this player damages another player with a projectile."
	),
	array(
		"hook" => "DealtPVP",
		"args" => array(
			array(
				"type" => "Player", "name" => "victim",
				"text" => "The Player being dealt damage."
			),
			array(
				"type" => "int", "name" => "hitDir",
				"text" => "Hit direction (used for knockback)."
			),
			array(
				"type" => "int", "name" => "damage",
				"text" => "Damage dealt."
			),
			array(
				"type" => "bool", "name" => "crit",
				"text" => "Should the attack be a crit."
			)
		),
		"text" => "Called after this player damages another player directly (item swing)."
	),
	array(
		"hook" => "DealtPVP",
		"args" => array(
			array(
				"type" => "Projectile", "name" => "projectile",
				"text" => "The Projectile dealing damage."
			),
			array(
				"type" => "Player", "name" => "victim",
				"text" => "The Player being dealt damage."
			),
			array(
				"type" => "int", "name" => "hitDir",
				"text" => "Hit direction (used for knockback)."
			),
			array(
				"type" => "int", "name" => "damage",
				"text" => "Damage dealt."
			),
			array(
				"type" => "bool", "name" => "crit",
				"text" => "Should the attack be a crit."
			)
		),
		"text" => "Called after this player damages another player with a projectile."
	),

	array(
		"hook" => "DamageNPC",
		"args" => array(
			array(
				"type" => "NPC", "name" => "npc",
				"text" => "The NPC being dealt damage."
			),
			array(
				"type" => "int", "name" => "hitDir",
				"text" => "Hit direction (used for knockback)."
			),
			array(
				"type" => "ref int", "name" => "damage",
				"text" => "Damage dealt."
			),
			array(
				"type" => "ref bool", "name" => "crit",
				"text" => "Should the attack be a crit."
			),
			array(
				"type" => "ref float", "name" => "critMult",
				"text" => "Crit damage multiplier."
			)
		),
		"text" => "Called before this player damages an NPC directly (item swing)."
	),
	array(
		"hook" => "DamageNPC",
		"args" => array(
			array(
				"type" => "Projectile", "name" => "projectile",
				"text" => "The Projectile dealing damage."
			),
			array(
				"type" => "NPC", "name" => "npc",
				"text" => "The NPC being dealt damage."
			),
			array(
				"type" => "int", "name" => "hitDir",
				"text" => "Hit direction (used for knockback)."
			),
			array(
				"type" => "ref int", "name" => "damage",
				"text" => "Damage dealt."
			),
			array(
				"type" => "ref bool", "name" => "crit",
				"text" => "Should the attack be a crit."
			),
			array(
				"type" => "ref float", "name" => "critMult",
				"text" => "Crit damage multiplier."
			)
		),
		"text" => "Called before this player damages an NPC with a projectile."
	),
	array(
		"hook" => "DealtNPC",
		"args" => array(
			array(
				"type" => "NPC", "name" => "npc",
				"text" => "The NPC being dealt damage."
			),
			array(
				"type" => "int", "name" => "hitDir",
				"text" => "Hit direction (used for knockback)."
			),
			array(
				"type" => "int", "name" => "damage",
				"text" => "Damage dealt."
			),
			array(
				"type" => "bool", "name" => "crit",
				"text" => "Should the attack be a crit."
			)
		),
		"text" => "Called after this player damages an NPC directly (item swing)."
	),
	array(
		"hook" => "DealtNPC",
		"args" => array(
			array(
				"type" => "Projectile", "name" => "projectile",
				"text" => "The Projectile dealing damage."
			),
			array(
				"type" => "NPC", "name" => "npc",
				"text" => "The NPC being dealt damage."
			),
			array(
				"type" => "int", "name" => "hitDir",
				"text" => "Hit direction (used for knockback)."
			),
			array(
				"type" => "int", "name" => "damage",
				"text" => "Damage dealt."
			),
			array(
				"type" => "bool", "name" => "crit",
				"text" => "Should the attack be a crit."
			)
		),
		"text" => "Called after this player damages an NPC with a projectile."
	),

	array(
		"hook" => "CanHitPlayer",
		"args" => array(
			array(
				"type" => "NPC", "name" => "npc",
				"text" => "NPC in question."
			)
		),
		"return" => array("type" => "bool?", "default" => "null", "text" => "Whether the NPC can hit this player."),
		"text" => "Called when an NPC tries to hit a player."
	),

	array(
		"hook" => "CanHitPVP",
		"args" => array(
			array(
				"type" => "Player", "name" => "victim",
				"text" => "Player in question."
			)
		),
		"return" => array("type" => "bool?", "default" => "null", "text" => "Whether this Player can hit another player directly (item swing) in PVP."),
		"text" => "Called when this player tries to hit another player directly (item swing) in PVP."
	),
	array(
		"hook" => "CanHitPVP",
		"args" => array(
			array(
				"type" => "Projectile", "name" => "projectile",
				"text" => "Projectile in question."
			),
			array(
				"type" => "Player", "name" => "victim",
				"text" => "Player in question."
			)
		),
		"return" => array("type" => "bool?", "default" => "null", "text" => "Whether this Player can hit another player with a projectile in PVP."),
		"text" => "Called when this player tries to hit another player with a projectile in PVP."
	),

	array(
		"hook" => "CanHitNPC",
		"args" => array(
			array(
				"type" => "NPC", "name" => "npc",
				"text" => "NPC in question."
			)
		),
		"return" => array("type" => "bool?", "default" => "null", "text" => "Whether this Player can hit an NPC directly (item swing)."),
		"text" => "Called when this player tries to hit an NPC directly (item swing)."
	),
	array(
		"hook" => "CanHitNPC",
		"args" => array(
			array(
				"type" => "Projectile", "name" => "projectile",
				"text" => "Projectile in question."
			),
			array(
				"type" => "NPC", "name" => "npc",
				"text" => "NPC in question."
			)
		),
		"return" => array("type" => "bool?", "default" => "null", "text" => "Whether this Player can hit an NPC with a projectile."),
		"text" => "Called when this player tries to hit an NPC with a projectile."
	),

	array(
		"hook" => "OnHit",
		"args" => array(
			array(
				"type" => "NPC", "name" => "victim",
				"text" => "NPC being hit."
			),
			array(
				"type" => "Vector2", "name" => "location",
				"text" => "Hit location."
			)
		),
		"text" => "Called when an NPC gets hit by this player."
	),
	array(
		"hook" => "OnHit",
		"args" => array(
			array(
				"type" => "Player", "name" => "victim",
				"text" => "Player being hit."
			),
			array(
				"type" => "Vector2", "name" => "location",
				"text" => "Hit location."
			)
		),
		"text" => "Called when a Player gets hit by this player in PVP."
	),

	array(
		"hook" => "ModifyDrawLayerList",
		"args" => array(
			array(
				"type" => "List<PlayerLayer>", "name" => "list",
				"text" => "List of PlayerLayers to draw."
			)
		),
		"text" => "Called after queuing PlayerLayers for drawing, can be used to modify which layers should be drawn and/or add custom ones."
	),
	array(
		"hook" => "ModifyDrawLayerHeadList",
		"args" => array(
			array(
				"type" => "List<PlayerLayer>", "name" => "list",
				"text" => "List of PlayerLayers to draw."
			)
		),
		"text" => "Called after queuing PlayerLayers for drawing just the player head, can be used to modify which layers should be drawn and/or add custom ones."
	),
	array(
		"hook" => "DrawMapIcon",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			),
			array(
				"type" => "Vector2", "name" => "drawPosition",
				"text" => "The position to draw the icon at."
			),
			array(
				"type" => "float", "name" => "scale",
				"text" => "Icon's scale."
			),
			array(
				"type" => "Color", "name" => "color",
				"text" => "Icon's color."
			),
			array(
				"type" => "ref string", "name" => "cursorText",
				"text" => "The text to display in a tooltip when hovering over the icon."
			)
		),
		"text" => "Called after drawing a map icon for this player."
	),
	array(
		"hook" => "ModifyDrawColor",
		"args" => array(
			array(
				"type" => "Color", "name" => "color",
				"text" => "Current color to use for drawing the player."
			)
		),
		"return" => array("type" => "Color", "default" => "color", "text" => "Modified color."),
		"text" => "Called when drawing the player."
	),

	array(
		"hook" => "SetControls",
		"text" => "Called after caching the vanilla controls. Can be used to manipulate controls or add custom ones."
	),

	array(
		"hook" => "OnFishSelected",
		"args" => array(
			array(
				"type" => "Item", "name" => "fishingRod",
				"text" => "The fishing rod item used."
			),
			array(
				"type" => "Item", "name" => "bait",
				"text" => "The bait item used."
			),
			array(
				"type" => "int", "name" => "liquidType",
				"text" => "The liquid fished in. <code>0</code> - water, <code>1</code> - lava, <code>2</code> - honey."
			),
			array(
				"type" => "int", "name" => "poolCount",
				"text" => "Amount of liquid tiles in the pool."
			),
			array(
				"type" => "int", "name" => "worldLayer",
				"text" => "The height layer fished in. <code>0</code> - sky, <code>1</code> - surface, <code>2</code> - dirt, <code>3</code> - rock, <code>4</code> - hell."
			),
			array(
				"type" => "int", "name" => "questFish",
				"text" => "Current quest fish item type."
			),
			array(
				"type" => "ref int", "name" => "caughtType",
				"text" => "The item type of the fish to be caught. <code>-1</code> means a broken line (nothing caught)."
			)
		),
		"text" => "Called when a fish takes the bait while fishing, determining the fish to be caught."
	),
	array(
		"hook" => "GetFishingLevel",
		"args" => array(
			array(
				"type" => "Item", "name" => "fishingRod",
				"text" => "The fishing rod item used."
			),
			array(
				"type" => "Item", "name" => "bait",
				"text" => "The bait item used."
			),
			array(
				"type" => "ref int", "name" => "fishingLevel",
				"text" => "Current fishing level."
			)
		),
		"text" => "Called when player's fishing level is being determined."
	),
	array(
		"hook" => "AnglerQuestReward",
		"args" => array(
			array(
				"type" => "float", "name" => "quality",
				"text" => "Quality of the rewards depending on finished quests."
			),
			array(
				"type" => "List<Item>", "name" => "rewardItems",
				"text" => "The list of the rewards."
			)
		),
		"text" => "Called when a player is being given fishing quest rewards."
	),

	array(
		"hook" => "AutoSelectOnTile",
		"text" => "&lt;no description yet&gt;",
		"warning" => true
	)
);

?>