import gsap from "gsap"

const $ = jQuery
const hamburger = $("#hamburger")
const overlay = $("#page-overlay")
const menuLinks = $(".gsap-nav-mobile a")

const tl = gsap
    .timeline({ paused: true })
    .to(".gsap-menu-mobile", { duration: 0.0, x: -1 })
    .addLabel("start")
    .to(
        ".gsap-path-1",
        {
            duration: 0.6,
            x: 2,
            attr: { d: "M1 683V1H326L200.531 683H1Z" },
        },
        "start"
    )

    .fromTo(".gsap-main", { x: 0 }, { duration: 0.6, x: 170 }, "start")
    .fromTo(
        ".gsap-nav-mobile",
        { x: -35, alpha: 0 },
        { duration: 0.4, x: 0, alpha: 1 },
        "start+=0.30"
    )
    .to(".gsap-header-mobile", { duration: 0.1, backgroundColor: "black" })

export const setHamburgerMenu = (menuElemID = null) => {
    menuLinks.on("click", (e) => {
        e.preventDefault()
        tl.reverse().then(() => {
            const url = e.target.getAttribute("href")
            const hash = url.slice(url.indexOf("#"))
            console.log("finish")
            // console.log(ScrollToPlugin)
            // gsap.to(window, { duration: 2, scrollTo: 400 })
            $(hash).length &&
                window.scrollTo(
                    0,
                    $(hash).offset().top -
                        $(".gsap-header-mobile").innerHeight()
                )
        })
        hamburger.removeClass("hamburger-active")
        $(menuElemID).removeClass("mobile-menu-active")
    })
    hamburger.on("click", (e) => {
        hamburger.hasClass("hamburger-active") ? tl.reverse() : tl.play()
        hamburger.hasClass("hamburger-active")
            ? overlay.css({ transform: "translateX(-100%)" })
            : overlay.css({ transform: "translateX(0)" })

        hamburger.toggleClass("hamburger-active")
        $(menuElemID).toggleClass("mobile-menu-active")
    })
}
