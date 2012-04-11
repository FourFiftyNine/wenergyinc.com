/* Author:

*/
jQuery(document).ready(function() {
    addWmodeTransparent();
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



