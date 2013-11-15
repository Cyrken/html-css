# Front-end performance

Making your website fast is extremely important for usability and probably one of *the* most important design considerations for the web.

---

## Basic performance checklist

- Use as few resources as possible (images, CSS files, JS files, etc.)
- [Make sure to properly “Save for Web” from Photoshop](https://github.com/algonquindesign/html-css/tree/master/images#image-types)
- [Smush all images after saving them](https://github.com/algonquindesign/html-css/tree/master/images#-image-smushing)
- [Use CSS sprites or DataURIs where appropriate](https://github.com/algonquindesign/html-css/tree/master/images#-css-sprites)
- Put CSS file `<link>` tags at the top
- Put JS file `<script>` tags at the bottom
- Remove any unused or duplicate CSS and JS
- Minify HTML, CSS, and JS
- Sends resources GZipped, by setting up your server
- Send proper caching headers using your server
- Use a content delivery network (CDN) to serve your images

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

## CDNs

- **[CloudFlare](https://www.cloudflare.com/)** — also provides security, minification, caching headers
- [Coral CDN](http://www.coralcdn.org/)
- [Amazon CloudFront](http://aws.amazon.com/cloudfront/)
- [MaxCDN](http://www.maxcdn.com/)

## Links

- [How to Lose Weight in the Browser](http://browserdiet.com/)
- [Front-end performance for web designers and front-end developers](http://csswizardry.com/2013/01/front-end-performance-for-web-designers-and-front-end-developers/)
- [Know When to CDN](http://www.kendoui.com/blogs/teamblog/posts/13-11-07/know-when-to-cdn.aspx)
