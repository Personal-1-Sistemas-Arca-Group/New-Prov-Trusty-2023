'use strict'
window.addEventListener('load',()=>{
    var panthei = window.innerHeight;
    var pantwid = window.innerWidth;
    var head = document.querySelector('header');
    head.style.width= pantwid + 'px';
    head.style.height= (panthei*.1)+'px';
    console.log(panthei);
    console.log(pantwid);
});
