
// Global variables
var colorset;
var color2, color4, color5;
var nodescolor, nodeslogocolor;

function init_nodes_colors(color, logocolor) {
    nodescolor = color;
    nodeslogocolor = logocolor;
}

function changeColors() {
    colorProfile = colorset.value;

    if(colorProfile == 'grana') {
        color2.value = '#AC2013';
        color4.value = '#303030';
        color5.value = '#AC2013';
    }
    else if(colorProfile == 'coral') {
        color2.value = '#FF4444';
        color4.value = '#00BBBB';
        color5.value = '#008888';
    }
    else if(colorProfile == 'kellygreen') {
        color2.value = '#349C5F';
        color4.value = '#B27409';
        color5.value = '#B27409';
    }
    else if(colorProfile == 'colourful') {
        color2.value = '#0996B2';
        color4.value = '#BF1D61';
        color5.value = '#BF1D61';
    } else if(colorProfile == 'nodes') {
        color2.value = nodescolor;
        color4.value = nodescolor;
        color5.value = nodescolor;
        logocolor.value = nodeslogocolor;
        var logocolorpick = logocolor.parentNode.getElementsByClassName("currentcolour")[0];
        logocolorpick.style.backgroundColor = logocolor.value;
    }

    var color2pick = color2.parentNode.getElementsByClassName("currentcolour")[0];
    var color4pick = color4.parentNode.getElementsByClassName("currentcolour")[0];
    var color5pick = color5.parentNode.getElementsByClassName("currentcolour")[0];

    color2pick.style.backgroundColor = color2.value;
    color4pick.style.backgroundColor = color4.value;
    color5pick.style.backgroundColor = color5.value;
}


function changeToPersonalized() {
    colorset.value = 'personalitzat';
    color2pick.style.backgroundColor = color2.value;
    color4pick.style.backgroundColor = color4.value;
    color5pick.style.backgroundColor = color5.value;
}


function xtec2_theme_onload() {

    colorset = document.getElementById('id_s_theme_xtec2_colorset');

    // This condition ensures that this code is only loaded while configuring
    //  xtec2 theme. This is mandatory because if id's don't exist in HTML code,
    //  this code generates a javascript conflict in admin menu.
    if (colorset != null) {
        color2 = document.getElementById('id_s_theme_xtec2_color2');
        color4 = document.getElementById('id_s_theme_xtec2_color4');
        color5 = document.getElementById('id_s_theme_xtec2_color5');
        logocolor = document.getElementById('id_s_theme_xtec2_logo_color');

        color2.addEventListener('input', changeToPersonalized, false);
        color4.addEventListener('input', changeToPersonalized, false);
        color5.addEventListener('input', changeToPersonalized, false);
        logocolor.addEventListener('input', changeToPersonalized, false);

        colorset.addEventListener('change', changeColors, false);
    }
}