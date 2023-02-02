'use strict'
window.addEventListener('load',()=>{
    var panthei = window.innerHeight;
    var cont = document.querySelector('.content');
    var hea = document.querySelector('header');
    hea.style.height = (panthei*.1) + 'px';
    cont.style.height = (panthei - (panthei*.1)) + 'px';
});
