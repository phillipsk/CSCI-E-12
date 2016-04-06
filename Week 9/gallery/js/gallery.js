$(document).ready(function(){
    $("a[data-fancybox-group=fancybox_group]").fancybox({
        'transitionIn': 'none',
        'transitionOut': 'none',
        'titlePosition': 'over',
        /* allows user to click CENTER of an image to cycle through images, without this clicking in the
         * middle has no effect */
        'nextClick': 'true',
        helpers: {
            title: {
                type: 'inside'
            }
        },
        beforeShow: function () {
            /* Disable right click */
            $.fancybox.wrap.bind("contextmenu", function (e) {
                return false;
            });
        }
    });
});