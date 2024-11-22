/**
 * Preview banner slice changes.
 *
 * On the course edit page, when banner details are changed, show a live preview.
 */

M.course = M.course || {};

M.course.format = M.course.format || {};

/**
 * Change the banner slice to match user input.
 */
M.course.format.fmtBannerPreviewSlice = function() {

    // Fetch banner slice user input.
    var bannersliceDom = document.querySelector("body.format-multitopic div#page select#id_bannerslice");
    var bannerslice = bannersliceDom.options[bannersliceDom.selectedIndex].value;

    // Locate banner.
    var headerDom = document.querySelector("body.format-multitopic div#course-header, body.format-multitopic div#page-mast");
    var bannerDom = headerDom.querySelector("div#course-header-banner");

    // Update banner CSS style for new banner slice.
    var bannerStyleOld = bannerDom.getAttribute("style");
    // This expression should reflect the style code in renderer.php function render_courseheader .
    var bannerStyle = bannerStyleOld.replace(/\b(background-position: [a-z0-9%]+ )([0-9]+%)(;?)/, "$1" + bannerslice + "%" + "$3");
    bannerDom.setAttribute("style", bannerStyle);

};

/**
 * Change the banner image to match the course image thumbnail.
 */
M.course.format.fmtBannerPreviewImage = function() {

    // Fetch course image user input.
    var imageFilemanagerDom = document.querySelector("body.format-multitopic div#page #id_descriptionhdr .filemanager");
    var imageFileDom = imageFilemanagerDom.classList.contains("fm-nofiles") ? null :
                            imageFilemanagerDom.querySelector(".fp-content .fp-file.fp-hascontextmenu, "
                                                                + ".fp-content .fp-filename-icon.fp-hascontextmenu");
    var imageThumbDom = imageFileDom ? imageFileDom.querySelector(".fp-thumbnail img.realpreview, .fp-icon img.realpreview") : null;
    var imageUrl = imageThumbDom ? imageThumbDom.getAttribute("src").split("?")[0] : "";
    var imageFilename = imageFileDom ? imageFileDom.querySelector(".fp-filename").textContent : "";
    var imageName = (imageFilename.lastIndexOf(".") > -1) ? imageFilename.substr(0, imageFilename.lastIndexOf(".")) : imageFilename;

    // Locate banner.
    var headerDom = document.querySelector("body.format-multitopic div#course-header, body.format-multitopic div#page-mast");
    var bannerDom = headerDom.querySelector("div#course-header-banner");
    var bannerAttributionDom = headerDom.querySelector("p#course-header-banner_attribution");

    // Update banner CSS style and attribution for new image.
    var bannerStyleOld = bannerDom.getAttribute("style");
    // This expression should reflect the style code in renderer.php function render_courseheader .
    var bannerStyle = bannerStyleOld.replace(/\b(background-image: )(url\('[^']*'\))(;?)/, "$1" + "url('" + imageUrl + "')" + "$3");
    bannerStyle = bannerStyle.replace(/\b(background-image: )(url\("[^"]*"\))(;?)/, "$1" + "url('" + imageUrl + "')" + "$3");
    // NOTE: Need to accept double quotes for Internet Explorer.
    bannerDom.setAttribute("style", bannerStyle);
    bannerAttributionDom.textContent = bannerAttributionDom.textContent.replace(/([^:]*: )(.*)/, "$1" + imageName + " ...");
    bannerAttributionDom.setAttribute("style", "visibility: " + (imageFileDom ? "visible " : "hidden") + ";");

};

/**
 * Initialise: Watch for user input.
 */
M.course.format.fmtBannerPreviewInit = function() {

    // Don't run unless the document is loaded.
    if (document.readyState != "complete") {
        return;
    }

    // Watch for banner slice user input.
    var bannersliceDom = document.querySelector("body.format-multitopic div#page select#id_bannerslice");
    if (bannersliceDom) {
        bannersliceDom.addEventListener("change", M.course.format.fmtBannerPreviewSlice);
    }

    // Watch for course image user input.
    var imageFilemanagerDom = document.querySelector("body.format-multitopic div#page #id_descriptionhdr .filemanager");
    if (imageFilemanagerDom) {
        var config = {attributes: true, childList: true, subtree: true};
        var observer = new MutationObserver(M.course.format.fmtBannerPreviewImage);
        observer.observe(imageFilemanagerDom, config);
    }

};

// Run initialisation when the page is loaded, or now, if the page is already loaded.
document.addEventListener("readystatechange", M.course.format.fmtBannerPreviewInit);
M.course.format.fmtBannerPreviewInit(null);
