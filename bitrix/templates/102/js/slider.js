  function initializeSlider(sliderSelector, thumbSelector, trackSelector) {
    let slider = $(sliderSelector); // Основной слайдер
    let thumb = $(thumbSelector); // Кастомный ползунок
    let track = $(trackSelector); // Кастомная полоса прокрутки
    let trackWidth = track.width(); // Ширина полосы прокрутки
    let thumbWidth = thumb.width(); // Ширина ползунка
    let totalScrollWidth = slider[0].scrollWidth - slider.width(); // Общая ширина прокрутки слайдера

    function updateThumbPosition(scrollLeft) {
      let thumbPosition = (scrollLeft / totalScrollWidth) * (trackWidth - thumbWidth);
      thumb.css('left', thumbPosition + 'px');
    }

    slider.on('scroll', function() {
      let scrollLeft = slider.scrollLeft();
      updateThumbPosition(scrollLeft);
    });

    function moveSlider(thumbPosition) {
      let scrollLeft = (thumbPosition / (trackWidth - thumbWidth)) * totalScrollWidth;
      slider.scrollLeft(scrollLeft);
    }

    let dragging = false;
    let startX, thumbStartLeft;

    thumb.on('mousedown', function(e) {
      dragging = true;
      startX = e.pageX;
      thumbStartLeft = parseInt(thumb.css('left'), 10);
      e.preventDefault();
    });

    $(document).on('mousemove', function(e) {
      if (dragging) {
        let deltaX = e.pageX - startX;
        let newThumbLeft = Math.min(Math.max(thumbStartLeft + deltaX, 0), trackWidth - thumbWidth);
        thumb.css('left', newThumbLeft + 'px');
        moveSlider(newThumbLeft);
      }
    });

    $(document).on('mouseup', function() {
      dragging = false;
    });
  }

