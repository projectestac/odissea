
// Global variables
var colorset;
var maincolor, fontcolor, linkscolor;
var nodescolor, nodeslogocolor;

function init_nodes_colors(color, logocolor) {
    nodescolor = color;
    nodeslogocolor = logocolor;
}

function changeColors() {
    colorProfile = colorset.value;

    if(colorProfile == 'grana') {
        maincolor.value = '#AC2013';
        fontcolor.value = '#303030';
        linkscolor.value = '#AC2013';
    }
    else if(colorProfile == 'coral') {
        maincolor.value = '#FF4444';
        fontcolor.value = '#00BBBB';
        linkscolor.value = '#008888';
    }
    else if(colorProfile == 'kellygreen') {
        maincolor.value = '#349C5F';
        fontcolor.value = '#B27409';
        linkscolor.value = '#B27409';
    }
    else if(colorProfile == 'colourful') {
        maincolor.value = '#0996B2';
        fontcolor.value = '#BF1D61';
        linkscolor.value = '#BF1D61';
    } else if(colorProfile == 'nodes') {
        maincolor.value = nodescolor;
        fontcolor.value = nodescolor;
        linkscolor.value = nodescolor;
        logocolor.value = nodeslogocolor;
        var logocolorpick = logocolor.parentNode.getElementsByClassName("currentcolour")[0];
        logocolorpick.style.backgroundColor = logocolor.value;
    }

    var maincolorpick = maincolor.parentNode.getElementsByClassName("currentcolour")[0];
    var fontcolorpick = fontcolor.parentNode.getElementsByClassName("currentcolour")[0];
    var linkscolorpick = linkscolor.parentNode.getElementsByClassName("currentcolour")[0];

    maincolorpick.style.backgroundColor = maincolor.value;
    fontcolorpick.style.backgroundColor = fontcolor.value;
    linkscolorpick.style.backgroundColor = linkscolor.value;
}


function changeToPersonalized() {
    colorset.value = 'personalitzat';
    maincolorpick.style.backgroundColor = maincolor.value;
    fontcolorpick.style.backgroundColor = fontcolor.value;
    linkscolorpick.style.backgroundColor = linkscolor.value;
}


function xtec2020_theme_onload() {

    colorset = document.getElementById('id_s_theme_xtec2020_colorset');

    // This condition ensures that this code is only loaded while configuring
    //  xtec2020 theme. This is mandatory because if id's don't exist in HTML code,
    //  this code generates a javascript conflict in admin menu.
    if (colorset != null) {
        maincolor = document.getElementById('id_s_theme_xtec2020_maincolor');
        fontcolor = document.getElementById('id_s_theme_xtec2020_fontcolor');
        linkscolor = document.getElementById('id_s_theme_xtec2020_linkscolor');
        logocolor = document.getElementById('id_s_theme_xtec2020_headerbg');

        maincolor.addEventListener('input', changeToPersonalized, false);
        fontcolor.addEventListener('input', changeToPersonalized, false);
        linkscolor.addEventListener('input', changeToPersonalized, false);
        logocolor.addEventListener('input', changeToPersonalized, false);

        colorset.addEventListener('change', changeColors, false);
    }
}