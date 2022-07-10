import { setHeroHeight } from "./modules/hero"
import { setHeaderPosition } from "./modules/hader"
import { setNewsSlider } from "./modules/news-slider"

const $ = jQuery

/* Ready */
$(document).ready(() => {
    setHeroHeight()
})

/* Load */
$(window).on("load", () => {
    setNewsSlider()
})
/* Resize */
$(window).on("resize", () => {})
/* Scroll */
$(window).on("scroll", () => {
    const scrollTop = $(window).scrollTop()
    setHeaderPosition(scrollTop)
})
