const $ = jQuery
const header = $("#header")

export const setHeaderPosition = (scrollTop) => {
    const heroHeight = $("#hero-section").innerHeight()
    console.log(heroHeight)
    console.log("scrollTop", scrollTop)
    if (scrollTop >= heroHeight - 80) {
        header.css({ position: "fixed", top: 0 })
    } else if (scrollTop <= heroHeight) {
        header.css({
            position: "absolute",
            top: `${window.innerHeight - 80}px`,
        })
    }
}
