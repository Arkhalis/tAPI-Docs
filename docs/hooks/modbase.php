<?php

$GLOBALS["hooksInfo"] = array(
	"header" => "ModBase"
);

$GLOBALS["hooks"] = array(
	array(
		"hook" => "OnLoad",
		"text" => "Called when the mod gets loaded."
	),
	array(
		"hook" => "OnUnload",
		"text" => "Called when the mod gets unloaded."
	),
	array(
		"hook" => "OnAllModsLoaded",
		"text" => "Called after all mods get loaded."
	),

	array(
		"hook" => "ChooseTrack",
		"args" => array(
			array(
				"type" => "ref string", "name" => "current",
				"text" => "Current music track name to play. Change the value to change the track played."
			)
		),
		"text" => "Called each frame when the game decides which music track to play."
	),

	array(
		"hook" => "PreGameDraw",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			)
		),
		"text" => "Called each frame before anything gets drawn."
	),
	array(
		"hook" => "PostGameDraw",
		"args" => array(
			array(
				"type" => "SpriteBatch", "name" => "sb",
				"text" => "SpriteBatch instance used to do all the drawing."
			)
		),
		"text" => "Called each frame after everything gets drawn."
	),

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
	)
);

?>