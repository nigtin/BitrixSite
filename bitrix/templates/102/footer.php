<footer class="footer">
    
        <div class="logo-container">
            <div class="logo-square"></div>
            <img src="<?=SITE_TEMPLATE_PATH?>/images/logo_footer.png" alt="Логотип" class="logo" />
        </div>
        <div class="footer-content">
        <nav class="footer-nav">
          <div class="footer-nav_container">

<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"bottom_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "bottom_menu",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "bottom",
		"USE_EXT" => "N"
	),
	false
);?>
			
            </div>
        </nav>
        
        <div class="contact-info">
          <div>
            <p>8 (495) 640-24-86</p>
            <a href="mailto:mail@evroobsada.ru">mail@evroobsada.ru</a>
          </div>
        </div>
        </div>
        <div class="social-icons">
            <a href="#"><div class="whatsapp"><svg 
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              width="23px" height="24px">
             <path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
              d="M11.499,22.975 C9.728,22.975 8.059,22.559 6.564,21.839 L6.855,22.131 L0.101,23.819 L1.708,17.391 C0.694,15.687 0.101,13.704 0.101,11.577 C0.101,5.283 5.204,0.180 11.499,0.180 C17.794,0.180 22.897,5.283 22.897,11.577 C22.897,17.872 17.794,22.975 11.499,22.975 ZM18.403,13.742 C18.151,13.502 17.858,13.299 17.567,13.105 C17.145,12.823 16.721,12.540 16.233,12.376 C15.598,12.164 15.089,12.303 14.663,12.816 C14.468,13.053 14.276,13.294 14.090,13.537 C13.810,13.905 13.444,14.059 12.997,13.943 C12.715,13.869 12.435,13.765 12.178,13.629 C11.484,13.261 10.890,12.753 10.318,12.223 C9.882,11.820 9.469,11.395 9.186,10.868 C8.861,10.263 8.897,9.797 9.429,9.317 C9.676,9.095 9.882,8.826 10.093,8.568 C10.233,8.396 10.305,8.190 10.323,7.967 C10.352,7.619 10.234,7.312 10.063,7.020 C9.782,6.541 9.401,6.140 9.026,5.738 C8.819,5.516 8.582,5.310 8.328,5.144 C7.922,4.880 7.525,4.941 7.189,5.291 C6.925,5.568 6.664,5.850 6.428,6.152 C5.700,7.083 5.465,8.143 5.626,9.300 C5.755,10.212 6.119,11.033 6.636,11.782 C7.923,13.649 9.600,15.099 11.568,16.215 C12.580,16.789 13.663,17.155 14.850,17.133 C15.842,17.114 16.736,16.816 17.479,16.160 C17.840,15.840 18.145,15.455 18.460,15.087 C18.860,14.620 18.848,14.168 18.403,13.742 Z"/>
             </svg></div></a>
            <a href="#"><div class="telegram"><svg 
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              width="27px" height="22px">
             <path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
              d="M26.318,0.391 L21.014,21.608 L14.805,17.092 L11.553,19.958 L10.960,20.342 L10.778,20.410 L8.179,13.505 L8.249,13.479 L0.681,10.115 L26.318,0.391 ZM11.290,18.956 L14.072,16.559 L11.290,14.536 L21.898,4.811 L9.070,13.363 L11.290,18.956 Z"/>
             </svg></div></a>
            <a href="#"><div class="vk"><svg 
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              width="28px" height="16px">
             <path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
              d="M28.000,15.000 L28.000,16.000 L21.000,16.000 L18.000,13.000 L16.000,13.000 L16.000,16.000 L11.000,16.000 C11.009,16.020 6.759,13.993 3.403,8.844 C0.681,4.667 -0.000,1.000 -0.000,1.000 L6.000,1.000 C6.000,1.000 6.629,3.688 7.487,4.979 C8.853,7.035 10.988,8.999 11.000,9.000 L11.000,2.000 C11.000,1.996 10.402,1.490 10.088,0.914 C9.830,0.441 10.071,0.448 11.388,0.390 C13.148,0.312 14.647,0.384 15.590,0.444 C16.171,0.481 16.000,2.000 16.000,2.000 L16.000,8.000 L17.000,8.000 C17.000,8.000 18.597,7.131 19.752,5.238 C21.122,2.992 21.012,0.988 21.000,1.000 L28.000,1.000 L28.000,2.000 L23.000,9.000 L23.000,10.000 L28.000,15.000 Z"/>
             </svg></div></a>
        </div>
    
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/script.js"></script>
</body>
</html>
