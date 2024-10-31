<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <ul>
        <?foreach($arResult as $arItem):?>
            <!-- Пункты меню без подменю -->
            <?if (!$arItem["PARAMS"]["dropdown"]):?>
                <li><a href="<?=$arItem["LINK"]?>" class="<?=$arItem["SELECTED"] ? 'selected' : ''?>"><?=$arItem["TEXT"]?></a></li>
            <?endif;?>
        <?endforeach;?>
    </ul>
<?endif;?>
