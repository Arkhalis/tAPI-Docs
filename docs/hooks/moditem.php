<?php

$GLOBALS["hooksInfo"] = array(
	"header" => "ModBase"
);

$GLOBALS["hooks"] = array(
	array(
		"hook" => "OnUpdate",
		"args" => array(
			array(
				"type" => "ref float", "name" => "gravity",
				"text" => "needDesc"
			),
			array(
				"type" => "ref float", "name" => "maxVelocity",
				"text" => "needDesc"
			)
			
		),
		"text" => "Called on items in world, useful for making soul-like items."
	),
	array(
		"hook" => "PreWorldDraw",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "needDesc"
			)
		),
		"return" => array("type" => "bool", "text" => "needDesc"),
		"text" => "needDesc"
	),
	array(
		"hook" => "PostWorldDraw",
		"text" => "needDesc"
	),
	array(
		"hook" => "CanPickup",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "needDesc"
			),
			array(
				"type" => "bool", "name" => "vacuum",
				"text" => "When true, the item is being vaccumed towards the player and not actually being picked up."
			)
		),
		"return" => array("type" => "bool", "text" => "needDesc - Return false to not pick up"),
		"text" => "Called when an item comes in range of being picked up"
	),
	array(
		"hook" => "OnPickup",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "needDesc"
			)
		),
		"return" => array("type" => "bool", "text" => "needDesc - Return false to cause the item to dissapear (like hearts and mana stars)"),
		"text" => "needDesc - Called when an item is picked up by the player"
	),
	array(
		"hook" => "UseItem",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "needDesc"
			)
		),
		"text" => "Called when an item is used by the player"
	),
	array(
		"hook" => "UseItemEffects",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "needDesc"
			),
			array(
				"type" => "Rectangle", "name" => "rect",
				"text" => "needDesc"
			)
		),
		"text" => "needDesc"
	),
	array(
		"hook" => "CanUse",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "needDesc"
			)
		),
		"return" => array("type" => "bool", "text" => "needDesc"),
		"text" => "needDesc"
	),
	array(
		"hook" => "ConsumeItem",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "needDesc"
			)
		),
		"return" => array("type" => "bool", "text" => "needDesc"),
		"text" => "needDesc"
	),
	array(
		"hook" => "ConsumeAmmo",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "needDesc"
			)
		),
		"return" => array("type" => "bool", "text" => "needDesc"),
		"text" => "needDesc"
	),
	array(
		"hook" => "ConsumeBait",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "needDesc"
			)
		),
		"return" => array("type" => "bool", "text" => "needDesc"),
		"text" => "needDesc"
	),
	array(
		"hook" => "UseStyle",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "needDesc"
			)
		),
		"text" => "needDesc"
	),
	array(
		"hook" => "HoldStyle",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "needDesc"
			)
		),
		"text" => "needDesc"
	),
	array(
		"hook" => "SetUseFrame",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "needDesc"
			)
		),
		"text" => "needDesc"
	),
	array(
		"hook" => "SetHoldFrame",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "needDesc"
			)
		),
		"return" => array("bool" => "bool", "text" => "needDesc - return true to override the frame and false to allow normal behavior (ie hook frames)."),
		"text" => "needDesc"
	),
	array(
		"hook" => "SetUseHitbox",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "needDesc"
			),
			array(
				"type" => "Rectangle", "name" => "rect",
				"text" => "needDesc"
			)
		),
		"return" => array("Rectangle" => "bool", "text" => "needDesc"),
		"text" => "needDesc"
	),
	array(
		"hook" => "PreItemCheck",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "needDesc"
			)
		),
		"text" => "needDesc - Called before item check executes"
	),
	array(
		"hook" => "PostItemCheck",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "needDesc"
			)
		),
		"text" => "needDesc - Called after item check executes"
	),
	array(
		"hook" => "OnBuy",
		"args" => array(
			array(
				"type" => "Chest", "name" => "shop",
				"text" => "needDesc"
			),
			array(
				"type" => "int", "name" => "slot",
				"text" => "needDesc"
			),
			array(
				"type" => "Item", "name" => "item",
				"text" => "needDesc"
			)
		),
		"text" => "needDesc"
	),
	array(
		"hook" => "OnCraft",
		"args" => array(
			array(
				"type" => "Recipe", "name" => "recipe",
				"text" => "needDesc"
			)
		),
		"text" => "needDesc"
	),
	array(
		"hook" => "OnAffixName",
		"args" => array(
			array(
				"type" => "string", "name" => "currentName",
				"text" => "needDesc"
			),
			array(
				"type" => "string", "name" => "oldName",
				"text" => "needDesc"
			)
		),
		"return" => array("string" => "bool", "text" => "needDesc"),
		"text" => "needDesc"
	),
	array(
		"hook" => "PreReforge",
		"return" => array("type" => "bool", "text" => "needDesc"),
		"text" => "needDesc"
	),
	array(
		"hook" => "PostReforge",
		"text" => "needDesc"
	),
	array(
		"hook" => "PreShoot",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "needDesc"
			),
			array(
				"type" => "Vector2", "name" => "position",
				"text" => "needDesc"
			),
			array(
				"type" => "Vector2", "name" => "velocity",
				"text" => "needDesc"
			),
			array(
				"type" => "int", "name" => "projType",
				"text" => "needDesc"
			),
			array(
				"type" => "int", "name" => "damage",
				"text" => "needDesc"
			),
			array(
				"type" => "float", "name" => "knockback",
				"text" => "needDesc"
			)
		),
		"return" => array("type" => "bool", "text" => "needDesc"),
		"text" => "needDesc"
	),
	array(
		"hook" => "CanEquip",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "needDesc"
			),
			array(
				"type" => "int", "name" => "slot",
				"text" => "needDesc"
			)
		),
		"return" => array("type" => "bool", "text" => "needDesc"),
		"text" => "needDesc"
	),
	array(
		"hook" => "OnEquip",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "needDesc"
			),
			array(
				"type" => "int", "name" => "slot",
				"text" => "needDesc"
			)
		),
		"text" => "needDesc"
	),
	array(
		"hook" => "OnUnEquip",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "needDesc"
			),
			array(
				"type" => "int", "name" => "slot",
				"text" => "needDesc"
			)
		),
		"text" => "needDesc"
	),
	array(
		"hook" => "Effects",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "needDesc"
			)
		),
		"text" => "needDesc"
	),
	array(
		"hook" => "VanityEffects",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "needDesc"
			)
		),
		"text" => "needDesc"
	),
	array(
		"hook" => "ArmorSetBonus",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "needDesc"
			)
		),
		"text" => "Called when a full armor set is worn"
	),
	array(
		"hook" => "VanitySetBonus",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "needDesc"
			)
		),
		"text" => "Called when a full armor set is visually worn"
	),
	array(
		"hook" => "IsArmorSet",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "needDesc"
			),
			array(
				"type" => "bool", "name" => "vanity",
				"text" => "needDesc"
			)
		),
		"return" => array("type" => "bool", "text" => "needDesc"),
		"text" => "needDesc"
	),
	array(
		"hook" => "DyeHair",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "needDesc"
			),
			array(
				"type" => "Color", "name" => "dyeColor",
				"text" => "needDesc"
			),
			array(
				"type" => "ref bool", "name" => "glows",
				"text" => "needDesc"
			)
		),
		"return" => array("type" => "Color", "text" => "needDesc"),
		"text" => "needDesc"
	),
	array(
		"hook" => "DamagePlayer",
		"args" => array(
			array(
				"type" => "NPC", "name" => "attacker",
				"text" => "needDesc"
			),
			array(
				"type" => "Player", "name" => "target",
				"text" => "needDesc"
			),
			array(
				"type" => "int", "name" => "hitDir",
				"text" => "needDesc"
			),
			array(
				"type" => "ref int", "name" => "damage",
				"text" => "needDesc"
			),
			array(
				"type" => "ref bool", "name" => "crit",
				"text" => "needDesc"
			),
			array(
				"type" => "ref float", "name" => "critMult",
				"text" => "needDesc"
			)
		),
		"text" => "needDesc"
	),
	array(
		"hook" => "DealtPlayer",
		"args" => array(
			array(
				"type" => "NPC", "name" => "attacker",
				"text" => "needDesc"
			),
			array(
				"type" => "Player", "name" => "target",
				"text" => "needDesc"
			),
			array(
				"type" => "int", "name" => "hitDir",
				"text" => "needDesc"
			),
			array(
				"type" => "int", "name" => "dmgDealt",
				"text" => "needDesc"
			),
			array(
				"type" => "bool", "name" => "crit",
				"text" => "needDesc"
			)
		),
		"text" => "needDesc"
	),
	array(
		"hook" => "DamagePVP",
		"args" => array(
			array(
				"type" => "Player", "name" => "owner",
				"text" => "needDesc"
			),
			array(
				"type" => "Player", "name" => "victim",
				"text" => "needDesc"
			),
			array(
				"type" => "int", "name" => "hitDir",
				"text" => "needDesc"
			),
			array(
				"type" => "ref int", "name" => "damage",
				"text" => "needDesc"
			),
			array(
				"type" => "ref bool", "name" => "crit",
				"text" => "needDesc"
			),
			array(
				"type" => "ref float", "name" => "critMult",
				"text" => "needDesc"
			)
		),
		"text" => "needDesc"
	),
	array(
		"hook" => "DealtPVP",
		"args" => array(
			array(
				"type" => "Player", "name" => "owner",
				"text" => "needDesc"
			),
			array(
				"type" => "Player", "name" => "victim",
				"text" => "needDesc"
			),
			array(
				"type" => "int", "name" => "hitDir",
				"text" => "needDesc"
			),
			array(
				"type" => "int", "name" => "dmgDealt",
				"text" => "needDesc"
			),
			array(
				"type" => "bool", "name" => "crit",
				"text" => "needDesc"
			)
		),
		"text" => "needDesc"
	),
	array(
		"hook" => "DamageNPC",
		"args" => array(
			array(
				"type" => "Player", "name" => "owner",
				"text" => "needDesc"
			),
			array(
				"type" => "NPC", "name" => "victim",
				"text" => "needDesc"
			),
			array(
				"type" => "int", "name" => "hitDir",
				"text" => "needDesc"
			),
			array(
				"type" => "ref int", "name" => "damage",
				"text" => "needDesc"
			),
			array(
				"type" => "ref float", "name" => "knockback",
				"text" => "needDesc"
			),
			array(
				"type" => "ref bool", "name" => "crit",
				"text" => "needDesc"
			),
			array(
				"type" => "ref float", "name" => "critMult",
				"text" => "needDesc"
			)
		),
		"text" => "needDesc"
	),
	array(
		"hook" => "DealtNPC",
		"args" => array(
			array(
				"type" => "Player", "name" => "owner",
				"text" => "needDesc"
			),
			array(
				"type" => "NPC", "name" => "victim",
				"text" => "needDesc"
			),
			array(
				"type" => "int", "name" => "hitDir",
				"text" => "needDesc"
			),
			array(
				"type" => "int", "name" => "dmgDealt",
				"text" => "needDesc"
			),
			array(
				"type" => "float", "name" => "knockback",
				"text" => "needDesc"
			),
			array(
				"type" => "bool", "name" => "crit",
				"text" => "needDesc"
			)
		),
		"text" => "needDesc"
	),
	array(
		"hook" => "CanHitPlayer",
		"args" => array(
			array(
				"type" => "NPC", "name" => "attacker",
				"text" => "needDesc"
			),
			array(
				"type" => "Player", "name" => "target",
				"text" => "needDesc"
			)
		),
		"return" => array("type" => "bool?", "text" => "needDesc"),
		"text" => "needDesc"
	),
	array(
		"hook" => "CanHitPVP",
		"args" => array(
			array(
				"type" => "Player", "name" => "owner",
				"text" => "needDesc"
			),
			array(
				"type" => "Player", "name" => "victim",
				"text" => "needDesc"
			)
		),
		"return" => array("type" => "bool?", "text" => "needDesc"),
		"text" => "needDesc"
	),
	array(
		"hook" => "CanHitNPC",
		"args" => array(
			array(
				"type" => "Player", "name" => "owner",
				"text" => "needDesc"
			),
			array(
				"type" => "NPC", "name" => "victim",
				"text" => "needDesc"
			)
		),
		"return" => array("type" => "bool?", "text" => "needDesc"),
		"text" => "needDesc"
	),
	array(
		"hook" => "OnHitPVP",
		"args" => array(
			array(
				"type" => "Player", "name" => "owner",
				"text" => "needDesc"
			),
			array(
				"type" => "Player", "name" => "victim",
				"text" => "needDesc"
			)
		),
		"text" => "needDesc"
	),
	array(
		"hook" => "OnHitNPC",
		"args" => array(
			array(
				"type" => "Player", "name" => "owner",
				"text" => "needDesc"
			),
			array(
				"type" => "NPC", "name" => "victim",
				"text" => "needDesc"
			),
			array(
				"type" => "Vector2", "name" => "hitLocation",
				"text" => "needDesc"
			)
		),
		"text" => "needDesc"
	),
	array(
		"hook" => "GetFishingLevel",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "needDesc"
			),
			array(
				"type" => "Item", "name" => "bait",
				"text" => "needDesc"
			),
			array(
				"type" => "ref int", "name" => "fishingLevel",
				"text" => "needDesc"
			)
		),
		"text" => "needDesc"
	),
	array(
		"hook" => "OnFishSelected",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "needDesc"
			),
			array(
				"type" => "Item", "name" => "fishingRod",
				"text" => "needDesc"
			),
			array(
				"type" => "Item", "name" => "bait",
				"text" => "needDesc"
			),
			array(
				"type" => "int", "name" => "liquidType",
				"text" => "needDesc - liquidType: 0-2, water, lava, honey"
			),
			array(
				"type" => "int", "name" => "poolCount",
				"text" => "needDesc - poolCount = the amount of water tiles in the pool"
			),
			array(
				"type" => "int", "name" => "worldLayer",
				"text" => "needDesc - worldLayer: 0-4, sky, surface, dirtlayer, rocklayer, hell"
			),
			array(
				"type" => "int", "name" => "questFish",
				"text" => "needDesc"
			),
			array(
				"type" => "ref int", "name" => "caughtType",
				"text" => "needDesc - if caughtType is -1, it will bobber but not spawn any item when brought back, allowing for unconventional catches"
			)
		),
		"text" => "needDesc"
	),
	array(
		"hook" => "ModifyDrawLayerList",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "needDesc"
			),
			array(
				"type" => "List<PlayerLayer>", "name" => "list",
				"text" => "needDesc"
			),
			array(
				"type" => "List<PlayerLayer>", "name" => "list",
				"text" => "needDesc"
			),
		),
		"text" => "needDesc"
	),
	array(
		"hook" => "ModifyDrawLayerHeadList",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "needDesc"
			),
			array(
				"type" => "List<PlayerLayer>", "name" => "list",
				"text" => "needDesc"
			),
			array(
				"type" => "List<PlayerLayer>", "name" => "list",
				"text" => "needDesc"
			),
		),
		"text" => "needDesc"
	),
	array(
		"hook" => "ModifyDrawColor",
		"args" => array(
			array(
				"type" => "Player", "name" => "owner",
				"text" => "see zetaPrime for explanation"
			),
			array(
				"type" => "Color", "name" => "color",
				"text" => "see zetaPrime for explanation"
			)
		),
		"return" => array("type" => "Color", "text" => "needDesc"),
		"text" => "see zetaPrime for explanation"
	),
	array(
		"hook" => "ModifyToolTip",
		"args" => array(
			array(
				"type" => "Player", "name" => "owner",
				"text" => "see zetaPrime for explanation"
			),
			array(
				"type" => "List<string>", "name" => "list",
				"text" => "see zetaPrime for explanation"
			)
		),
		"text" => "see zetaPrime for explanation"
	)

);

?>