jQuery(function ($) {

    $(".js-hamburger").on("click", function () {
        console.log("テスト");
        $(this).toggleClass("is-open");
        $(".c-layer--sidebar").toggleClass("is-open");
        $(".l-sidebar").toggleClass("is-open");
        $("body").toggleClass("is-open");
    });

    $(window).on('resize', function() {
        if (window.innerWidth > 1025) {
            $(".js-hamburger").removeClass("is-open");
            $(".c-layer--sidebar").removeClass("is-open");
            $(".l-sidebar").removeClass("is-open");
            $("body").removeClass("is-open");    
        }
    });
});



