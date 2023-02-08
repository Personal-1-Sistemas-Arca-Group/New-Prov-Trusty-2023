'use strict'
window.addEventListener('load', () => {
    var panthei = window.innerHeight;
    var head = document.querySelector('header');
    head.style.height = (panthei * .1) + 'px';

    var show = document.querySelector('.show-menu');
    show.style.height = (panthei * .1) + "px";

    var but_show = document.querySelector('.button-show-menu');
    but_show.addEventListener("click", function () {
        var tag = show.className;
        if (tag == "show-menu") {
            console.log(tag);
            show.className = "show-menu active";
        } else {
            console.log(tag);
            show.className = "show-menu";
        }
    });

    var conte = document.querySelector('.content');
    conte.style.height = (panthei * .9) + "px";

    var sidebar = document.querySelector('.sidebar');

    var bars = document.querySelector('.fa-bars');
    bars.addEventListener("click", function () {
        var tag = sidebar.className;
        if (tag == "sidebar") {
            sidebar.className = "sidebar active";
        } else {
            sidebar.className = "sidebar";
        }
    })
});
