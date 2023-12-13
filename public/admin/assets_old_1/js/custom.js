$(document).ready(function(){
    $('.sidenav  nav > ul > li > a').click(function(){
        $(this).siblings('.submenu').slideToggle();
        $(this).parents('li').siblings().children('.submenu').slideUp();
    });

    $('.btn-management button').click(function(){
        //alert('helo');
        $(this).addClass('active').siblings().removeClass('active')
      });

     
})