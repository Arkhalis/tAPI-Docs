<?php

$propsInfo = array(
	"header" => "ModInfo",
	"info" => "Main mod configuration file. Required by every mod.",
	"tags" => array(
		array(
			"tag" => "internal",
			"name" => "Internal"
		),
		array(
			"tag" => "info",
			"name" => "Informative"
		)
	)
);

$props = array(
	array(
		"tags" => array("internal"),
		"name" => "internalName",
		"type" => "string",
		"text" => "The name the mod is known as internally, also the namespace used by the mod in code.",
		"drop" => "
			<div>This property has to be unique between all mods.</div>
			<div class=\"bs-callout bs-callout-warning\">
				Don't use any names that might be used in other namespaces, for example:<br />
				<ul><li>Terraria</li><li>TAPI</li><li>LitJson</li><li>System</li></ul>
			</div>
		"
	),
	array(
		"tags" => array("info"),
		"name" => "displayName",
		"type" => "string",
		"text" => "The name visible in the mods menu."
	),
	array(
		"tags" => array("info"),
		"name" => "author",
		"type" => "string",
		"text" => "Mod author."
	),
	array(
		"tags" => array("info"),
		"name" => "version",
		"type" => array("string","int[1-4]"),
		"text" => "The name the mod is known as internally, also the namespace used by the mod in code.",
		"default" => "<code>[1,0,0,0]</code>",
		"drop" => "
			<div class=\"bs-example\">
				<code>\"version\": \"r1\"</code><br />
				<code>\"version\": [1,0,0,0]</code>
			</div>
		"
	),
	array(
		"tags" => array("internal"),
		"name" => "includePDB",
		"type" => "bool",
		"text" => "Whether the mod packer should create a debug PDB file.",
		"default" => "<code>false</code>",
		"drop" => "
			<div>The PDB file allows tAPI to display line numbers on which errors happen.</div>
		"
	),
	array(
		"tags" => array("internal"),
		"name" => "warnOnReload",
		"type" => "bool",
		"text" => "Determines whether it's unsafe to reload the mod and the game should be restarted instead.",
		"default" => "<code>false</code>",
		"drop" => "
			<div>Some mods that allow to be used as APIs can cause problems when reloaded. Set this property to mark such mods.</div>
		"
	),
	array(
		"tags" => array("internal"),
		"name" => "modReferences",
		"type" => "string[?]",
		"text" => "List of all mod dependencies.",
		"drop" => "
			<div class=\"myDropdownDiv\">All the names are mod <code>internalName</code> properties.</div>
		"
	),
	array(
		"tags" => array("internal"),
		"name" => "dllReferences",
		"type" => "string[?]",
		"text" => "List of all DLL dependencies.",
		"drop" => "
			
		",
		"warning" => true
	)
);

?>