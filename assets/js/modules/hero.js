const $ = jQuery
const heroWrapper = $("#hero-container")
const windowHeight = $(window).innerHeight()

export const setHeroHeight = () =>
    heroWrapper.css({ height: windowHeight + "px" })
