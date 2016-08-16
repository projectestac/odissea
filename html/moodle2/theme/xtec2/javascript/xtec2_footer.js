
var blocks_shown = true;
var old_main_post_class = '';
var old_main_pre_class = '';

function close_agora_alerts() {
    var element = document.getElementById("agora-alerts");
    element.parentNode.removeChild(element);
    return false;
}

function showhideblocks() {
    require(['jquery'], function($) {
        var main_pre = $('#region-bs-main-and-pre') || $('#region-bs-main-and-post');
        var main_post = $('#region-main');

        if (blocks_shown) {
            //Hide
            $('#block-region-side-post').hide();
            $('#block-region-side-pre').hide();

            old_main_post_class = main_pre.attr('class');
            old_main_pre_class = main_post.attr('class');

            main_pre.removeClass(old_main_post_class).addClass('span12');
            main_post.removeClass(old_main_pre_class).addClass('span12');

            $('#showhideblocks').removeClass('collapsed');
            $('#showhideblocks').addClass('expanded');
            $('body').addClass('blocks_collapsed');
        } else {
            //Show
            $('#block-region-side-post').show();
            $('#block-region-side-pre').show();

            main_pre.removeClass('span12').addClass(old_main_post_class);
            main_post.removeClass('span12').addClass(old_main_pre_class);

            $('#showhideblocks').removeClass('expanded');
            $('#showhideblocks').addClass('collapsed');
            $('body').removeClass('blocks_collapsed');
        }
        blocks_shown = !blocks_shown;
    });
}


M.theme_xtec2 = {};

M.theme_xtec2.init = function(Y) {
    require(['jquery'], function($) {
        $(".block .header h2").on( "click", function( event ) {
            $( event.target ).closest(".block").toggleClass('hidden');
            event.stopPropagation();
            return false;
        });
    });
};