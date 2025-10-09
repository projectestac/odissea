/**
 * This was largely copied from the "Topics" format in an early version of "Tiles" and is not changed for summer 2018 release
 * @type {*|{}}
 */
M.course = M.course || {};

M.course.format = M.course.format || {};

/* jshint camelcase:false */
// We ignore camel case as this is copied from an old core file.

/**
 * Get sections config for this format
 *
 * The section structure is:
 * <ul class="tiles">
 *  <li class="section">...</li>
 *  <li class="section">...</li>
 *   ...
 * </ul>
 *
 * @return {object} section list configuration
 */
M.course.format.get_config = function() {
    return {
        container_node: "ul",
        container_class: "tiles",
        section_node: "li",
        section_class: "section"
    };
};

// M.course.format.swap_sections from topics format has been deliberately omitted as it is not necessary for tiles.

/**
 * Process sections after ajax response
 * The actual move is carried out by course/yui/build/moodle-course-dragdrop
 *
 * @param {YUI} Y YUI3 instance
 * @param {array} sectionlist
 * @param {array} response ajax response
 * @param {string} sectionfrom first affected section
 * @param {string} sectionto last affected section
 */
M.course.format.process_sections = function(Y, sectionlist, response, sectionfrom, sectionto) {
    var CSS = {
        SECTIONNAME: "sectionname"
    },
    SELECTORS = {
        SECTIONLEFTSIDE: ".left .section-handle .icon"
    };

    if (response.action === "move") {
        // If moving up swap around "sectionfrom" and "sectionto" so the that loop operates.
        if (sectionfrom > sectionto) {
            var temp = sectionto;
            sectionto = sectionfrom;
            sectionfrom = temp;
        }

        // Update titles and move icons in all affected sections.
        var ele, str, stridx, newstr;

        for (var i = sectionfrom; i <= sectionto; i++) {
            // Update section title.
            var content = Y.Node.create('<span>' + response.sectiontitles[i] + '</span>');
            sectionlist.item(i).all('.' + CSS.SECTIONNAME).setHTML(content);
            // Update the drag handle.
            ele = sectionlist.item(i).one(SELECTORS.SECTIONLEFTSIDE).ancestor('.section-handle');
            str = ele.getAttribute('title');
            stridx = str.lastIndexOf(' ');
            newstr = str.substr(0, stridx + 1) + i;
            ele.setAttribute('title', newstr);
            // Update the aria-label for the section.
            sectionlist.item(i).setAttribute('aria-label', content.get('innerText').trim());
        }
    }
};
/* jshint camelcase:true */