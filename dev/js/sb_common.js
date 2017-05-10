$(document).ready(function () {
    $("#top_menu").hover(function () {
        $("#top").stop().animate({height: "282px"}, "500", "swing");
    }, function () {
        $("#top").stop().animate({height: "102px"}, "500", "swing");
    });

    reset_fix_top();
});
$(window).scroll(function () {
    reset_fix_top();
});

/**
 * @brief
 */
function reset_fix_top() {

    var scrollTop = $(window).scrollTop();

    if(scrollTop >= 40)
    {
        console.log(scrollTop);
        $('#top').addClass('fix');
    }else{
        $('#top').removeClass('fix');
    }
}
