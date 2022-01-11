<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use \Bitrix\Main\Config\Option,
	\Bitrix\Main\Localization\Loc,
	\Bitrix\Main\Loader;

	$arComponentParameters = [
		"GROUPS" => [
			/*"DEFAULT" => [ "NAME" => Loc::getMessage("GROUP_DEFAULT"), ],*/
		],
		"PARAMETERS" => [

			"CHANNEL_ID" => [
				"PARENT" => "BASE",
				"NAME" => Loc::getMessage("PARAMETER_CHANNEL_ID"),
				"TYPE" => "STRING",
				"DEFAULT" => '',
			],
			"NUM" => [
				"PARENT" => "BASE",
				"NAME" => Loc::getMessage("PARAMETER_NUM"),
				"TYPE" => "STRING",
				"DEFAULT" => '6',
			],

			"PREVIEW_FILENAME" => [
				"PARENT" => "BASE",
				"NAME" => Loc::getMessage("PARAMETER_PREVIEW_FILENAME"),
				"TYPE" => "LIST",
				"VALUES" => [
					"default.jpg" => "default.jpg (120x90)",
					"1.jpg" => "1.jpg (120x90)",
					"2.jpg" => "2.jpg (120x90)",
					"3.jpg" => "3.jpg (120x90)",
					"mqdefault.jpg" => "mqdefault.jpg (320x180)",
					"hqdefault.jpg" => "hqdefault.jpg (480x360)",
					"sddefault.jpg" => "sddefault.jpg (640x480)",
					"maxresdefault.jpg" => "maxresdefault.jpg (1280x720)",
				],
				"DEFAULT" => 'mqdefault.jpg',
			],

			"SHOW_ERRORS" => [
				"PARENT" => "BASE",
				"NAME" => Loc::getMessage("PARAMETER_SHOW_ERRORS"),
				"TYPE" => "CHECKBOX",
				"DEFAULT" => 'Y',
				"REFRESH" => "Y",
				"SORT" => 10,
			],

			"CACHE_TIME" => [
				"DEFAULT" => 36000,
				"PARENT" => "CACHE_SETTINGS",
			],
			"CACHE_TYPE"  => [
				"PARENT" => "CACHE_SETTINGS",
				"NAME" => Loc::getMessage("COMP_PROP_CACHE_TYPE"),
				"TYPE" => "LIST",
				"VALUES" => [
					"A" => Loc::getMessage("COMP_PROP_CACHE_TYPE_AUTO")." ".Loc::getMessage("COMP_PARAM_CACHE_MAN"), 
					"Y" => Loc::getMessage("COMP_PROP_CACHE_TYPE_YES"), 
					"N" => Loc::getMessage("COMP_PROP_CACHE_TYPE_NO")],
				"DEFAULT" => "N",
				"ADDITIONAL_VALUES" => "N",
				"REFRESH" => "Y"
			],
		],
	];

?>
