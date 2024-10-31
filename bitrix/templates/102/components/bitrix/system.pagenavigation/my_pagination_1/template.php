<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}


\Bitrix\Main\UI\Extension::load(['ui.design-tokens']);

$this->setFrameMode(true);

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}
?>
<div class="navigation">
<?
$arResult['nStartPage'] = max(1, $arResult['NavPageNomer']); // Начальная страница не может быть меньше 1
$arResult['nEndPage'] = min($arResult['NavPageCount'], $arResult['NavPageNomer'] + 2); // Конечная страница не может превышать общее количество страниц
$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");

if($arResult["bDescPageNumbering"] === false):


	$bFirst = true;
	if ($arResult["NavPageNomer"] == 1): ?> <span class="modern-page-previous"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="11px" height="17px">
                                <path fill-rule="evenodd" fill="rgb(192, 192, 192)"
                                    d="M10.450,14.328 L8.328,16.450 L0.550,8.672 L0.550,8.328 L8.328,0.550 L10.450,2.672 L4.621,8.500 L10.450,14.328 Z" />
                            </svg></span> <? endif;
	if ($arResult["NavPageNomer"] > 1):
		if($arResult["bSavePage"]):
?>
			<a class="modern-page-previous" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="11px" height="17px">
                                <path fill-rule="evenodd" fill="rgb(71, 166, 42)"
                                    d="M10.450,14.328 L8.328,16.450 L0.550,8.672 L0.550,8.328 L8.328,0.550 L10.450,2.672 L4.621,8.500 L10.450,14.328 Z" />
                            </svg></a>
<?
		else:
			if ($arResult["NavPageNomer"] > 2):
?>
			<a class="modern-page-previous" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="11px" height="17px">
                                <path fill-rule="evenodd" fill="rgb(71, 166, 42)"
                                    d="M10.450,14.328 L8.328,16.450 L0.550,8.672 L0.550,8.328 L8.328,0.550 L10.450,2.672 L4.621,8.500 L10.450,14.328 Z" />
                            </svg></a>
<?
			else:
?>
			<a class="modern-page-previous" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="11px" height="17px">
                                <path fill-rule="evenodd" fill="rgb(71, 166, 42)"
                                    d="M10.450,14.328 L8.328,16.450 L0.550,8.672 L0.550,8.328 L8.328,0.550 L10.450,2.672 L4.621,8.500 L10.450,14.328 Z" />
                            </svg></a>
<?
			endif;

		endif;

		if ($arResult["nStartPage"] > 1):
			$bFirst = false;
			if($arResult["bSavePage"]):
?>
			<a class="number_link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1">1</a>
<?
			else:
?>
			<a class="number_link" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">1</a>
<?
			endif;
			if ($arResult["nStartPage"] > 2):
/*?>
			<span class="modern-page-dots">...</span>
<?*/
?>
			<a class="modern-page-dots" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=round($arResult["nStartPage"] / 2)?>">...</a>
<?
			endif;
		endif;
	endif;

	do
	{
		if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):
?>
		<span class="modern-page-current"><?=$arResult["nStartPage"]?></span>
<?
		elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):
?>
		<a class="number_link" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>" class="<?=($bFirst ? "modern-page-first" : "")?>"><?=$arResult["nStartPage"]?></a>
<?
		else:
?>
		<a class="number_link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"<?
			?> class="<?=($bFirst ? "modern-page-first" : "")?>"><?=$arResult["nStartPage"]?></a>
<?
		endif;
		$arResult["nStartPage"]++;
		$bFirst = false;
	} while($arResult["nStartPage"] <= $arResult["nEndPage"]);

	if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):
		if ($arResult["nEndPage"] < $arResult["NavPageCount"]):
			if ($arResult["nEndPage"] < ($arResult["NavPageCount"])):
/*?>
		<span class="modern-page-dots">...</span>
<?*/
?>
		<a class="modern-page-dots" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=round($arResult["nEndPage"] + ($arResult["NavPageCount"] - $arResult["nEndPage"]) / 2)?>">...</a>
<?
			endif;
?>
		<a class="number_link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>"><?=$arResult["NavPageCount"]?></a>
<?
		endif;
?>
		<a class="modern-page-next" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="11px" height="17px">
                                <path fill-rule="evenodd" fill="rgb(71, 166, 42)"
                                    d="M0.550,14.328 L2.672,16.450 L10.450,8.672 L10.450,8.328 L2.672,0.550 L0.550,2.672 L6.379,8.500 L0.550,14.328 Z" />
                            </svg></a>
<?
	endif;
endif;
if ($arResult["NavPageNomer"] == $arResult["NavPageCount"]): ?> <span class="modern-page-next"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="11px" height="17px">
                                <path fill-rule="evenodd" fill="rgb(192, 192, 192)"
                                    d="M0.550,14.328 L2.672,16.450 L10.450,8.672 L10.450,8.328 L2.672,0.550 L0.550,2.672 L6.379,8.500 L0.550,14.328 Z" />
                            </svg></span> <? endif;

?>
</div>