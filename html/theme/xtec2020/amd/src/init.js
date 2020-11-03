// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Contain the logic for main xtec functions.
 *
 * @package    theme_xtec2020
 * @copyright  2016 Damyon Wiese
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
define(['jquery'], function($) {

    /**
     * Constructor.
     *
     * @param {object} root The root jQuery element for the modal
     */
    var Xtec = function() {
        $(".block .block-header h5").on( "click", function( event ) {
            $( event.target ).closest(".block").toggleClass('block-hidden');
            event.stopPropagation();
            return false;
        });

        $('#showhideblocks').on( "click", function( event ) {
            event.stopPropagation();

            var main = $('#region-main');
            var blocks_shown = main.hasClass('has-blocks');

            if (blocks_shown) {
                //Hide
                $('#block-region-side-pre').hide();

                main.removeClass('has-blocks');

                $('#showhideblocks').removeClass('collapsed');
                $('#showhideblocks').addClass('expanded');
                $('body').addClass('blocks_collapsed');
            } else {
                //Show
                $('#block-region-side-pre').show();

                main.addClass('has-blocks');

                $('#showhideblocks').removeClass('expanded');
                $('#showhideblocks').addClass('collapsed');
                $('body').removeClass('blocks_collapsed');
            }

            return false;
        });

        $('#close_agora_alerts').on( "click", function( event ) {
            event.stopPropagation();

            var element = document.getElementById("agora-alerts");
            element.parentNode.removeChild(element);

            return false;
        });
    };

    return {
        'init': function() {
            return new Xtec();
        }
    };
});
