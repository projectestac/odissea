# Components For Learning (c4l)
 
A plugin for the Moodle TinyMCE editor providing a set of visual components designed explicitly for Learning, based on the parent project componentsforlearning.org.

No configuration settings are required for this plugin. Just install it from the Site Administration area (Plugins → Install plugins → Install plugin from ZIP file). 

Once the plugin is installed, a button and a menu item will be visible in the TinyMCE editor. There is one setting to preview the components when hover the mouse cursor over each component, it is enabled by default, to change it modify enablepreview setting on Site Administration area → Plugins → Text Editors → TinyMCE editor → Components for Learning (C4L).

The capability 'tiny/c4l:viewplugin' allows to configure the plugin visibility to any role.

## Dark mode

Moodle has no dark mode of its own, so the plugin follows Bootstrap's colour-mode attribute, which Boost already compiles: everything below applies when `data-bs-theme="dark"` is set on the `<html>` element.

**Works out of the box.** The components themselves — surfaces, tints, accent bars, badges and icons — and the component icons in the picker.

**Opt in.** The picker's own interface stays light unless you switch it on. It comes in two blocks, both at the end of `scss/_tokens.scss`, commented out:

- **Block A** — the picker's page surface and its grey text.
- **Block B** — its controls: the panel, the filter pills, the select, the component buttons and their variant strip, the docs tabs and the preview panel.

The two are complementary; either on its own leaves the picker half painted.

**On a dark site, switch both blocks on.** The picker's component icons lighten automatically, but the buttons they sit on belong to block B. Left off, those buttons stay white and the lightened icons wash out against them — a contrast ratio of about 2.5:1, below the 3:1 that WCAG asks of interface graphics. Everything a course actually renders is unaffected; this concerns the editor's own dialogue only.

There are two ways to switch them on.

*With the build tools:* uncomment the block in `scss/_tokens.scss` and run `npm run sass`.

*Without them:* copy the block and paste it into your theme's raw SCSS, or into Site administration → Appearance → Additional HTML → `additionalhtmlhead`, wrapped in `<style>` tags. Nothing else has to change — these are only CSS custom properties. Note that the compiled `styles.css` is minified and carries no comments, so there is nothing to uncomment there.

```css
/* Block A — page surface and text greys */
html[data-bs-theme="dark"] {
    --c4l-ui-page:            #0f1214;
    --c4l-ui-page-border:     #2a3037;
    --c4l-ui-text:            #c3cad1;
    --c4l-ui-text-strong:     #e6e9ec;
    --c4l-ui-text-muted:      #8d959d;
}

/* Block B — controls */
html[data-bs-theme="dark"] {
    --c4l-ui-surface:         #181c20;
    --c4l-ui-border:          #2a3037;
    --c4l-ui-button-border:   #2a3037;
    --c4l-ui-raised:          #22282e;
    --c4l-ui-divider:         #2a3037;
    --c4l-ui-shadow:          transparent;
    --c4l-ui-focus:           rgba(129, 171, 245, .35);
    --c4l-ui-tab-border:      #3a434c;
    --c4l-ui-tab-active-bg:   #c3cad1;
    --c4l-ui-tab-active-ink:  #0f1214;
    --c4l-ui-panel-border:    #2a3037;
    --c4l-ui-link:            #81abf5;
    --c4l-ui-accent:          #81abf5;

    --c4l-ui-variant-bg:       transparent;
    --c4l-ui-variant-sep:      #2a3037;
    --c4l-ui-variant-edge:     #2a3037;
    --c4l-ui-variant-on-bg:    #1679f9;
    --c4l-ui-variant-hover-bg: #2c3339;
}
```

To recolour a single component rather than the whole set, override its own token (`--c4l-tip-bg`, `--c4l-tip-accent`, and so on) instead of the palette. The full list is in `scss/_tokens.scss`.

This plugin is based on another plugin for Atto editor named Components for Learning (C4L) (https://moodle.org/plugins/atto_c4l) that it is part of a broader, collaborative project called Components for Learning (https://componentsforlearning.org). You will find there all the related documentation and detailed usage recommendations and examples for all components included here.

Icons authored by Roger Segú, except for the following, licensed under Creative Commons CCBY, [Glasses](https://thenounproject.com/icon/70907/) by Austin Condiff, [Estimate](https://thenounproject.com/icon/1061038/) by xwoodhillx, [Quote](https://thenounproject.com/icon/77920/) by Rohith M S, [Pin](https://thenounproject.com/icon/689105/) by Icons fest, [Bulb](https://thenounproject.com/icon/1175583/) by Adrien Coquet, [Date](https://thenounproject.com/icon/1272092/) by Karan, [Success](https://thenounproject.com/icon/3405499/) by Alice Design, [Clock](https://thenounproject.com/icon/2310543/) by Aybige, [Feedback](https://thenounproject.com/icon/651868/) by dilayorganci, [Star](https://thenounproject.com/icon/1368720/) by Zaff Studio, [Tag](https://thenounproject.com/icon/938953/) by Ananth, Redo and Book Open by [Unicons](https://github.com/Iconscout/unicons)
