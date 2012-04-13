/* Author:

*/
jQuery(document).ready(function() {
    addWmodeTransparent();
    $("ul.sub-menu").parents('li').addClass('parent').append('<span class="arrow"></span>');
    $("ul.sub-menu").hover(function() {
        $(this).parents('li').addClass('active');
        $(this).siblings('a').addClass('active');
    },
    function(){
        $(this).parents('li').removeClass('active');
        $(this).siblings('a').removeClass('active');
    });
    $("li.parent .arrow").hover(function() {
        $(this).parents('li').addClass('active');
        $(this).siblings('a').addClass('active');
    }, function() {
        $(this).parents('li').removeClass('active');
        $(this).siblings('a').removeClass('active');
    });
});

function addWmodeTransparent() {
    var intervalID;
    intervalID = setInterval(checkObject, 500);

    function checkObject()
    {
        if($('object').length){
            $('object').append('<param name="wmode" value="transparent">');
            clearInterval(intervalID);
        }
    }
}



