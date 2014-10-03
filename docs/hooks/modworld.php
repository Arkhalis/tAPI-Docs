<?php

$GLOBALS["hooksInfo"] = array(
	"header" => "ModWorld"
);

$GLOBALS["hooks"] = array(
	array(
		"hook" => "Initialize",
		"text" => "Called before the game goes into the gameplay mode."
	),
	array(
		"hook" => "Save",
		"args" => array(
			array(
				"type" => "BinBuffer", "name" => "bb",
				"text" => "Binary buffer to write mod data to."
			)
		),
		"text" => "Called when the world is being saved."
	),
	array(
		"hook" => "Load",
		"args" => array(
			array(
				"type" => "BinBuffer", "name" => "bb",
				"text" => "Binary buffer to read mod data from."
			)
		),
		"text" => "Called when the world is being loaded."
	),

	array(
		"hook" => "PostUpdate",
		"text" => "Called every frame when the world updates (in singleplayer and on the server)."
	),

	array(
		"hook" => "CheckChristmas",
		"return" => array("type" => "bool?", "default" => "null", "text" => "Whether it should be Christmas in-game (return <code>null</code> to leave the default)."),
		"text" => "Called when the game rechecks the Christmas status."
	),
	array(
		"hook" => "CheckHalloween",
		"return" => array("type" => "bool?", "default" => "null", "text" => "Whether it should be Halloween in-game (return <code>null</code> to leave the default)."),
		"text" => "Called when the game rechecks the Halloween status."
	),

	array(
		"hook" => "WorldGenPostInit",
		"text" => "Called after the world generation process finishes initializing."
	),
	array(
		"hook" => "WorldGenModifyTaskList",
		"args" => array(
			array(
				"type" => "List<WorldGenTask>", "name" => "list",
				"text" => "List of all pending world generation tasks."
			)
		),
		"text" => "Called after queuing world generation tasks, can be used to modify which tasks should be done and/or add custom tasks."
	),
	array(
		"hook" => "WorldGenPostGen",
		"text" => "Called after the whole world generation process."
	),
	array(
		"hook" => "WorldGenModifyHardmodeTaskList",
		"args" => array(
			array(
				"type" => "List<WorldGenTask>", "name" => "list",
				"text" => "List of all pending world generation tasks."
			)
		),
		"text" => "Called after queuing world generation tasks when switching the world to hardmode, can be used to modify which tasks should be done and/or add custom tasks."
	),

	array(
		"hook" => "PreHitWire",
		"args" => array(
			array(
				"type" => "int", "name" => "x",
				"text" => "Tile X position."
			),
			array(
				"type" => "int", "name" => "y",
				"text" => "Tile Y position."
			),
			array(
				"type" => "int", "name" => "wireType",
				"text" => "Type of the wire being triggered (1/2/3)"
			)
		),
		"return" => array("type" => "bool", "default" => "true", "text" => "Whether the wire current should go further."),
		"text" => "Called when a wire current goes through a tile.",
		"warning" => true //not sure about the 'return' and 'text' and 'wireType' (if it's 1/2/3 really)
	),

	array(
		"hook" => "PlayerConnected",
		"args" => array(
			array(
				"type" => "int", "name" => "index",
				"text" => "Index of the connecting player in the Main.player array."
			)
		),
		"text" => "Called when a player joins the server.",
		"warning" => true //not sure if it's called on both the server and client
	),
	array(
		"hook" => "PlayerDisconnected",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "Player instance that got disconnected."
			)
		),
		"text" => "Called when a player leaves the server.",
		"warning" => true //not sure if it's called on both the server and client
	)

	/*
	array(
		"hook" => "Initialize",
		"args" => array(
			array(
				"type" => "ref string", "name" => "current",
				"text" => "Current music track name to play. Change the value to change the track played."
			)
		),
		"text" => "Called each frame when the game decides which music track to play."
	)
	*/
);

?>