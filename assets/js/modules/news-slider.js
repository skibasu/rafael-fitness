const $ = jQuery
const slider = $("#news-slider-slick")

export const setNewsSlider = () => {
    slider.slick({
        autoplay: true,
        autoplaySpeed: 8000,
        dots: true,
        infinite: true,
        adaptiveHeight: false,
    })
}
