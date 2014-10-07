<?php

$GLOBALS["propsInfo"] = array(
	"header" => "Prefixes",
	"info" => "Configuration for a prefix.",
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
		"text" => "The unique prefix name in the mod.",
		"default" => "The prefix's JSON file name without extension"
	),
	array(
		"tags" => array("temp"),
		"name" => "displayName",
		"type" => "string",
		"text" => "The prefix's displayed name. (Tooltips, etc.)"
	),
	array(
		"tags" => array("temp"),
		"name" => "tier",
		"type" => "int",
		"text" => "The amount to increase(or, if negative, decrease) an item's rarity tier by."
	),
	array(
		"tags" => array("temp"),
		"name" => "value",
		"type" => "float",
		"text" => "The amount to scale an item's value by."
	),
	array(
		"tags" => array("temp"),
		"name" => "damage",
		"type" => "float",
		"text" => "The amount to scale an item's damage by."
	),
	array(
		"tags" => array("temp"),
		"name" => "damage",
		"type" => "float",
		"text" => "The amount to scale an item's useTime by."
	),
	array(
		"tags" => array("temp"),
		"name" => "crit",
		"type" => "int",
		"text" => "The amount to increase(or, if negative, decrease) an item's crit chance by."
	),
	array(
		"tags" => array("temp"),
		"name" => "mana",
		"type" => "float",
		"text" => "The amount to scale an item's mana cost by."
	),
	array(
		"tags" => array("temp"),
		"name" => "shootSpeed",
		"type" => "float",
		"text" => "The amount to scale an item's shoot speed by."
	),
	array(
		"tags" => array("temp"),
		"name" => "scale",
		"type" => "float",
		"text" => "The amount to scale an item's scale by."
	),
	array(
		"tags" => array("temp"),
		"name" => "knockback",
		"type" => "float",
		"text" => "The amount to scale an item's knockback by."
	),
	array(
		"tags" => array("temp"),
		"name" => "meleeDamage",
		"type" => "float",
		"text" => "The amount to scale an item's melee damage by."
	),	
	array(
		"tags" => array("temp"),
		"name" => "rangedDamage",
		"type" => "float",
		"text" => "The amount to scale an item's ranged damage by."
	),	
		array(
		"tags" => array("temp"),
		"name" => "magicDamage",
		"type" => "float",
		"text" => "The amount to scale an item's magic damage by."
	),	
	array(
		"tags" => array("temp"),
		"name" => "minionDamage",
		"type" => "float",
		"text" => "The amount to scale an item's minion damage by."
	),
	array(
		"tags" => array("temp"),
		"name" => "allDamage",
		"type" => "float",
		"text" => "The amount to scale an item's melee, ranged, magic, and minion damage by."
	),
	array(
		"tags" => array("temp"),
		"name" => "defense",
		"type" => "int",
		"text" => "The amount to increase(or, if negative, decrease) the player's defense by."
	),	
	array(
		"tags" => array("temp"),
		"name" => "maxLife",
		"type" => "int",
		"text" => "The amount to increase(or, if negative, decrease) the player's maximum life by."
	),
	array(
		"tags" => array("temp"),
		"name" => "maxMana",
		"type" => "int",
		"text" => "The amount to increase(or, if negative, decrease) the player's maximum mana by."
	),	
	array(
		"tags" => array("temp"),
		"name" => "moveSpeed",
		"type" => "float",
		"text" => "The amount to scale the player's move speed by."
	),
	array(
		"tags" => array("temp"),
		"name" => "meleeSpeed",
		"type" => "float",
		"text" => "The amount to scale the player's melee speed by."
	),	
	array(
		"tags" => array("temp"),
		"name" => "meleeCrit",
		"type" => "int",
		"text" => "The amount to increase(or, if negative, decrease) the player's melee crit by."
	),
	array(
		"tags" => array("temp"),
		"name" => "rangedCrit",
		"type" => "int",
		"text" => "The amount to increase(or, if negative, decrease) the player's ranged crit by."
	),	
	array(
		"tags" => array("temp"),
		"name" => "magicCrit",
		"type" => "int",
		"text" => "The amount to increase(or, if negative, decrease) the player's magic crit by."
	),	
	array(
		"tags" => array("temp"),
		"name" => "allCrit",
		"type" => "int",
		"text" => "The amount to increase(or, if negative, decrease) the player's melee, ranged, and magic crit by."
	),	
	array(
		"tags" => array("temp"),
		"name" => "type",
		"type" => "(int or string) OR (int and/or string array)",
		"text" => "The type(s) of item this prefix can apply to.",
		"drop" => "
			<div class=\"alert alert-info\">The valid strings are as follows:<br>
			<dl>
			<dt><code>None</code></dt><dd><b>-</b> Cannot be used by any items.</dd>
			<dt><code>Melee</code></dt><dd><b>-</b> Can only be used by melee weapons.</dd>	
			<dt><code>Ranged</code></dt><dd><b>-</b> Can only be used by ranged weapons.</dd>	
			<dt><code>Magic</code></dt><dd><b>-</b> Can only be used by magic weapons.</dd>
			<dt><code>Weapon</code></dt><dd><b>-</b> Can only be used by melee, ranged, or magic weapons.</dd>
			<dt><code>Accessory</code></dt><dd><b>-</b> Can only be used by accessories.</dd>	
			<dt><code>All</code></dt><dd><b>-</b> Can be used by any vanilla item.</dd>
			<dt><code>Any</code></dt><dd><b>-</b> Can be used by any item.</dd>		
			</dl>
			</div>
		"	
	)
);

?>