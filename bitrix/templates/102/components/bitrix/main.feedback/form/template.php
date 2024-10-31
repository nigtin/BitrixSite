<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

        <div class="feedback-form_container">
<div class="feedback-form_background">
          <div class="feedback-form">
          <button class="close-button"><svg 
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            width="15px" height="15px">
           <path fill-rule="evenodd"  fill="rgb(140, 140, 140)"
            d="M14.497,1.550 L8.207,7.840 L14.093,13.725 L13.386,14.432 L7.500,8.547 L1.614,14.432 L0.907,13.725 L6.793,7.840 L0.503,1.550 L1.210,0.843 L7.500,7.133 L13.790,0.843 L14.497,1.550 Z"/>
           </svg></button> 
          <div class="form-header"> <h2>обратный звонок</h2> </div>
<?
/*
if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(!empty($arResult["OK_MESSAGE"]))
{
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
*/
?>

<form action="<?=POST_FORM_ACTION_URI?>" class="form-content" method="POST">
<?=bitrix_sessid_post()?>



<label>
              <div class="input_container">
                <span class="icon"><svg 
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="27px" height="27px">
                 <path fill-rule="evenodd"  fill="rgb(140, 140, 140)"
                  d="M13.500,27.000 C6.044,27.000 -0.000,20.956 -0.000,13.500 C-0.000,6.044 6.044,-0.000 13.500,-0.000 C20.956,-0.000 27.000,6.044 27.000,13.500 C27.000,20.956 20.956,27.000 13.500,27.000 ZM22.102,22.554 C20.601,19.286 17.332,17.000 13.500,17.000 C9.670,17.000 6.385,19.274 4.881,22.539 C7.125,24.678 10.155,26.000 13.500,26.000 C16.837,26.000 19.861,24.684 22.102,22.554 ZM13.500,1.000 C6.596,1.000 1.000,6.596 1.000,13.500 C1.000,16.679 2.196,19.571 4.151,21.777 C5.881,18.358 9.405,16.000 13.500,16.000 C17.595,16.000 21.116,18.360 22.847,21.780 C24.803,19.573 26.000,16.680 26.000,13.500 C26.000,6.596 20.404,1.000 13.500,1.000 ZM13.500,15.000 C10.462,15.000 8.000,12.537 8.000,9.500 C8.000,6.462 10.462,4.000 13.500,4.000 C16.537,4.000 19.000,6.462 19.000,9.500 C19.000,12.537 16.537,15.000 13.500,15.000 ZM13.500,5.000 C11.015,5.000 9.000,7.014 9.000,9.500 C9.000,11.985 11.015,14.000 13.500,14.000 C15.985,14.000 18.000,11.985 18.000,9.500 C18.000,7.014 15.985,5.000 13.500,5.000 Z"/>
                 </svg></span> <!-- Иконка для ФИО -->
                <input type="text" placeholder="Ваши ФИО" class="input-field" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>" required>
              </div>
                <svg 
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="383px" height="3px" class="input_line">
                  <path fill-rule="evenodd"  fill="rgb(140, 140, 140)"
                  d="M382.000,2.999 L1.000,2.999 L-0.000,2.999 L-0.000,2.000 L-0.000,-0.000 L1.000,-0.000 L1.000,2.000 L382.000,2.000 L382.000,-0.000 L383.000,-0.000 L383.000,2.000 L383.000,2.999 L382.000,2.999 Z"/>
                  </svg>
            </label>
            <label>
              <div class="input_container">
                <span class="icon"><svg 
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="18px" height="27px">
                 <path fill-rule="evenodd"  fill="rgb(140, 140, 140)"
                  d="M-0.000,27.000 L-0.000,-0.000 L18.000,-0.000 L18.000,27.000 L-0.000,27.000 ZM17.000,1.000 L1.000,1.000 L1.000,26.000 L17.000,26.000 L17.000,1.000 ZM6.621,3.086 L3.086,6.621 L2.379,5.914 L5.914,2.378 L6.621,3.086 ZM10.889,3.318 L3.818,10.389 L3.111,9.682 L10.182,2.611 L10.889,3.318 ZM11.000,24.000 L7.000,24.000 L7.000,23.000 L11.000,23.000 L11.000,24.000 Z"/>
                 </svg></span> <!-- Иконка для телефона -->
                <input type="text" placeholder="Телефон" class="input-field" name="user_phone" required>
              </div>
                <svg 
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="383px" height="3px" class="input_line">
               <path fill-rule="evenodd"  fill="rgb(140, 140, 140)"
                d="M382.000,2.999 L1.000,2.999 L-0.000,2.999 L-0.000,2.000 L-0.000,-0.000 L1.000,-0.000 L1.000,2.000 L382.000,2.000 L382.000,-0.000 L383.000,-0.000 L383.000,2.000 L383.000,2.999 L382.000,2.999 Z"/>
               </svg>
            </label>
<label class="checkbox-container">
              <div>
                <input type="checkbox" name="privacy_policy" required>
                <span class="checkbox-text">Принимаю политику конфиденциальности</span>
              </div>  
            </label>

	<?if($arParams["USE_CAPTCHA"] == "Y"):?>
	<div class="mf-captcha">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
		<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
		<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
		<input type="text" name="captcha_word" size="30" maxlength="50" value="">
	</div>
	<?endif;?>
	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
	<button type="submit" name="submit" class="submit-button">ОТПРАВИТЬ</button>
        </form>
        </div>
        </div>
</div>
