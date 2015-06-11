
var blocks_shown = true;
var old_main_post_class = '';
var old_main_pre_class = '';

function close_agora_alerts() {
    var element = document.getElementById("agora-alerts");
    element.parentNode.removeChild(element);
    return false;
}

function showhideblocks() {
    YUI().use('moodle-theme_bootstrapbase-bootstrap', function(Y) {
        var main_pre = Y.one('#region-bs-main-and-pre');
        if(main_pre == null) main_pre = Y.one('#region-bs-main-and-post');
        var main_post = Y.one('#region-main');

        if(blocks_shown){
            //Hide
            Y.one('#block-region-side-post').hide();
            Y.one('#block-region-side-pre').hide();

            old_main_post_class = main_pre.getAttribute('class');
            main_pre.removeClass(old_main_post_class);
            main_pre.addClass('span12');

            old_main_pre_class = main_post.getAttribute('class');
            main_post.removeClass(old_main_pre_class);
            main_post.addClass('span12');

            Y.one('#showhideblocks').removeClass('collapsed');
            Y.one('#showhideblocks').addClass('expanded');
            Y.one('body').addClass('blocks_collapsed');
        } else {
            //Show
            Y.one('#block-region-side-post').show();
            Y.one('#block-region-side-pre').show();

            main_pre.removeClass('span12');
            main_pre.addClass(old_main_post_class);

            main_post.removeClass('span12');
            main_post.addClass(old_main_pre_class);

            Y.one('#showhideblocks').removeClass('expanded');
            Y.one('#showhideblocks').addClass('collapsed');
            Y.one('body').removeClass('blocks_collapsed');
        }
    });
    blocks_shown = !blocks_shown;
}


M.theme_xtec2 = {};

M.theme_xtec2.init = function(Y) {

    var usermenu = Y.one('#usermenu');

    if (usermenu != null) {

        Y.one('#usermenu_toogle').on('clickoutside', function () {
            usermenu.removeClass('open');
        });

        Y.one('#usermenu_toogle').on('click', function (e){
            usermenu.toggleClass('open');
            e.stopPropagation();
            return false;
        });
    }

    Y.on('click', function (e) {
        this.ancestor(".block").toggleClass('hidden');
        e.stopPropagation();
        return false;
    }
    , '.block .header h2');
};