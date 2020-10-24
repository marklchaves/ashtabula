# Ashtabula - A Swiper Slider Plugin for WordPress

The official plugin is now available on WordPress.org.

[https://wordpress.org/plugins/ashtabula/](https://wordpress.org/plugins/ashtabula/)

## Allows for the Use of Swiper.js in WordPress

This plugin allows you to use of the popular [Swiper.js](https://swiperjs.com/) library in WordPress. 

## For Showing Responsive Cards in Slides

This is a minimalist plugin that is for displaying responsive cards in a slide. 

- On a large screen device, the slide will show a horizontal card (image on the left and text on the right). 
- On a small device, the slide becomes a stacked card with the image on the top and text on the bottom.

See the screengrabs below to get a visual.

**Note**: You should be comfortable with HTML and CSS to use this plugin.
 
## Installation

1. Manually upload the **contents** of the [zip](ashtabula.zip) file of this repo to /wp-content/plugins/ directory or upload the zip via your wp-admin **Plugins** > **Add New** > **Upload Plugin**.
2. Activate the plugin through the wp-admin **Plugins** page.

That's it!

---

## Usage

1. Use the [demo HTML file](ashtabula-demo.html) as a starter template. Add this HTML to a HTML or code block/element to your page or post.
2. To add the images, use the example CSS below as a template. Add the CSS to your **Appearance** > **Customize** > **Additional CSS** or your child theme's `style.css` file.

CSS example to specify the background image for the responsive card in a slide.

```css
/**
 * Ashtabula - Swiper Slider Plugin Custom Styles
 */

#my-swiper-slide-1 {
 background-image: url(mybgimg-1.png);
}
#my-swiper-slide-2 {
 background-image: url(mybgimg-2.png);
}
#my-swiper-slide-3 {
 background-image: url(mybgimg-3.png);
}
```

[How to add custom CSS to WordPress.](https://medium.com/@marklchaves/adding-custom-css-to-your-wordpress-website-how-to-guide-a50b474af36d)

## Live Demo

Visit the [live demo site](https://caughtmyeyedev.000webhostapp.com/responsive-swiper-demo).

---

## Screengrabs

![Desktop](screengrabs/Screenshot_2020-05-25-Responsive-Swiper-Demo-dt-1280w.jpg)

![Mobile](screengrabs/Screenshot_2020-05-25-Responsive-Swiper-Demo-mob-512w.jpg)

---

## Release Notes

### 1.0.0

- Now using a local copy of the Swiper 6.1.1 JS and CSS libraries.
- Changed plugin directory structure to follow [WordPress best practices](https://developer.wordpress.org/plugins/plugin-basics/best-practices/).


---

### I'll Drink to That ;-)

[![ko-fi](https://www.ko-fi.com/img/githubbutton_sm.svg)](https://ko-fi.com/D1D7YARD)