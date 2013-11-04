# Front-end performance

Making your website fast is extremely important for usability and probably one of *the* most important design considerations for the web.

---

## Basic performance checklist

- Use as few resources as possible (images, CSS files, JS files, etc.)
- Make sure to properly `Save for Web` from Photoshop
	1. Choose the most appropriate format: PNG-24, PNG,-8 JPG
	2. Un-check “Embed Color Profile”
	3. Set “Metadata” to “None”
	4. If JPEG, check “Progressive”
- Smush all images after saving them using these tools:
	- [ImageOptim](http://imageoptim.com/)
	- [ImageAlpha](http://pngmini.com/)
	- [JPEGMini](http://www.jpegmini.com/)
	- [SVGO-GUI](https://github.com/svg/svgo-gui)
- Use CSS sprites or DataURIs where appropriate
- Put CSS file `<link>` tags at the top
- Put JS file `<script>` tags at the bottom
- Remove any unused or duplicate CSS and JS
- Minify HTML, CSS, and JS
- Sends resources GZipped, by setting up your server
- Send proper caching headers using your server

## Checking performance

Some tools to help you diagnose performance problems on your website:

- **[Google PageSpeed](https://developers.google.com/speed/pagespeed/)**
- [Yahoo YSlow](http://yslow.org/)
- **[Slowy](http://slowyapp.com/)**
- [Pingdom Website Speed Test](http://tools.pingdom.com/fpt/)
- [Web Page Test](http://www.webpagetest.org/)

## Automation tools

Some tools to automate the smushing/minification process:

- [Minimus](http://www.webmaster-source.com/minimus/)
- [CodeKit](http://incident57.com/codekit/)
- [Prepros](http://alphapixels.com/prepros/)
- [Smaller](http://smallerapp.com/)
- [ProCSSor](http://procssorapp.com/)
- **[Grunt.js](http://gruntjs.com/)** — an extremely powerful command line automation tool

## Links

- [How to Lose Weight in the Browser](http://browserdiet.com/)
- [Front-end performance for web designers and front-end developers](http://csswizardry.com/2013/01/front-end-performance-for-web-designers-and-front-end-developers/)
