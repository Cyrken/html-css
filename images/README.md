# Images

There are many considerations when adding images to your website.

- Image types
- When to use a `<img>` over a `background-image`
- Images for retina screens
- Speed of images

---

## Image types

There are a few image types used on the web:

1. **SVGs:** a vector format for logos and simple graphics
2. **PNGs:** a raster format for logos and simple graphics
3. **JPGs:** a raster format for photos and complex images
4. **GIFs:** an older raster format for logos and simple graphics; generally used just for simple animations
5. **ICOs:** used only for favicons

### SVGs

SVG graphics are a great replacement for PNGs—for logos and simple graphics.
SVGs are a vector graphic format like Adobe Illustrator, but made for the browser and the web.
You can open them up in your text editor—because they are just XML—and edit them.

- Create your graphic in Illustrator then go to `File > Save a Copy`
- Choose `SVG` as the type
- In the dialogue that pops up, select “SVG 1.1”
- Make sure to choose either “SVG Fonts” or “Outline Fonts”

#### Videos

- http://www.youtube.com/watch?v=8O8thqm6GzM

#### Links

- No SVG fallback to PNG for HTML <img> — https://gist.github.com/3855802
- No SVG fallback to PNG for CSS background-image —https://gist.github.com/3856091

### Favicons

Favicons are a great way to include your brand in the tab of the browser.
They also often show up when you bookmark sites.
It’s suggested to put the favicon right into the root of your website, `http://domain.ca/favicon.ico`, because browsers will look for it there by default.
If you can’t put it there for some reason you can use the `<link>` tag to include it.

	<link rel="shortcut icon" href="img/favicon.ico">

Some devices have their own favicon-like requirements, e.g. Apple Touch Icon, Opera Speed Dial Icon, Windows 8 Tile Icon

#### Videos

-

#### Links

- http://www.kodlian.com/apps/icon-slate
- http://xiconeditor.com/
- http://mathiasbynens.be/notes/touch-icons
- http://hicksdesign.co.uk/journal/pinned-sites-in-windows-8
- http://dev.opera.com/articles/view/opera-speed-dial-enhancements/

---

## Images for retina

With many screens now becoming high resolution it’s time to start preparing our image to support the new technology.

There are a few techniques we can use for hi-res screens:

1. **CSS:** can it be done purely with CSS (and it's practical)? Do it that way.
2. **SVG:** is it a logo, or an icon, or a simple vector-like graphic? Use SVG.
3. **Two PNGs:** is the SVG not producing the desired output? Use a low-res and a hi-res PNGs.
4. **Compressive JPGs:** For photos, use a double-size JPG, with lower quality.
	This may not work in every situation, so use your discretion.

### Two PNGs

Sometimes SVG graphics don’t produce the result you want for icons yet you still want to provide crisp graphics for hi-res screens.
Using two differently sized PNGs and a media query for detecting hi-res screens is another option.

#### Videos

- http://www.youtube.com/watch?v=Q91vXeF0mpU

#### Links

- Retina media queries: https://gist.github.com/3855791
- http://timkadlec.com/2012/04/media-query-asset-downloading-results/

### Compressive JPGs

Compressive JPGs are a technique for supplying hi-resolution photos while reducing the download size.
The major downside of this technique is the images can become very memory intensive.

- Using the original source file, make the image double its width on your website
- Use `Save For Web` to compress the image to a JPG with a quality of somewhere around 25%–35%

#### Videos

- http://www.youtube.com/watch?v=3SzWx4_mL7A

#### Links

- http://blog.netvlies.nl/design-interactie/retina-revolution/
- http://filamentgroup.com/lab/rwd_img_compression/

---

## Speed of images

The most important design consideration for websites is speed.
There are a couple things you can do to images to help speed up the website.

1. Choose the correct image format in Photoshop’s `Save for Web`—and compress it well
2. Use CSS sprites to reduce how many images get downloaded
3. Smush (recompress) all images using an app like ImageOptim

### CSS sprites

Combine your images into a single file in Photoshop and using `background-position` show only a single part of the image at a time.

#### Videos

-

### Image smushing

Many images contain extra meta information in their files that can be stripped out without compromising the image.
Smushing will reduce the size of images without reducing their quality

#### Videos

-

#### Links

- http://imageoptim.com/
- http://www.smushit.com/
