import { setNewsSlider } from "./modules/news-slider"
import { setHeroHeight } from "./modules/hero-height"
import { setHamburgerMenu } from "./modules/hamburger"
import { setHeaderPosition } from "./modules/hader"
import { deviceType } from "./constants/deviceType"
const $ = jQuery
$(document).on("gesturestart", (e) => e.preventDefault())
setHeroHeight()
/* Ready */
$(document).ready(() => {
    setHamburgerMenu()
})

/* Load */
$(window).on("load", () => {
    setNewsSlider()
})
/* Resize */
$(window).on("resize", () => {
    deviceType() === "desktop" && setHeroHeight()
})
/* Scroll */
$(window).on("scroll", () => {
    const scrollTop = $(window).scrollTop()
    setHeaderPosition(scrollTop)
})

$(window).on("orientationchange", function () {
    // After orientationchange, add a one-time resize event
    $(window).one("resize", function () {
        setHeroHeight()
    })
})
