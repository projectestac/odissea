(function(window) {

    $(document).ready(initBoxes);

    function initBoxes() {
        $('.vv-sectionname').unbind('click');
        $('.vv-sectionname').bind('click', handleH3Pressed);

        $('.vv-subsectionname').unbind('click');
        $('.vv-subsectionname').bind('click', handleLiPressed);

        $('.vv-sectionname a, .vv-subsectionname a').click(function(event) {
            event.stopPropagation();
        });

        if (window.location.hash.match(/^#section-(\d+)$/)) {
            var $section = $(window.location.hash);
            var $sectionname = $section.children('.vv-sectionname');
            if ($section.length && $sectionname.length) {
                $section.children('ul.vv-section').slideDown();
                $sectionname.addClass('vv-opened');
                $sectionname.attr('data-state','opened');
            }
        }
    }

    function handleH3Pressed() {
        var state = $(this).attr('data-state');
        if (state === undefined) {
            $(this).attr('data-state','closed');
        }
        state = $(this).attr('data-state');
        if (state === 'opened') {
            $(this).parent().find('> ul.vv-section').slideUp();
            $(this).removeClass('vv-opened');
            $(this).attr('data-state','closed');
        } else {
            $(this).parent().find('> ul.vv-section').slideDown();
            $(this).addClass('vv-opened');
            $(this).attr('data-state','opened');
        }
    }

    function handleLiPressed() {
        var state = $(this).attr('data-state');
        if (state === undefined) {
            $(this).attr('data-state','closed');
        }
        state = $(this).attr('data-state');
        if (state === 'opened') {
            $(this).parent().find('> ul.vv-subsection').slideUp();
            $(this).removeClass('vv-opened');
            $(this).attr('data-state','closed');
        } else {
            $(this).parent().find('> ul.vv-subsection').slideDown();
            $(this).addClass('vv-opened');
            $(this).attr('data-state','opened');
        }
    }

})(this);
