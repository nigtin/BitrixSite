<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<title><? $APPLICATION->ShowTitle(); ?></title>
	<? $APPLICATION->ShowHead();  ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Комплексное остекление деревянных домов</title>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/style/fonts/stylesheet.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/styles.css">
	<style>
		.top-bar {
		<? if ($APPLICATION->GetCurPage() == '/') : ?> 
                background-color: rgb(18, 18, 18, 0.62); 
            <? endif; ?>
		}
	</style>
</head>
<body>
<div id="panel">
	<? $APPLICATION->ShowPanel(); ?> 
</div>


    <header class="top-bar">
        
        <div class="container">
                <div class="left_topbar">
                <div class="contacts">
                    <span>Пн-Пт: с 10:00 до 18:00 </span>
                    <span>Сб-Вс: Дежурный режим</span>
                </div>
                <div class="phone">
                    <span class="phone-number">8 (495) 640-24-86</span>
                    <span class="callback"><a class="feedback-form_btn" href="#">Обратный звонок</a></span>
                </div>

            </div>
            
            <div class="logo">
                <img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="ЕвроОбсада">
            </div>

            <div class="right_topbar">
                <div class="search-container">
                    <input type="text" placeholder="Поиск.." class="search-input">
                    <button class="search-btn">
                        <!-- SVG лупа -->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" height="25px" viewBox="0 0 25 25">
                            <path fill-rule="evenodd" fill="rgb(129, 129, 129)"
                                d="M14.000,22.000 C11.184,22.000 8.623,20.932 6.677,19.192 L1.213,24.657 L0.506,23.949 L5.962,18.493 C4.130,16.528 3.000,13.899 3.000,11.000 C3.000,4.925 7.925,-0.000 14.000,-0.000 C20.075,-0.000 25.000,4.925 25.000,11.000 C25.000,17.075 20.075,22.000 14.000,22.000 ZM14.000,0.999 C8.477,0.999 4.000,5.477 4.000,11.000 C4.000,16.522 8.477,20.999 14.000,20.999 C19.523,20.999 24.000,16.522 24.000,11.000 C24.000,5.477 19.523,0.999 14.000,0.999 Z"/>
                        </svg>
                    </button>
                    <!-- Линия под поисковой строкой -->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="273px" height="3px" class="search-line">
                        <path fill-rule="evenodd" fill="rgb(129, 129, 129)"
                            d="M272.000,3.000 L1.000,3.000 L-0.000,3.000 L-0.000,2.000 L-0.000,-0.000 L1.000,-0.000 L1.000,2.000 L272.000,2.000 L272.000,-0.000 L273.000,-0.000 L273.000,2.000 L273.000,3.000 L272.000,3.000 Z"/>
                    </svg>
                </div>
                <div class="login-container">
                    <button class="login-btn">
                        Вход
                        <!-- Иконка "Вход" -->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="37px" height="32px">
                            <path fill-rule="evenodd" fill="rgb(129, 129, 129)"
                                d="M7.999,32.000 L7.999,21.999 L9.000,21.999 L9.000,31.000 L35.999,31.000 L35.999,1.000 L9.000,1.000 L9.000,11.999 L7.999,11.999 L7.999,-0.001 L36.999,-0.001 L36.999,32.000 L7.999,32.000 ZM19.806,9.806 L20.563,9.152 L26.757,16.325 L26.555,16.500 L26.757,16.674 L20.563,23.847 L19.806,23.194 L25.154,17.000 L-0.000,17.000 L-0.000,16.000 L25.154,16.000 L19.806,9.806 Z"/>
                        </svg>
                    </button>
                    <!-- Зеленая полоска справа от кнопки "Вход" -->
                    <svg class="green-stripe" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="4px" height="32px">
                        <path fill-rule="evenodd" fill="rgb(71, 166, 42)"
                            d="M-0.000,-0.000 L4.000,-0.000 L4.000,32.000 L-0.000,32.000 L-0.000,-0.000 Z"/>
                    </svg>
                </div>

            </div>
        </div>

        <div class="container_nav">
            <nav class="nav">
			<div class="left">

         <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top-menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "undermenu",
		"COMPONENT_TEMPLATE" => "top-menu",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "N"
	),
	false
);?>

            </div>
            <div class="right">
            
         <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top-menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "undermenu",
		"COMPONENT_TEMPLATE" => "top-menu",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	),
	false
);?>

            </div>
          </nav>
        </div>

<?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback", 
	"form", 
	array(
		"EMAIL_TO" => "sale@192.168.0.103",
		"EVENT_MESSAGE_ID" => array(
			0 => "7",
		),
		"OK_TEXT" => "",
		"REQUIRED_FIELDS" => array(
			0 => "NONE",
		),
		"USE_CAPTCHA" => "N",
		"COMPONENT_TEMPLATE" => "form"
	),
	false
);?>
    </header>

