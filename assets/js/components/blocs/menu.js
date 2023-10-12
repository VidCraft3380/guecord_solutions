const header_menu = document.querySelector(".button__item")
const menu = document.getElementById("menu")

function openMenu(){
    if(header_menu.id=="open_menu"){
        menu.style.animation = "forwards slidein 1s"
        header_menu.removeAttribute("id")
        scrollTop = window.scrollY || document.documentElement.scrollTop;
        scrollLeft = window.screenX || document.documentElement.scrollLeft,
        window.onscroll = function() {
            window.scrollTo(scrollLeft, scrollTop);
        };
        document.getElementById("header").style.position = "fixed"
    }
    else {
        menu.style.animation = "forwards slideof 1s"
        header_menu.setAttribute('id', 'open_menu')
        window.onscroll = function() {};
        document.getElementById("header").style.position = "unset"
    }
}