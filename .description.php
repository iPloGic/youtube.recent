<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use \Bitrix\Main\Localization\Loc;

$arComponentDescription = array(
	"NAME" => Loc::getMessage('COMPONENT_NAME'),
	"DESCRIPTION" => Loc::getMessage('COMPONENT_DESCRIPTION'),
	"CACHE_PATH" => "Y",
	"PATH" => array (
		"ID" => "iplogic",
		"NAME" => "iPloGic",
		'SORT'	=> 10,
	),
);
?>
