
$(document).ready(function () {
    $('ul li .nav-link').click(function(){
        $('li .nav-link').removeClass("active");
        $(this).addClass("active");
    });
});