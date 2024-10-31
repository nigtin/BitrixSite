<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<?if (!empty($arResult)):?>

<ul>
        <?$previousLevel = 0;?>
        <?foreach($arResult as $arItem):?>

            <?if ($arItem["DEPTH_LEVEL"] == 1):?> <!-- Верхний уровень меню -->

                <?if ($previousLevel == 2):?> <!-- Закрываем подменю, если переходим от подменю к основному уровню -->
                    </ul>
                <?endif;?>

                <li>
                    <?if ($arItem["IS_PARENT"]):?> <!-- Если есть подменю -->
                        <a href="<?=$arItem["LINK"]?>" class="dropdown-link <?=$arItem["SELECTED"] ? 'selected' : ''?>">
                            <?=$arItem["TEXT"]?>
                        </a>
                        <ul class="dropdown-content"> <!-- Открываем подменю -->
                    <?else:?> <!-- Обычные ссылки без подменю -->
                        <a href="<?=$arItem["LINK"]?>" class="<?=$arItem["SELECTED"] ? 'selected' : ''?>">
                            <?=$arItem["TEXT"]?>
                        </a>
                    <?endif;?>
                </li>

            <?elseif ($arItem["DEPTH_LEVEL"] == 2):?> <!-- Подменю -->

                <li>
                    <a href="<?=$arItem["LINK"]?>" class="<?=$arItem["SELECTED"] ? 'selected' : ''?>">
                        <?=$arItem["TEXT"]?>
                    </a>
                </li>

            <?endif;?>

            <?$previousLevel = $arItem["DEPTH_LEVEL"];?> <!-- Запоминаем уровень текущего элемента -->
        <?endforeach;?>
</ul>



<?endif;?>
