# Images

There are many considerations when adding images to your website.

- [Image types](#image-types)
- [When to use an img tag over a background image](#foreground-vs-background-images)
- [Images for retina screens](#images-for-retina)
- [Speed of images](#speed-of-images)

### [☛ Videos for images](https://www.youtube.com/playlist?list=PLWjCJDeWfDdcK0q3kJyY12Wjrq0A9Ljph)

---

## Image types

There are a few types of images used on the web:

3. **[JPGs](#-jpgs):** a raster format for photos and complex images
2. **[PNGs](#-pngs):** a raster format for logos and simple graphics
1. **[SVGs](#-svgs):** a vector format for logos and simple graphics
4. **[ICOs](#-favicons):** used only for favicons
5. **GIFs:** an older raster format for logos and simple graphics; generally used just for simple animations

### JPGs

JPG images should be used for photos and other complex graphics. They don’t work particularly well for text.

When preparing JPGs to use on your website save them from Photoshop with the “Save for Web” tool. This allows you to control the quality and monitor the filesize.

Our goal when using “Save for Web” is to increase the compression as much as possible while still retaining a good level of image quality.
By playing with the quality setting and watching the image for artifacts or blurring while also watching the size we can create a balance between filesize and quality.

*For standard photos I usually start around 65% quality and go up or down from there.*

![](images-jpg.jpg)

There are a few other options to watch out for in the “Save for Web” dialogue:

- Check “Progressive”
- Un-check “Embed Color Profile”
- Check “Convert to sRGB”
- Set “Preview” to “Internet Standard RGB (No Color Management)”
- Set “Metadata” to “None”

**[Don’t forget to smush your JPGs afterwards.](#-image-smushing)**

### PNGs

PNG graphics should be used for logos, icons, and text. In many situations SVGs are better suited, but SVGs can’t create quite as many effects.

When preparing PNGs to use on your website save them from Photoshop with the “Save for Web” tool. This allows you to control the quality and monitor the filesize.

*You almost always want to use `PNG-24` because Photoshop’s implementation of PNG-8 is incorrect.*

![](images-png.jpg)

There are a few other options to watch out for in the “Save for Web” dialogue:

- Check “Interlaced”
- Un-check “Embed Color Profile”
- Check “Convert to sRGB”
- Set “Preview” to “Internet Standard RGB (No Color Management)”
- Set “Metadata” to “None”

**[Don’t forget to smush your PNGs afterwards.](#-image-smushing)**

### SVGs

SVG graphics are a great replacement for PNGs—for logos and simple graphics.
SVGs are a vector graphic format, like Adobe Illustrator “ai” files, but made for the browser and the web.
You can open them up in your text editor—because they are just XML—and edit them.

- Create your graphic in Illustrator then go to `File > Save a Copy`
- Choose `SVG` as the type
- In the dialogue that pops up, select `SVG 1.1`
- Under the “Fonts” section choose `Convert to Outline` for the “Type”
- Un-check “Preserve Illustrator Editing Capabilities”
- Press the `More Options` button and fill in a couple more options
	- “CSS Properties” — `Style Elements`
	- “Decimal Places” — 1

![](images-svg.jpg)

**[Don’t forget to smush your SVGs afterwards.](#-image-smushing)**

**Videos**

- [Images: SVG](https://www.youtube.com/watch?v=Q_saQXuejQc&list=PLWjCJDeWfDdcK0q3kJyY12Wjrq0A9Ljph&index=3)

**Code samples**

- [SVG](svg.html)

**Links**

- No SVG fallback to PNG for HTML `<img>` — <https://gist.github.com/3855802>
- No SVG fallback to PNG for CSS background-image — <https://gist.github.com/3856091>

### Favicons

Favicons are a great way to include your brand in the tab of the browser.
They also often show up when you bookmark sites.
It’s suggested to put the favicon right into the root of your website, `http://domain.ca/favicon.ico`, because browsers will look for it there by default.
If, for some reason, you can’t put it there you can use the `<link>` tag to include it.

```html
<!-- This is optional; it’s better to put the icon at the root of your domain. -->
<link href="img/favicon.ico" rel="shortcut icon">
```

Some devices have their own favicon-like graphics, e.g. Apple Touch Icon, Opera Speed Dial Icon, Windows 8 Tile Icon.

#### Dimensions

- **favicon.ico**—16×16, 32×32
- **apple-touch-icon.png**—256×256
- **opera-icon.png**—256×160
- **msapplication-icon.png**—144×144 (transparent)

#### Platform specific meta tags

```html
<link href="/opera-icon.png" rel="icon" type="image/png">
<meta name="application-name" content="Your Site Name">
<meta name="msapplication-TileImage" content="/msapplication-icon.png">
<meta name="msapplication-TileColor" content="#ef0303">
```

**Videos**

- [Images: favicons](https://www.youtube.com/watch?v=G407yUWeU40&list=PLWjCJDeWfDdcK0q3kJyY12Wjrq0A9Ljph&index=4)

**Code samples**

- [Favicons](favicons.html)

**Links**

- **[Icon Slate](http://www.kodlian.com/apps/icon-slate)**
- [Treehouse: How to Make a Favicon](http://blog.teamtreehouse.com/how-to-make-a-favicon)
- [X Icon Editor](http://xiconeditor.com/)
- Apple Touch Icons: <http://mathiasbynens.be/notes/touch-icons>
- Windows 8 Tile Icons: <http://hicksdesign.co.uk/journal/pinned-sites-in-windows-8>
- Opera Speed Dial Icons: <http://dev.opera.com/articles/view/opera-speed-dial-enhancements/>
- [Favicon Cheat Sheet](https://github.com/audreyr/favicon-cheat-sheet)

---

## Foreground vs. background images

There are two ways to insert images into a website, each with a specific purpose:

1. As a foreground content-based image using the HTML `<img>` tag
2. As a background decorative-based image using the CSS property `background-image`

The HTML `<img>` tag is for inserting images that are part of the content. The information inside the image is relevant and important for understanding the content of the page.

Background images are for decorative purposes. If the image is purely there for decoration—to make your site pretty—then it should be a background image using CSS.

### Alt attributes

All images inserted with the `<img>` tag must have an alt attribute:

```html
<img src="pluto.jpg" alt="Photo of Pluto">
```

The alt attribute has two purposes:

1. To describe the photo if it doesn’t download in the browser
2. To describe the photo to someone who cannot see the image, someone using a screen reader

When describing the image you should think about what content is most helpful for a user who cannot see the image. Describe what is important about the image.

- Is the image fancy text? Then just write the word.
- Is it a photo of a planet taken by a telescope? Write something like “Photo of Pluto taken with Hubble”
- Is the photo meant to highlight a point? Write just the point, e.g. “Classic painting showing the triangle composition”
- Is the graphic a chart? Describe the purpose of the chart, e.g. “A bar graph representing the orbital periods of planets in the Solar System”
- Does the graphic not add any relevant information? Then is should be in your CSS. If that’s not possible, leave the alt empty, `<img alt="">`

**Videos**

- [Images: alt attributes](https://www.youtube.com/watch?v=xcWwcTRS79s&list=PLWjCJDeWfDdcK0q3kJyY12Wjrq0A9Ljph&index=1)

**Links**

- [Simply Accessible: Images in Context](http://simplyaccessible.com/article/images-in-context/)
- [Simply Accessible: Descriptive Alt Attributes](http://simplyaccessible.com/bpow/descriptive-alt-attributes/)
- [W3: Techniques for providing useful text alternatives](http://dev.w3.org/html5/alt-techniques/)
- [When is an image ‘purely decorative’?](http://www.4syllables.com.au/2014/04/decorative-images/)
- [Longdesc Links, History, Future](http://www.webaxe.org/longdesc-links-history-future/)

### Figures & captions

Often you’ll need to provide a caption for your image, that’s where the `<figure>` element comes in handy.

```html
<figure>
	<img src="pluto.jpg" alt="">
	<figcaption>Photo of Pluto taken with the Hubble Telescope</figcaption>
</figure>
```

Using the `<figure>` and `<figcaption>` elements we can associate a caption with an image.

You’ll notice that the alt attribute is empty in this situation. Often it’s not needed because the content of the caption would be no different than the alt attribute so we don’t want the information repeated.

**Videos**

- [Images: figures](https://www.youtube.com/watch?v=X-uIMl8V6kg&list=PLWjCJDeWfDdcK0q3kJyY12Wjrq0A9Ljph&index=2)

### Image replacement

Image replacement is a technique to replace text on the page with an image in an accessible manner.
The technique is useful when you cannot produce the text style you’d like in CSS.

```html
<h1 class="masthead ir">Rainbows</h1>
```

```css
.ir {
  /* The technique pushes the text off the side of the element and chops it off */
  overflow: hidden;
  text-indent: 100%;
  white-space: nowrap;
}

.masthead {
  background: transparent url("rainbow.jpg") no-repeat left top;
  /* Put a min-height on the element equal to the image’s height */
  min-height: 100px;
}
```

**Videos**

- [Images: image replacement](https://www.youtube.com/watch?v=U7B9-UtEK7w&list=PLWjCJDeWfDdcK0q3kJyY12Wjrq0A9Ljph&index=5)

**Code samples**

- [Image replacement](image-replacement.html)

**Links**

- [Zeldman: New Image Replacement](http://www.zeldman.com/2012/03/01/replacing-the-9999px-hack-new-image-replacement/)

---

## Images for retina

With many screens now becoming high resolution it’s time to start preparing our images to support the new technology.

There are a few techniques we can use for hi-res screens:

1. **CSS:** can it be done purely with CSS (and it’s practical)? Do it that way.
2. **SVG:** is it a logo, or an icon, or a simple vector-like graphic? Use SVG.
3. **Two PNGs:** is the SVG not producing the desired output? Use a low-res and a hi-res PNGs.
4. **Compressive JPGs:** For photos, use a double-dimension JPG, with lower quality, usually around 25%–35%.
	This may not work in every situation, so use your discretion.

### Two PNGs

Sometimes SVG graphics don’t produce the result you want for icons yet you still want to provide crisp graphics for hi-res screens.
Using two differently sized PNGs and a media query for detecting hi-res screens is another option.

**Videos**

- [Images: multi-resolution PNGs](https://www.youtube.com/watch?v=Q91vXeF0mpU&list=PLWjCJDeWfDdcK0q3kJyY12Wjrq0A9Ljph&index=6)

**Code samples**

- [Multi-resolution PNGs](multi-resolution-pngs.html)

**Links**

- Retina media queries: <https://gist.github.com/3855791>
- [Media Query Asset Downloading Results](http://timkadlec.com/2012/04/media-query-asset-downloading-results/)

### Compressive JPGs

Compressive JPGs are a technique for supplying hi-resolution photos while reducing the download size.
The major downside of this technique is that the images can become very memory intensive.

1. Go to your website and determine the maximum width your image will be displayed at
2. Open the original source file in Photoshop make its width double the size you determined for your website
3. Use `Save For Web` to compress the image to a JPG with a quality of somewhere around 25%–35%

**Videos**

- [Images: compressive JPEGs](https://www.youtube.com/watch?v=3SzWx4_mL7A&list=PLWjCJDeWfDdcK0q3kJyY12Wjrq0A9Ljph&index=7)

**Code samples**

- [Compressive JPGs](compressive-jpgs.html)

**Links**

- [Retina Revolution Compressive JPEGs](http://blog.netvlies.nl/design-interactie/retina-revolution/)
- [RWD Image Compression](http://filamentgroup.com/lab/rwd_img_compression/)

---

## Speed of images

The most important design consideration for websites is speed.
There are a couple things you can do to your images to help speed up your website.

1. Choose the correct image format in Photoshop’s `Save for Web`—and compress it well
2. Use CSS sprites to reduce how many images get downloaded
3. Smush (recompress) all images using an app like ImageOptim

### CSS sprites

Combine your images into a single file in Photoshop and using `background-position` show only a single part of the image at a time.

**Videos**

- [Images: CSS sprites](https://www.youtube.com/watch?v=nm8D1tTs5bY&list=PLWjCJDeWfDdcK0q3kJyY12Wjrq0A9Ljph&index=8)

**Code samples**

- [SVG](svg.html)

### Image smushing

Many images contain extra meta information in their files that can be stripped out without compromising the image.
Smushing will reduce the size of images without reducing their quality.

*All images should be exported from Photoshop with “Save for Web”, then run through a smusher.*

- `PNGs` — should be run through ImageOptim and ImageAlpha
- `JPGs` — should be run through ImageOptim and JPEGmini
- `SVGs` — should be run through SVGO

**Videos**

- [Images: smushing](https://www.youtube.com/watch?v=3nYcq3CPSe8&list=PLWjCJDeWfDdcK0q3kJyY12Wjrq0A9Ljph&index=9)

**Links**

- **[ImageOptim](http://imageoptim.com/)** — compresses all raster images without compromising quality
- **[ImageAlpha](http://pngmini.com/)** — compresses PNGs by allowing you to reduce the number of colours in the image
- **[JPEGmini](http://www.jpegmini.com/)** — losslessly compresses JPG photos
- **[SVGO-GUI](https://github.com/svg/svgo-gui)** — removes extraneous code and whitespace from SVGs to save on filesize
- [Smush.it](http://www.smushit.com/)

---

## Videos

1. [Images: alt attributes](https://www.youtube.com/watch?v=xcWwcTRS79s&list=PLWjCJDeWfDdcK0q3kJyY12Wjrq0A9Ljph&index=1)
1. [Images: figures](https://www.youtube.com/watch?v=X-uIMl8V6kg&list=PLWjCJDeWfDdcK0q3kJyY12Wjrq0A9Ljph&index=2)
1. [Images: SVG](https://www.youtube.com/watch?v=Q_saQXuejQc&list=PLWjCJDeWfDdcK0q3kJyY12Wjrq0A9Ljph&index=3)
2. [Images: favicons](https://www.youtube.com/watch?v=G407yUWeU40&list=PLWjCJDeWfDdcK0q3kJyY12Wjrq0A9Ljph&index=4)
3. [Images: image replacement](https://www.youtube.com/watch?v=U7B9-UtEK7w&list=PLWjCJDeWfDdcK0q3kJyY12Wjrq0A9Ljph&index=5)
4. [Images: multi-resolution PNGs](https://www.youtube.com/watch?v=Q91vXeF0mpU&list=PLWjCJDeWfDdcK0q3kJyY12Wjrq0A9Ljph&index=6)
5. [Images: compressive JPEGs](https://www.youtube.com/watch?v=3SzWx4_mL7A&list=PLWjCJDeWfDdcK0q3kJyY12Wjrq0A9Ljph&index=7)
6. [Images: CSS sprites](https://www.youtube.com/watch?v=nm8D1tTs5bY&list=PLWjCJDeWfDdcK0q3kJyY12Wjrq0A9Ljph&index=8)
7. [Images: smushing](https://www.youtube.com/watch?v=3nYcq3CPSe8&list=PLWjCJDeWfDdcK0q3kJyY12Wjrq0A9Ljph&index=9)

---

## Setting up Photoshop for the web

- [The Mysterious Save For Web Color Shift](http://viget.com/inspire/the-mysterious-save-for-web-color-shift)
