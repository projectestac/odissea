(function(window) {

    $(document).ready(initBoxes);

    function initBoxes() {
        window.console.log('initBoxes');

        $('.sectionname').unbind('click');
        $('.sectionname').bind('click', handleH3Pressed);

        $('.subsectionname').unbind('click');
        $('.subsectionname').bind('click', handleLiPressed);

        // $('.sectionname a, .subsectionname a').click(function(event) {
        //     window.console.log('.sectionname a, .subsectionname a');

        //     event.stopPropagation();
        // });

        if (window.location.hash.match(/^#section-(\d+)$/)) {
            var $section = $(window.location.hash);
            var $sectionname = $section.children('.sectionname');
            if ($section.length && $sectionname.length) {
                $section.children('ul.section').slideDown();
                $sectionname.addClass('opened');
                $sectionname.attr('data-state','opened');
            }
        }
    }

    function handleH3Pressed(e) {
        window.console.log('handleH3Pressed');
        window.console.log(e.target);
        var state = $(this).attr('data-state');
        if (state === undefined) {
            $(this).attr('data-state','closed');
        }
        state = $(this).attr('data-state');
        if (state === 'opened') {
            $(this).parent().find('> ul.section').slideUp();
            $(this).removeClass('opened');
            $(this).attr('data-state','closed');
        } else {
            $(this).parent().find('> ul.section').slideDown();
            $(this).addClass('opened');
            $(this).attr('data-state','opened');
        }
    }

    function handleLiPressed() {
        window.console.log('handleLiPressed');
        var state = $(this).attr('data-state');
        if (state === undefined) {
            $(this).attr('data-state','closed');
        }
        state = $(this).attr('data-state');
        if (state === 'opened') {
            $(this).parent().find('> ul.subsection').slideUp();
            $(this).removeClass('opened');
            $(this).attr('data-state','closed');
        } else {
            $(this).parent().find('> ul.subsection').slideDown();
            $(this).addClass('opened');
            $(this).attr('data-state','opened');
        }
    }

})(this);
