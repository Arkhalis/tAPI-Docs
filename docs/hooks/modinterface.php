<?php

$GLOBALS["hooksInfo"] = array(
	"header" => "ModInterface"
);

$GLOBALS["hooks"] = array(
	array(
		"hook" => "OnCombatTextSpawn",
		"args" => array(
			array(
				"type" => "ref CombatText", "name" => "combattext",
				"text" => "New CombatText instance."
			),
			array(
				"type" => "Rectangle", "name" => "location",
				"text" => "Bounding box of the CombatText."
			)
		),
		"text" => "Called when a new CombatText instance is created (damage being dealt)."
	),
	array(
		"hook" => "OnItemTextSpawn",
		"args" => array(
			array(
				"type" => "ref ItemText", "name" => "itemtext",
				"text" => "New ItemText instance."
			),
			array(
				"type" => "Item", "name" => "item",
				"text" => "Item for which the ItemText was created."
			)
		),
		"text" => "Called when a new ItemText instance is created (item being picked up / crafted / reforged)."
	),
	
	array(
		"hook" => "ModifyInterfaceLayerList",
		"args" => array(
			array(
				"type" => "List<InterfaceLayer>", "name" => "list",
				"text" => "The list of all interface layers."
			)
		),
		"text" => "Called after all the vanilla InterfaceLayers are setup, allowing to modify which layers are visible and allowing to add custom layers."
	),

	array(
		"hook" => "PreDrawInterface",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			)
		),
		"return" => array("type" => "bool", "default" => "true", "text" => "Whether the interface should be drawn."),
		"text" => "Called before the interface gets drawn."
	),
	array(
		"hook" => "PostDrawInterface",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			)
		),
		"text" => "Called after the interface gets drawn."
	),

	array(
		"hook" => "PreDrawInventory",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			)
		),
		"return" => array("type" => "bool", "default" => "true", "text" => "Whether the inventory part should be drawn."),
		"text" => "Called before the inventory part of the interface gets drawn."
	),
	array(
		"hook" => "PostDrawInventory",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			)
		),
		"text" => "Called after the inventory part of the interface gets drawn."
	),

	array(
		"hook" => "PreDrawCrafting",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			)
		),
		"return" => array("type" => "bool", "default" => "true", "text" => "Whether the crafting part should be drawn."),
		"text" => "Called before the crafting part of the interface gets drawn."
	),
	array(
		"hook" => "PostDrawCrafting",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			)
		),
		"text" => "Called after the crafting part of the interface gets drawn."
	),

	array(
		"hook" => "PreDrawMap",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			)
		),
		"return" => array("type" => "bool", "default" => "true", "text" => "Whether the map should be drawn."),
		"text" => "Called before the map gets drawn."
	),
	array(
		"hook" => "PostDrawMap",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			)
		),
		"text" => "Called after the map gets drawn."
	),

	array(
		"hook" => "PreDrawTooltipText",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			),
			array(
				"type" => "string", "name" => "context",
				"text" => "Tooltip context - type of the thing drawing the tooltip, in the format of <code>{modName}:{type}</code>."
			),
			array(
				"type" => "ref string", "name" => "text",
				"text" => "The text to be drawn."
			),
			array(
				"type" => "ref int", "name" => "rare",
				"text" => "Item rarity color to use when drawing."
			)
		),
		"return" => array("type" => "bool", "default" => "true", "text" => "Whether the basic text tooltip should be drawn."),
		"text" => "Called before a basic text tooltip gets drawn."
	),
	array(
		"hook" => "PostDrawTooltipText",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			),
			array(
				"type" => "string", "name" => "context",
				"text" => "Tooltip context - type of the thing drawing the tooltip, in the format of <code>{modName}:{type}</code>."
			),
			array(
				"type" => "string", "name" => "text",
				"text" => "The text to be drawn."
			),
			array(
				"type" => "int", "name" => "rare",
				"text" => "Item rarity color to use when drawing."
			)
		),
		"text" => "Called after a basic text tooltip gets drawn."
	),

	array(
		"hook" => "PreDrawTooltipItem",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			),
			array(
				"type" => "Item", "name" => "item",
				"text" => "The item to for which the tooltip is to be drawn."
			),
			array(
				"type" => "ref string", "name" => "text",
				"text" => "The tooltip caption to be drawn."
			),
			array(
				"type" => "ref int", "name" => "rare",
				"text" => "Item rarity color to use when drawing the caption."
			)
		),
		"return" => array("type" => "bool", "default" => "true", "text" => "Whether the item tooltip should be drawn."),
		"text" => "Called before an item tooltip gets drawn."
	),
	array(
		"hook" => "PostDrawTooltipItem",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			),
			array(
				"type" => "Item", "name" => "item",
				"text" => "The item to for which the tooltip is to be drawn."
			),
			array(
				"type" => "string", "name" => "text",
				"text" => "The tooltip caption to be drawn."
			),
			array(
				"type" => "int", "name" => "rare",
				"text" => "Item rarity color to use when drawing the caption."
			)
		),
		"text" => "Called after an item tooltip gets drawn."
	),

	array(
		"hook" => "PreDrawTooltipLocalHealth",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			),
			array(
				"type" => "ref string", "name" => "text",
				"text" => "The text to be drawn."
			)
		),
		"return" => array("type" => "bool", "default" => "true", "text" => "Whether the local health tooltip should be drawn."),
		"text" => "Called before a local health tooltip (the one displaying when hovering over player life on screen) gets drawn."
	),
	array(
		"hook" => "PostDrawTooltipLocalHealth",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			),
			array(
				"type" => "string", "name" => "text",
				"text" => "The text to be drawn."
			)
		),
		"text" => "Called after a local health tooltip (the one displaying when hovering over player life on screen) gets drawn."
	),

	array(
		"hook" => "PreDrawTooltipLocalMana",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			),
			array(
				"type" => "ref string", "name" => "text",
				"text" => "The text to be drawn."
			)
		),
		"return" => array("type" => "bool", "default" => "true", "text" => "Whether the local mana tooltip should be drawn."),
		"text" => "Called before a local mana tooltip (the one displaying when hovering over player mana on screen) gets drawn."
	),
	array(
		"hook" => "PostDrawTooltipLocalMana",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			),
			array(
				"type" => "string", "name" => "text",
				"text" => "The text to be drawn."
			)
		),
		"text" => "Called after a local mana tooltip (the one displaying when hovering over player mana on screen) gets drawn."
	),

	array(
		"hook" => "PreDrawTooltipItemInWorld",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			),
			array(
				"type" => "Item", "name" => "item",
				"text" => "Item for which the tooltip should be displayed."
			),
			array(
				"type" => "ref string", "name" => "text",
				"text" => "The text to be drawn."
			),
			array(
				"type" => "ref int", "name" => "rare",
				"text" => "Item rarity color to use when drawing."
			)
		),
		"return" => array("type" => "bool", "default" => "true", "text" => "Whether the item-in-world tooltip should be drawn."),
		"text" => "Called before an item-in-world tooltip gets drawn."
	),
	array(
		"hook" => "PostDrawTooltipItemInWorld",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			),
			array(
				"type" => "Item", "name" => "item",
				"text" => "Item for which the tooltip should be displayed."
			),
			array(
				"type" => "string", "name" => "text",
				"text" => "The text to be drawn."
			),
			array(
				"type" => "int", "name" => "rare",
				"text" => "Item rarity color to use when drawing."
			)
		),
		"text" => "Called after an item-in-world tooltip gets drawn."
	),

	array(
		"hook" => "PreDrawTooltipPlayer",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			),
			array(
				"type" => "Player", "name" => "player",
				"text" => "Player for which the tooltip should be displayed."
			),
			array(
				"type" => "ref string", "name" => "text",
				"text" => "The text to be drawn."
			),
			array(
				"type" => "ref int", "name" => "difficulty",
				"text" => "Player difficulty color to use when drawing."
			)
		),
		"return" => array("type" => "bool", "default" => "true", "text" => "Whether the player tooltip should be drawn."),
		"text" => "Called before a player tooltip gets drawn."
	),
	array(
		"hook" => "PostDrawTooltipPlayer",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			),
			array(
				"type" => "Player", "name" => "player",
				"text" => "Player for which the tooltip should be displayed."
			),
			array(
				"type" => "string", "name" => "text",
				"text" => "The text to be drawn."
			),
			array(
				"type" => "int", "name" => "difficulty",
				"text" => "Player difficulty color to use when drawing."
			)
		),
		"text" => "Called after a player tooltip gets drawn."
	),

	array(
		"hook" => "PreDrawTooltipNPC",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			),
			array(
				"type" => "NPC", "name" => "npc",
				"text" => "NPC for which the tooltip should be displayed."
			),
			array(
				"type" => "ref bool", "name" => "isHidingMimic",
				"text" => "Whether the NPC is currently hiding (mimics)."
			),
			array(
				"type" => "ref string", "name" => "text",
				"text" => "The text to be drawn."
			)
		),
		"return" => array("type" => "bool", "default" => "true", "text" => "Whether the NPC tooltip should be drawn."),
		"text" => "Called before a NPC tooltip gets drawn."
	),
	array(
		"hook" => "PostDrawTooltipNPC",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			),
			array(
				"type" => "NPC", "name" => "npc",
				"text" => "NPC for which the tooltip should be displayed."
			),
			array(
				"type" => "bool", "name" => "isHidingMimic",
				"text" => "Whether the NPC is currently hiding (mimics)."
			),
			array(
				"type" => "string", "name" => "text",
				"text" => "The text to be drawn."
			)
		),
		"text" => "Called after a NPC tooltip gets drawn."
	),

	array(
		"hook" => "PreDrawItemSlot",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			),
			array(
				"type" => "ItemSlot", "name" => "slot",
				"text" => "ItemSlot instance to be drawn."
			)
		),
		"return" => array("type" => "bool", "default" => "true", "text" => "Whether the ItemSlot should be drawn."),
		"text" => "Called before an ItemSlot gets drawn."
	),
	array(
		"hook" => "PostDrawItemSlot",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			),
			array(
				"type" => "ItemSlot", "name" => "slot",
				"text" => "ItemSlot instance to be drawn."
			)
		),
		"text" => "Called after an ItemSlot gets drawn."
	),

	array(
		"hook" => "PreDrawItemSlotBackground",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			),
			array(
				"type" => "ItemSlot", "name" => "slot",
				"text" => "ItemSlot instance to be drawn."
			)
		),
		"return" => array("type" => "bool", "default" => "true", "text" => "Whether the ItemSlot's background layer should be drawn."),
		"text" => "Called before an ItemSlot's background layer gets drawn."
	),
	array(
		"hook" => "PostDrawItemSlotBackground",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			),
			array(
				"type" => "ItemSlot", "name" => "slot",
				"text" => "ItemSlot instance to be drawn."
			)
		),
		"text" => "Called after an ItemSlot's background layer gets drawn."
	),

	array(
		"hook" => "PreDrawItemSlotItem",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			),
			array(
				"type" => "ItemSlot", "name" => "slot",
				"text" => "ItemSlot instance to be drawn."
			)
		),
		"return" => array("type" => "bool", "default" => "true", "text" => "Whether the ItemSlot's item layer should be drawn."),
		"text" => "Called before an ItemSlot's item layer gets drawn."
	),
	array(
		"hook" => "PostDrawItemSlotItem",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			),
			array(
				"type" => "ItemSlot", "name" => "slot",
				"text" => "ItemSlot instance to be drawn."
			)
		),
		"text" => "Called after an ItemSlot's item layer gets drawn."
	),

	array(
		"hook" => "PreItemSlotLeftClick",
		"args" => array(
			array(
				"type" => "ItemSlot", "name" => "slot",
				"text" => "Clicked ItemSlot instance."
			),
			array(
				"type" => "ref bool", "name" => "release",
				"text" => "Whether it's the first frame of the click."
			)
		),
		"return" => array("type" => "bool", "default" => "true", "text" => "Whether the default ItemSlot left click code should be called."),
		"text" => "Called before the default ItemSlot left click code gets called."
	),
	array(
		"hook" => "PostItemSlotLeftClick",
		"args" => array(
			array(
				"type" => "ItemSlot", "name" => "slot",
				"text" => "Clicked ItemSlot instance."
			),
			array(
				"type" => "bool", "name" => "release",
				"text" => "Whether it's the first frame of the click."
			)
		),
		"text" => "Called after the default ItemSlot left click code gets called."
	),

	array(
		"hook" => "PreItemSlotRightClick",
		"args" => array(
			array(
				"type" => "ItemSlot", "name" => "slot",
				"text" => "Clicked ItemSlot instance."
			),
			array(
				"type" => "ref bool", "name" => "release",
				"text" => "Whether it's the first frame of the click."
			)
		),
		"return" => array("type" => "bool", "default" => "true", "text" => "Whether the default ItemSlot right click code should be called."),
		"text" => "Called before the default ItemSlot right click code gets called."
	),
	array(
		"hook" => "PostItemSlotRightClick",
		"args" => array(
			array(
				"type" => "ItemSlot", "name" => "slot",
				"text" => "Clicked ItemSlot instance."
			),
			array(
				"type" => "bool", "name" => "release",
				"text" => "Whether it's the first frame of the click."
			)
		),
		"text" => "Called after the default ItemSlot right click code gets called."
	),

	array(
		"hook" => "ItemSlotAllowsItem",
		"args" => array(
			array(
				"type" => "ItemSlot", "name" => "slot",
				"text" => "ItemSlot in question."
			),
			array(
				"type" => "Item", "name" => "item",
				"text" => "Item in question."
			)
		),
		"return" => array("type" => "bool?", "default" => "null", "text" => "Whether the ItemSlot allows the Item to be placed in it. Return <code>null</code> if you don't want to change the action for this item."),
		"text" => "Called when an Item is supposed to be placed in an ItemSlot."
	),

	array(
		"hook" => "KeyboardInputFocused",
		"return" => array("type" => "bool", "default" => "false", "text" => "Whether to block keyboard input (player movement)."),
		"text" => "Called before any keyboard input (for player movement) is checked."
	),
	array(
		"hook" => "OverrideChat",
		"return" => array("type" => "bool", "default" => "false", "text" => "Whether the Enter key should open the chat input window."),
		"text" => "Called when a player presses the Enter key."
	)
);

?>