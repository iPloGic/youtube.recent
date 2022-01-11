<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var customComponent $component */

use \Bitrix\Main\Localization\Loc,
	\Bitrix\Main\Application;

//echo "<pre>"; print_r($arResult); echo "</pre>";

if (count($arResult["ITEMS"])) { ?>
	<div class="youtube-recent-wrapper">
		<div class="youtube-slider-arrow youtube-slider-arrow-prev">
			<img src="<?=SITE_TEMPLATE_PATH?>/images/slider-arrow-prev.png" alt="">
		</div>
		<div class="youtube-slider-arrow youtube-slider-arrow-next">
			<img src="<?=SITE_TEMPLATE_PATH?>/images/slider-arrow-next.png" alt="">
		</div>
		<div class="youtube-recent">
			<? foreach($arResult["ITEMS"] as $arItem) { ?>
				<div class="youtube-video">
					<div class="prop3-4">
						<?/*<a href="https://www.youtube.com/watch?v=<?=$arItem["ID"]?>" target="_blank">*/?>
						<a class="youtube-fancybox" data-fancybox="group" href="<?=$arItem["HREF"]?>">
							<div class="youtube-preview" style="background-image: url('<?=$arItem["PREVIEW"]?>');">
								<div class="blackout"></div>
								<img src="<?=$templateFolder?>/img/video.png">
							</div>
						</a>
					</div>
				</div>
			<? } ?>
			<div style="clear:both;"></div>
		</div>
	</div>
<? } ?>