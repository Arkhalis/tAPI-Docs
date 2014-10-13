<?php

$GLOBALS["hooksInfo"] = array(
	"header" => "ModNet"
);

$GLOBALS["hooks"] = array(
	array(
		"hook" => "ChatCommand",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "Player instance sending the command."
			),
			array(
				"type" => "string", "name" => "command",
				"text" => "The command being used."
			),
			array(
				"type" => "string", "name" => "args",
				"text" => "Arguments passed to the command."
			)
		),
		"return" => array("type" => "bool", "default" => "false", "text" => "Whether the command was handled by the mod."),
		"text" => "Called when a player sends a chat command (a message starting with the '/' character)."
	),
	array(
		"hook" => "ServerCommand",
		"args" => array(
			array(
				"type" => "string", "name" => "text",
				"text" => "The text input."
			),
			array(
				"type" => "bool", "name" => "help",
				"text" => "Whether the <code>help</code> command got called."
			)
		),
		"return" => array("type" => "bool", "default" => "false", "text" => "Whether the command was handled by the mod. Ignored if <code>help</code> is <code>true</code>."),
		"text" => "Called when text input is given to the server app. Print a new line of help for your command if <code>help</code> is <code>true</code>, otherwise call your custom command code."
	),

	array(
		"hook" => "NetReceive",
		"args" => array(
			array(
				"type" => "BinBuffer", "name" => "bb",
				"text" => "BinBuffer instance with the whole received net message"
			),
			array(
				"type" => "int", "name" => "messageID",
				"text" => "The ID of the message received."
			)
		),
		"text" => "Called when a mod net message is received."
	),

	array(
		"hook" => "PlayerConnected",
		"args" => array(
			array(
				"type" => "int", "name" => "index",
				"text" => "Index of the connecting player in the Main.player array."
			)
		),
		"text" => "Called when a player joins the server."
	),
	array(
		"hook" => "PlayerDisconnected",
		"args" => array(
			array(
				"type" => "Player", "name" => "player",
				"text" => "Player instance that got disconnected."
			)
		),
		"text" => "Called when a player leaves the server."
	),

	array(
		"hook" => "TamperSend",
		"args" => array(
			array(
				"type" => "BinBuffer", "name" => "bb",
				"text" => "BinBuffer instance with the whole being sent net message."
			),
			array(
				"type" => "int", "name" => "messageID",
				"text" => "The ID of the message being sent."
			),
			array(
				"type" => "int", "name" => "remoteClient",
				"text" => "Client ID to send the message to. <code>-1</code> to send to everyone."
			),
			array(
				"type" => "int", "name" => "ignoreClient",
				"text" => "Client ID to ignore when sending to everyone with <code>remoteClient</code> set to <code>-1</code>. <code>-1</code> to not ignore anyone."
			),
			array(
				"type" => "string", "name" => "argString",
				"text" => "The string argument of the net message."
			),
			array(
				"type" => "int", "name" => "argInt",
				"text" => "The int argument of the net message."
			),
			array(
				"type" => "float", "name" => "argFloat1",
				"text" => "The float argument #1 of the net message."
			),
			array(
				"type" => "float", "name" => "argFloat2",
				"text" => "The float argument #2 of the net message."
			),
			array(
				"type" => "float", "name" => "argFloat3",
				"text" => "The float argument #3 of the net message."
			),
			array(
				"type" => "float", "name" => "argFloat4",
				"text" => "The float argument #4 of the net message."
			)
		),
		"return" => array("type" => "bool", "default" => "true", "text" => "Whether the vanilla code should continue."),
		"text" => "Called when a net message is being sent."
	),
	array(
		"hook" => "TamperReceive",
		"args" => array(
			array(
				"type" => "BinBuffer", "name" => "bb",
				"text" => "BinBuffer instance with the whole received net message."
			),
			array(
				"type" => "int", "name" => "messageID",
				"text" => "The ID of the message received."
			),
			array(
				"type" => "MessageBuffer", "name" => "buffer",
				"text" => "Buffer which received the message."
			)
		),
		"return" => array("type" => "bool", "default" => "true", "text" => "Whether the vanilla code should continue."),
		"text" => "Called when a net message is received."
	)
);

?>