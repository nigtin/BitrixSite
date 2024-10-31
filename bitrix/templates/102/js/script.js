$(document).ready(function() {

  $('.dropdown-link').click(function(e) {
    e.preventDefault(); // Отключаем переход по ссылке

    // Показываем/скрываем выпадающее меню
    $(this).siblings('.dropdown-content').toggle();
  });

  // Закрытие выпадающего меню при клике вне его области
  $(window).click(function(event) {
    if (!$(event.target).closest('.dropdown-link').length) {
      $('.dropdown-content').hide();
    }
  });
  $('.dropdown-link').click(function() {
    var dropdownLink = $(this);
    var position = dropdownLink.position(); // Получаем позицию относительно документа
    var leftOffset = position.left - 25;
    
    var dropdownContent = $(this).siblings('.dropdown-content'); // Находим соседний блок .dropdown-content
    dropdownContent.css('left', leftOffset + 'px');
});
// установка высоты затемняющего контейера обратной связи
// не мог использовать position:fixed и height:100vh тк по макету шапка не затемняется 
    function setOverlayHeight() {
        const topbarHeight = document.querySelector('.top-bar').offsetHeight;
        const totalHeight = document.documentElement.scrollHeight;
        const overlay = document.querySelector('.feedback-form_container');
        overlay.style.height = (totalHeight - topbarHeight) + 'px';
        overlay.style.top = topbarHeight + 'px';
    }
    setOverlayHeight();

    $('.feedback-form_btn').click(function() {
        $('.feedback-form_container').show();
    });

    $('.feedback-form .close-button').click(function() {
        $('.feedback-form_container').hide();
    });

    $('.feedback-form_container').click(function(event) {
        if (!$(event.target).closest('.feedback-form').length) {
            $('.feedback-form_container').hide();
        }
    });

});

     

