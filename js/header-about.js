const link_list = document.querySelector(".list-links-mobile");
const moile_toggle = document.querySelector(".mobile-nav-toggle");

moile_toggle.addEventListener('click', () => {
    const visibility = link_list.getAttribute("data-visible");
    if (visibility === "false") {
        link_list.setAttribute("data-visible", true);
        link_list.setAttribute("aria-expanded", true);
        moile_toggle.setAttribute("aria-expanded", true);
       
    }
    else {
        link_list.setAttribute("data-visible", false);
        link_list.setAttribute("aria-expanded", false);
        moile_toggle.setAttribute("aria-expanded", false);
    }

})