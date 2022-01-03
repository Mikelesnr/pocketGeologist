'use strict'


const tabContainer = document.querySelector('.operations__tab-conatiner');
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
const submit=document.querySelectorAll('.submit');
const reset=document.getElementById('reset')
function chngView(){
    const search = document.getElementById("hide-search");
    search.classList.toggle("hidden");
    const results = document.getElementById("results-constainer");
    results.classList.toggle("hidden");
  }
submit.forEach(btn =>{
  btn.addEventListener('click',chngView);
});
