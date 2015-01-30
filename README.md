# wp-hero-module
Responsive hero gallery module for Wordpress themes - SCSS, Partial, JS, ACF fields.

[Demo](http://kasian.php-dev.domain7.com/careers)

A responsive, full screen image hero gallery, for Wordpress themes using the [Domain7 theme boilerplate](https://bitbucket.org/domain7/wp-theme_boilerplate/src), including Sassy-plate and grunty-plate. Uses [Owl Carousel](http://owlgraphic.com/owlcarousel/) to power the gallery. Includes an ACF group with fields for the following content:

- Hero image
- Hero image overlay color
- Hero image title
- Hero image description
- Text color
- Text alignment (left or right)

## Set up

Installing this module assumes you're using the Domain7 WP Theme Boilerplate, including sassyplate and gruntyplate, and have the ACF plugin installed.

- Add owl.carousel.js, hero.js, hero.scss, and hero.php to your theme in the respective directories, and include each of the files in your theme
- in WP admin, import the acf field group (acf-export-2015-01-30.json) using the ACF import feature.
- Assign the field group to a page (page must set to use page template that contains hero.php)
- Fill in ACF fields on the page