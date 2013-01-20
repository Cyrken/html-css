# All devices setup

Since we are making websites designed for all devices we want to setup our HTML and CSS to show it.

There are a couple `<meta>` tags and a little bit of CSS to write to make all devices recognized your website supports the device.

## HTML

	⋮
	<head>
		⋮
		<meta name="handheldfriendly" content="true">
		<meta name="mobileoptimized" content="240">
		<meta name="viewport" content="width=device-width,initial-scale=1,target-densitydpi=device-dpi">
	</head>

- **handheldfriendly** & **mobileoptimized** are for older devices
	- The `240` states that our website is formatted for a minimum width of 240 pixels
- **viewport** is for newer smartphones. There are three arguments to specify:
	- `width=device-width`—our website is formatted for the prime width of the device
	- `initial-scale=1`—our website shouldn’t be zoomed in or out by default
	- `target-densitydpi=device-dpi`—our website supports whatever resolution the device is

## CSS

	@-moz-viewport { width: device-width; scale: 1; }
	@-ms-viewport { width: device-width; scale: 1; }
	@-o-viewport { width: device-width; scale: 1; }
	@-webkit-viewport { width: device-width; scale: 1; }
	@viewport { width: device-width; scale: 1; }

The `@viewport` rule is a replacement for the viewport meta tag but is new and only supported by a few browsers. Since we’re future thinking designers we want to put it in.

---

## Videos

1. [All devices setup](http://www.youtube.com/watch?v=wiuJemsZm6k)

---

## Links

- https://developer.mozilla.org/en/Mobile/Viewport_meta_tag/
- http://dev.opera.com/articles/view/an-introduction-to-meta-viewport-and-viewport/
- http://learnthemobileweb.com/blog/2009/07/mobile-meta-tags/

