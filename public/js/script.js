document.addEventListener('DOMContentLoaded', function () {
    function initializeSlider(sliderSelector, itemSelector, nextBtnSelector) {
        const slider = document.querySelector(sliderSelector);
        const nextBtn = document.querySelector(nextBtnSelector);
        const items = document.querySelectorAll(`${sliderSelector} ${itemSelector}`);

        let currentIndex = 0;
        let itemWidth = items[0].offsetWidth;
        const intervalTime = 5000;
        let autoSlideInterval;

        function calculateVisibleItemsCount() {
            const parentWidth = slider.offsetWidth;
            return Math.floor(parentWidth / (itemWidth + getGapSize()));
        }

        function getGapSize() {
            const style = window.getComputedStyle(slider);
            return parseFloat(style.gap) || 0;
        }

        function slideToNext() {
            const visibleItemsCount = calculateVisibleItemsCount();
            if (currentIndex < items.length - visibleItemsCount - 1) { // Adjusted to switch earlier
                currentIndex++;
            } else {
                currentIndex = 0; // Reset to first slide
            }
            updateSliderPosition(slider, currentIndex, itemWidth + getGapSize());
        }

        function updateSliderPosition(slider, index, width) {
            const visibleItemsCount = calculateVisibleItemsCount();
            const maxOffset = (items.length - visibleItemsCount) * width;
            const offset = Math.min(index * width, maxOffset);
            slider.style.transform = `translateX(-${offset}px)`;
            slider.style.transition = 'transform 0.5s ease';
        }

        function startAutoSlide() {
            autoSlideInterval = setInterval(slideToNext, intervalTime);
        }

        function stopAutoSlide() {
            clearInterval(autoSlideInterval);
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', function () {
                stopAutoSlide();
                slideToNext();
                startAutoSlide();
            });
        }

        window.addEventListener('resize', function () {
            slider.style.transition = 'none';
            itemWidth = items[0].offsetWidth;
            updateSliderPosition(slider, currentIndex, itemWidth + getGapSize());
        });

        startAutoSlide();
    }

    initializeSlider('.popular-list', '.popular-card', '.next-btn');
    initializeSlider('.review-list', '.review-item', '.review .slider-arrow.next-btn');
});





document.addEventListener('DOMContentLoaded', function () {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        item.addEventListener('click', function () {
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }
            });
            item.classList.toggle('active');
        });
    });
});
