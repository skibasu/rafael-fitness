const $ = jQuery
const header = $("#header")

export const setHeaderPosition = (scrollTop) => {
    const heroHeight = $(window).height()

    if (scrollTop >= heroHeight - 80) {
        header.css({ position: "fixed", top: 0 })
    } else if (scrollTop <= heroHeight) {
        header.css({ position: "absolute", top: "" })
    }
}
