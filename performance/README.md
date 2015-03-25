# Website performance

Making your website fast is extremely important for usability and probably one of *the* most important design considerations for the web.

> “Good performance *is* good design”
> — Brad Frost

### [▶ Video playlist for performance]()

---

- [Why performance is important](#why-performance-is-important)
- [Performance budgets](#performance-budgets)
- [Checking performance](#checking-performance)
	- [Browser developer tools](#browser-developer-tools)
	- [Testing tools](#testing-tools)
- [Basic performance checklist](#basic-performance-checklist)
	- [Things in the design](#things-in-the-design)
	- [Things on the server](#things-on-the-server)
- [Content delivery networks](#content-delivery-networks)
- [Videos](#videos)
- [Links](#links)

---

## Why performance is important

**Links**

- [Performance As Design](http://bradfrost.com/blog/post/performance-as-design/)

---

## Performance budgets

**Links**

- [How to Make a Performance Budget](http://danielmall.com/articles/how-to-make-a-performance-budget/)
- [Performance Budget Metrics](http://timkadlec.com/2014/11/performance-budget-metrics/)
- [How Speed Index on webpagetest.org works](https://sites.google.com/a/webpagetest.org/docs/using-webpagetest/metrics/speed-index)

---

## Checking performance

### Browser developer tools

### Testing tools

Some tools to help you diagnose performance problems on your website.

**Links**

- **[Web Page Test](http://www.webpagetest.org/)**
- **[Google PageSpeed](https://developers.google.com/speed/pagespeed/)**
- [Yahoo YSlow](http://yslow.org/)
- [Pingdom Website Speed Test](http://tools.pingdom.com/fpt/)
- [What Does My Site Cost?](http://whatdoesmysitecost.com/)
- [Speedgun.io](http://speedgun.io/)
- [CSS Stats](http://cssstats.com/)

---

## Basic performance checklist


### Things in the design

- ❏ Use as few resources as possible (images, CSS files, JS files, etc.)
- ❏ [Make sure to properly “Save for Web” from Photoshop](../images-formats/#image-types)
- ❏ [Smush all images after saving them](../images-formats/#image-smushing)
- ❏ [Use CSS sprites or DataURIs where appropriate](../images-formats/#css-sprites)
- ❏ Put CSS file `<link>` tags at the top
- ❏ Put JS file `<script>` tags at the bottom
- ❏ Remove any unused or duplicate CSS and JS

### Things on the server

- ❏ Concatenate & minify HTML, CSS, and JS
- ❏ Send resources GZipped, by setting up your server
- ❏ Send proper caching headers using your server
- ❏ Use a content delivery network (CDN) to serve your images

---

## Content delivery networks

**Links**

- **[CloudFlare](https://www.cloudflare.com/)** — also provides security, minification, caching headers
- **[cdnjs](http://cdnjs.com/)**
- [Coral CDN](http://www.coralcdn.org/)
- [Amazon CloudFront](http://aws.amazon.com/cloudfront/)
- [KeyCDN](https://www.keycdn.com/)
- [MaxCDN](http://www.maxcdn.com/)

---

## Videos

- []()
- []()
- []()

## Links

- **[Ten Quick Fixes to Reduce Page Weight](http://www.sitepoint.com/ten-quick-fixes-reduce-page-weight/)**
- **[How to Lose Weight in the Browser](http://browserdiet.com/)**
- **[Perf.Rocks](http://www.perf.rocks/)**
- [The Complete Guide to Reducing Page Weight](http://www.sitepoint.com/complete-guide-reducing-page-weight/)
- [Advanced Image Optimization](http://sixrevisions.com/web-development/advanced-image-optimization/)
- [Front-end performance for web designers and front-end developers](http://csswizardry.com/2013/01/front-end-performance-for-web-designers-and-front-end-developers/)
- [Know When to CDN](http://www.kendoui.com/blogs/teamblog/posts/13-11-07/know-when-to-cdn.aspx)
- [Tips For Optimising SVG Delivery For The Web](http://calendar.perfplanet.com/2014/tips-for-optimising-svg-delivery-for-the-web/)
