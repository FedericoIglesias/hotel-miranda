let barMenuBtn = document.getElementById('bar__menuBtn');
let barMenu = document.getElementById('bar__menu');
let bar = document.getElementById('bar');
let menuBtn = document.getElementById('menuBtn');





// HEADER DESPEGABLE  ----------

barMenuBtn.onclick = function(){
    console.log('toy en function')
    if(document.getElementById('menus__bar').getAttribute('class').includes('display--none')){
        document.getElementById('menus__bar').setAttribute('class','div__menu ')
    }else{
        document.getElementById('menus__bar').setAttribute('class','div__menu display--none')
    }
}
function disableMenu (){
    document.getElementById('menus__bar').setAttribute('class','div__menu display--none')
}
window.addEventListener('scroll', disableMenu )

function enableMenu (){
    if(scrollY >= 300){
        barMenu.setAttribute('class','header__div header')
    }
}
function disablePosition(){
    barMenu.setAttribute('class','header__div header display--none')
}

bar.addEventListener('mousemove',enableMenu)

barMenu.addEventListener('mouseout',disablePosition)



// MENU DESPEGABLE-------------

menuBtn.onclick = function(){
    console.log('toy en function')
    if(document.getElementById('menus').getAttribute('class').includes('display--none')){
        document.getElementById('menus').setAttribute('class','div__menu ')
    }else{
        document.getElementById('menus').setAttribute('class','div__menu display--none')
    }
}
function disableMenu (){
    document.getElementById('menus').setAttribute('class','div__menu display--none')
}
window.addEventListener('scroll', disableMenu )
