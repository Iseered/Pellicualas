const navToggle = document.querySelector(".nav-toggle")
const navMenu = document.querySelector(".menu-nav")

navToggle.addEventListener("click",() =>{
    navMenu.classList.toggle("nav-menu_visible");

    if(navMenu.classList.contains("nav-menu-visible")){
        navToggle.setAttribute("arial-label","Cerrar menu");
    } else{
        navToggle.setAttribute("arial-label","Abrir menu");
    }
})

const header=document.querySelector("header");

window.addEventListener("scroll",function(){
 header.classList.toggle("active",window.scrollY >0);
})