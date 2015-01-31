# wp-hero-module
Responsive hero gallery module for Wordpress themes - SCSS, Partial, JS, ACF fields.

[Screenshot](http://i.imgur.com/D7I1Ask.jpg)

A responsive, full screen image hero gallery, for Wordpress themes using the [Domain7 theme boilerplate](https://bitbucket.org/domain7/wp-theme_boilerplate/src), including Sassy-plate and grunty-plate. Uses [Owl Carousel](http://owlgraphic.com/owlcarousel/) to power the gallery. Includes an ACF group with fields for the following content:

- Hero image
- Hero image overlay color
- Hero image title
- Hero image description
- Text color
- Text alignment (left or right)

All fields are optional, and if only a single slide is used, it will be displayed as an image instead of a gallery. 

## Set up

Installing this module assumes you're using the Domain7 WP Theme Boilerplate, including sassyplate and gruntyplate, and have the ACF plugin installed.

- Add the following files to your theme, in the respective directories:
```
js/src/modules/hero.js
js/src/vendor/owl.carousel.js
partials/hero.php
stylesheets/scss/modules/hero.scss
stylesheets/scss/vendor/owl.carousel.scss
stylesheets/scss/vendor/owl.theme.scss
stylesheets/scss/vendor/owl.transitions.scss
```
- Include each of the files in your theme (if using gruntyplate, the js files should be automatically watched by grunt).
- in WP admin, import the acf field group (acf-export-2015-01-30.json) using the ACF import feature.
- Assign the field group to a page (page must set to use page template that contains hero.php)
- Fill in ACF fields on the page