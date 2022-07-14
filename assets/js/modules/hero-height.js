const $ = jQuery
export const setHeroHeight = () => {
    $("#hero-section").css({ height: `${window.innerHeight}px` })
    $("#header").css({ top: `${window.innerHeight - 80}px`, opacity: 1 })
}
