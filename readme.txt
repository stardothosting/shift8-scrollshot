=== Shift8 ScrollShot ===
Contributors: shift8
Donate link: https://shift8web.ca
Tags: scrollshot, screenshot, animation, scroll, viewport
Requires at least: 5.8
Tested up to: 6.9
Requires PHP: 7.4
Stable tag: 1.0.2
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Display tall screenshots inside a fixed-height scrolling frame.

== Description ==

Shift8 ScrollShot turns a tall image into a scrolling screenshot preview. Add the wrapper and image classes, then adjust the behavior with data attributes. It works in regular templates, block markup, and most page builders.

**Features:**

* Automatic loop or scroll-linked movement
* Configurable pause timing
* Optional browser-style frame with traffic-light dots
* Per-instance configuration via data attributes
* Multiple independent instances on one page
* Respects `prefers-reduced-motion`
* No jQuery dependency

== Installation ==

1. Upload the `shift8-scrollshot` folder to `/wp-content/plugins/`.
2. Activate the plugin through the Plugins screen in WordPress.

== Usage ==

1. Add a container element and give it the CSS class `s8-scrollshot`.
2. Add an image inside that container and give the image the CSS class `s8-scrollshot__image`.
3. (Optional) Add data attributes to the container or image to configure the behavior.

Data attributes can be placed on either the wrapper or the image. If the same attribute appears on both, the wrapper value takes priority.

= Page Builder Setup =

In visual builders such as Bricks or Elementor:

1. Add a container or section element and apply the CSS class `s8-scrollshot`.
2. Add an image element inside it and apply the CSS class `s8-scrollshot__image`.
3. Use the builder's custom attributes panel to add any `data-*` attributes.

= Plain HTML Example =

    <div class="s8-scrollshot" data-mode="auto" data-duration="15000">
      <img class="s8-scrollshot__image" src="screenshot.png" alt="Screenshot">
    </div>

== Data Attributes ==

All configuration is done through HTML data attributes on the `.s8-scrollshot` container or the `.s8-scrollshot__image` element. Wrapper values take priority over image values.

* `data-mode` - `auto` or `scroll` (default: `auto`)
* `data-duration` - Total cycle time in milliseconds (default: `12000`)
* `data-end-pause` - Hold time at top and bottom in milliseconds (default: `1500`)
* `data-pause-on-hover` - `true` or `false` (default: `true`)
* `data-reverse` - `true` or `false`, controls bounce direction (default: `true`)
* `data-frame` - `none` or `browser` (default: `none`)
* `data-viewport-height` - Visible area height in pixels (default: `700`)
* `data-viewport-width` - Viewport width in pixels, `0` for auto (default: `0`)
* `data-easing` - Any CSS easing string (default: `ease-in-out`)

== Frequently Asked Questions ==

= Does it require a specific page builder? =

No. The plugin scans the DOM for `.s8-scrollshot` and `.s8-scrollshot__image` classes regardless of which theme or page builder rendered them. It works with Bricks, Elementor, Gutenberg blocks, hand-coded HTML, or any other setup.

= Can I have multiple instances on one page? =

Yes. Each `.s8-scrollshot` instance is independent.

= What happens if my image is shorter than the viewport? =

The image stays static.

= How do I control the width? =

Set a width on the container element, or use the `data-viewport-width` attribute with a pixel value. The image fills the viewport width by default.

= How do I make the scroll slower? =

Increase `data-duration`. For a slow scroll, try `15000` or `20000` (15-20 seconds per cycle). Also increase `data-end-pause` for longer holds at each end.

== Changelog ==

= 1.0.2 =
* Harden data attribute parsing and animation setup.

= 1.0.1 =
* Move runtime CSS and JavaScript to `frontend-assets`.
* Add WordPress.org plugin page assets.

= 1.0.0 =
* Initial release.

== Upgrade Notice ==

= 1.0.2 =
Improves frontend data attribute handling.

= 1.0.1 =
No action required.

= 1.0.0 =
Initial release.
