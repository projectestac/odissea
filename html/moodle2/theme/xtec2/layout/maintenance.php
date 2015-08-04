<?php

// Get the HTML for the settings bits.
$html = theme_xtec2_get_html_for_settings($OUTPUT, $PAGE);

if (right_to_left()) {
    $regionbsid = 'region-bs-main-and-post';
} else {
    $regionbsid = 'region-bs-main-and-pre';
}

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <?php echo $html->importcss;?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php echo $OUTPUT->body_attributes(isset($body_classes)?$body_classes:""); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<header role="banner" class="navbar navbar-fixed-top moodle-has-zindex">
    <nav role="navigation" class="navbar-inner">
        <div class="container-fluid">
            <a href="http://www20.gencat.cat/portal/site/ensenyament" class="brand ensenyament visible-desktop"><img src="<?php echo $OUTPUT->pix_url('departament', 'theme'); ?>" alt="Departament d'Ensenyament" title="" /></a>
            <a href="http://www.xtec.cat" class="brand xtec visible-desktop"><img src="<?php echo $OUTPUT->pix_url('xtec', 'theme'); ?>" alt="Xarxa Telemàtica Educativa de Catalunya" title="" /></a>
            <a class="brand mainbrand" href="<?php echo $CFG->wwwroot;?>"><?php echo $SITE->fullname; ?></a>
            <div class="navbar">
                <a class="btn btn-navbar visible-phone custom_menu_toggle" data-toggle="collapse" data-target="#user-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <ul class="nav-collapse nav pull-right" id="user-collapse">
                    <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                    <li class="navbar-text"><?php echo $OUTPUT->user_menu(); ?></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div id="title-header" class="clearfix hidden-phone">
    <div id="logo-top"></div>
    <div class="container-fluid">
        <?php echo $OUTPUT->page_heading(); ?>
    </div>
</div>

<div id="main_navigation" class="clearfix hidden-phone" style="min-height:36px;">
</div>

<div id="page" class="container-fluid clearfix">

    <div id="page-content" class="row-fluid">
        <section id="region-main" class="span12">
            <?php echo $OUTPUT->main_content(); ?>
        </section>
    </div>
</div>
<footer id="page-footer">
    <div id="page-footer-top">
        <?php
        echo $OUTPUT->standard_footer_html();
        ?>
    </div>
    <div class="footerlogos clearfix container-fluid">
        <a href="http://agora.xtec.cat" target="_blank" class="agora_footer"><img src="<?php echo $OUTPUT->pix_url('logo_main', 'theme'); ?>" alt="Àgora" title="" /></a>
        <a href="http://moodle.org" target="_blank" class="moodle_footer"><img src="<?php echo $OUTPUT->pix_url('logo_moodle', 'theme'); ?>" alt="Moodle" title="Moodle" /></a>
        <a href="http://www20.gencat.cat/portal/site/ensenyament" class="brand ensenyament visible-phone"><img src="<?php echo $OUTPUT->pix_url('departament', 'theme'); ?>" alt="Departament d'Ensenyament" title="" /></a>
        <a href="http://www.xtec.cat" class="brand xtec visible-phone"><img src="<?php echo $OUTPUT->pix_url('xtec', 'theme'); ?>" alt="Xarxa Telemàtica Educativa de Catalunya" title="" /></a>
    </div>
</footer>

<?php echo $OUTPUT->standard_end_of_body_html() ?>
</body>
</html>
