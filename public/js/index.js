'use strict'
window.addEventListener('load',()=>{
    var pantwid = window.innerWidth;
    var panthei = window.innerHeight;
    var cont = document.querySelector('.content');
    var hea = document.querySelector('header');
    hea.style.width = pantwid + 'px';
    hea.style.height = (panthei*.1) + 'px';
    cont.style.width = pantwid + 'px';
    cont.style.height = (panthei - (panthei*.1)) + 'px';
});
