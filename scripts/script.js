'use strict'

const barMenu = document.querySelector('.barMenu');
const navLinks = document.querySelector('.navlinks');
const tabContainer = document.querySelector('.operations__tab-conatiner');

console.log(tabContainer);
/////////////////////////////////////////////////////////////
//nav cotrol
navLinks.style.display='block'
barMenu.addEventListener('click',(e)=>{
    //console.log(navLinks.style.display=='none');
    navLinks.style.display=='block' ? navLinks.style.display='none' :navLinks.style.display='block'
    })

///////////////////////////////////////////////////////////
if (tabContainer){
tabContainer.addEventListener('click', function (e) {
    const click = e.target.closest('.operations__tab');
    console.log(click)
    //guard clause
    if (!click) return

    const dataNo = click.getAttribute('data-tab');

    const activeTab = document.querySelector('.operations__tab--active').closest('.btn');
    activeTab.classList.remove('operations__tab--active');
    click.classList.add('operations__tab--active');

    const activeContent=document.querySelector('.operations__content--active').closest('.operations__content');
    activeContent.classList.remove('operations__content--active')
    document.querySelector(`.operations__content--${dataNo}`).classList.add('operations__content--active');
  })
}

  ///////////////////////////////////////
