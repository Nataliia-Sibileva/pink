var navMain = document.querySelector ('.nav');
var navToggle = document.querySelector('.main-nav__toggle');

navMain.classList.remove('main-nav--nojs');

navToggle.addEventListener ('click',
    function() {
        if(navMain.classList.contains ('main-nav--closed')) {
            navMain.classList.remove('main-nav--closed');
            navMain.classList.add('main-nav--opened');
        } else {
            navMain.classList.add('main-nav--closed');
            navMain.classList.remove('main-nav--opened');
        }
    });

function show(state){
    document.getElementById('window').style.display = state;
    document.getElementById('wrap').style.display = state;
}
