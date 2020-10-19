
"use strict";

initPreloader();

$(document).ready(function () {

    feather.replace();

    initNavbar();
    
    initMobileMenu();

    initSidebar();

    initModals();

    initScrollReveal();

    initBackToTop();
    
    initBackgroundImages();

    initScrollToHash();

    initNavigationTabs();

})


$("button").click(function(){
    $("#dash-notification").remove();
  });
