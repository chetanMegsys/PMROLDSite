$(document).ready(function(){

    // Show hide Top menu on menu button clicked
    $(document).on("click", function(event){
        var $trigger = $('#navbarToggleExternalContent, .navbar-toggler');
        // var $trigger1 = $('#searching, #dropdownsearch,.search');
        if($trigger !== event.target && !$trigger.has(event.target).length){
            $('#navbarToggleExternalContent').removeClass('show');
            $('#toggle_menu').removeClass('rotateMenuLines');
        }

    });
    // Rotate Menu Lines
    $("#navbar-toggler").on("click",function(){
        $("#toggle_menu").toggleClass("rotateMenuLines");
    })

     var scrollToTop = $("#scrollToTop"); $(window).scroll(function () { if ($(window).scrollTop() > 300) { scrollToTop.addClass("show") } else { scrollToTop.removeClass("show") } }); scrollToTop.on("click", function (a) { a.preventDefault(); $("html, body").animate({ scrollTop: 0 }, "300") });
});