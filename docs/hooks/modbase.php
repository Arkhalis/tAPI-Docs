<?php

$GLOBALS["hooksInfo"] = array(
	"header" => "ModBase"
);

$GLOBALS["hooks"] = array(
	array(
		"hook" => "OnLoad",
		"text" => "Called when the mod gets loaded (the whole code is already prepared to be used and all resources are loaded)."
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
		"hook" => "OptionChanged",
		"args" => array(
			array(
				"type" => "Option", "name" => "option",
				"text" => "Mod option."
			)
		),
		"text" => "Called when leaving the options page for each option."
	),
	array(
		"hook" => "OptionList",
		"args" => array(
			array(
				"type" => "Option", "name" => "option",
				"text" => "Mod option."
			)
		),
		"return" => array("type" => "List<string>", "default" => "null", "text" => "The list of possible values."),
		"text" => "Called on options of type <code>Dynamic</code> to fill <code>possibleValues</code>."
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
		"hook" => "OnModCall",
		"args" => array(
			array(
				"type" => "ModBase", "name" => "mod",
				"text" => "Calling mod's ModBase instance."
			),
			array(
				"type" => "params object[]", "name" => "args",
				"text" => "Arguments passed to this mod."
			)
		),
		"text" => "Triggered by other mods. Can be used for adding simple cross-mod code execution without adding a mod dependency."
	),
);

?>