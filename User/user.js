/*!
    * Start Bootstrap - SB Admin v6.0.3 (https://startbootstrap.com/template/sb-admin)
    * Copyright 2013-2021 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
    (function($) {
    "use strict";

    // Add active state to sidbar nav links
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
        $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function() {
            if (this.href === path) {
                $(this).addClass("active");
            }
        });

    // Toggle the side navigation
    $("#sidebarToggle").on("click", function(e) {
        e.preventDefault();
        $("body").toggleClass("sb-sidenav-toggled");
    });
})(jQuery);
// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable();
});






/*const parent =document.querySelector('.read-more-cont');
parent.addEventListener('click',event=>{
  const current=event.target;
  const isReadbtn=current.className.includes('read-more-btn');
  if(!isReadbtn) return;
  const currentT=event.target.parentNode.querySelector('.read-more-text');
  currentT.classList.toggle('readmore-text--show');
  current.textContent=current.textContent.includes('View Details')?"Read Less....":"View Details";
})
*/
$(".read-more-btn").on('click',function(){
  $(this).parent().toggleClass("readmore-text--show");
   var replacetxt=$(this).parent().hasClass("readmore-text--show")?"Read Less....":"View Details";
   $(this).text(replacetxt);
});
