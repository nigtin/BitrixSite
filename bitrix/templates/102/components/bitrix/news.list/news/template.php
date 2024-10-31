<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

use Bitrix\Main\Page\Asset;

Asset::getInstance()->addJs("https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/slider.js");

?>
<section class="news">
	<div class="news-container">

		<!-- ZAMENIT` -->
		<div class="slider-header">
			<h2>Новости</h2>
		</div>
		<a href="#" class="view-all">СМОТРЕТЬ ВСЕ</a>

		<div class="slider-container">
			<div class="slider">
				<? foreach ($arResult["ITEMS"] as $arItem): ?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
					<!--  Код одной новости из исходного файла index.html  -->
					<div class="slide_news" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
						<div class="slide-image">
							<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
								<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<? echo $arItem["NAME"] ?>">
								<div class="overlay"></div>
								<div class="date">
									<?
									if ($arItem['ACTIVE_FROM']) {
										$timestamp = MakeTimeStamp($arItem['ACTIVE_FROM']);
									} else {
										$timestamp = time();
									}

									$formattedDate = FormatDate("d", $timestamp) . "<br>" . FormatDate("m", $timestamp) . "<br>" . FormatDate("Y", $timestamp);
									echo $formattedDate;
									?>
								</div>
								<div class="more-info-button">Подробнее</div>
							</a>
						</div>
						<div class="slide-text">
							<h3><a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><? echo $arItem["NAME"] ?></a></h3>
							<? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]): ?>
								<p><? echo $arItem["PREVIEW_TEXT"]; ?></p>
							<? endif; ?>
						</div>
					</div>
				<? endforeach; ?>
			</div>
			<!-- слайдер -->
			<div class="custom-scrollbar">
				<div class="scroll-track">
					<div class="scroll-thumb"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	$(document).ready(function() {
		initializeSlider('.news .slider', '.news .scroll-thumb', '.news .scroll-track');
	});
</script>