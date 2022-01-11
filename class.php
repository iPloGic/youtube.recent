<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
}

use \Bitrix\Main\Localization\Loc,
	\Bitrix\Main\Loader;


class iplogicYoutubeRecent extends CBitrixComponent
{
	protected $errors = [];


	function __construct($component = null) {
		parent::__construct($component);
	}


	function onPrepareComponentParams($arParams) {
		if (!$arParams["PREVIEW_FILENAME"])
			$arParams["PREVIEW_FILENAME"] = "mqdefault.jpg";
		return $arParams;
	}


	function executeComponent() {
		$this->prepareResult();
		if (count($this->errors))
		{
			$this->printErrors();
			return;
		}

		$this->includeComponentTemplate();
	}


	protected function printErrors()
	{
		if ($this->arParams['SHOW_ERRORS'] != "Y")
			return;
		foreach ($this->errors as $error) {
			ShowError($error);
		}
	}


	protected function prepareResult() {
		if (count($this->errors))
			return;
		$this->arResult["ITEMS"] = [];
		$xml = simplexml_load_file(sprintf('https://www.youtube.com/feeds/videos.xml?channel_id=%s', $this->arParams["CHANNEL_ID"]));
		for ($i=0; $i < $this->arParams["NUM"]; $i++) { 
			if (!empty($xml->entry[$i]->children('yt', true)->videoId[0])){
				$id = $xml->entry[$i]->children('yt', true)->videoId[0];
				$this->arResult["ITEMS"][] = [
					"ID" => $id,
					"HREF" => "https://www.youtube.com/embed/".$id."?rel=0&amp;showinfo=0",
					"PREVIEW" => "//img.youtube.com/vi/".$id."/".$this->arParams["PREVIEW_FILENAME"]
				];
			}
		}
	}

}