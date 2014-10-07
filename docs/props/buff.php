<?php

$GLOBALS["propsInfo"] = array(
	"header" => "Buffs",
	"info" => "Configuration for a buff.",
	"tags" => array(
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
		"text" => "The unique buff name in the mod.",
		"default" => "The buff's JSON file name without extension"
	),
	array(
		"tags" => array("temp"),
		"name" => "displayName",
		"type" => "string",
		"text" => "The buff's displayed name. (Tooltips, etc.)"
	),
	array(
		"tags" => array("temp"),
		"name" => "texture",
		"type" => "string",
		"text" => "The texture path for the buff's icon.",
		"default" => "The buff's JSON path, without extension"
	),
	array(
		"tags" => array("temp"),
		"name" => "code",
		"type" => "string",
		"text" => "Full type name for the <code>ModBuff</code>-extending class to be used for this buff.",
		"default" => "<code>{internalName}.Buffs.{filename}</code>"
	),
	array(
		"tags" => array("temp"),
		"name" => "tip",
		"type" => "string",
		"text" => "The displayed tooltip for this buff when it is hovered over.",
	),
	array(
		"tags" => array("temp"),
		"name" => "debuff",
		"type" => "bool",
		"text" => "Wether or not the player can cancel this buff by right clicking it.",
		"default" => "false (can be canceled)"
	),
	array(
		"tags" => array("temp"),
		"name" => "vanityPet",
		"type" => "bool",
		"text" => "Wether or not this buff represents a vanity pet. (Baby Hornet, Baby Snowman, etc.)",
		"default" => "false"
	),	
	array(
		"tags" => array("temp"),
		"name" => "lightPet",
		"type" => "bool",
		"text" => "Wether or not this buff represents a light pet. (Wisp, etc.)",
		"default" => "false"
	),	
	array(
		"tags" => array("temp"),
		"name" => "enchantment",
		"type" => "bool",
		"text" => "Wether or not this buff is a melee enchantment.",
		"default" => "false"
	),
	array(
		"tags" => array("temp"),
		"name" => "noTimer",
		"type" => "bool",
		"text" => "Wether or not this buff has a timer displayed. (It still ticks down like any other buff)",
		"default" => "false"	
	),
	array(
		"tags" => array("temp"),
		"name" => "noSave",
		"type" => "bool",
		"text" => "Wether or not this buff should be saved to the player.",
		"default" => "false",
		"drop" => "
			<div class=\"alert alert-info\">This should be true for tile-dependent buffs that act like the Campfire buff, Heart Lantern buff, etc.</div>
		"
	)
);

?>