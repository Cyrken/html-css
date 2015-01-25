# Using images

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

### CSS sprites

Combine your images into a single file in Photoshop and using `background-position` show only a single part of the image at a time.

---

## Videos

3. [Images: image replacement](https://www.youtube.com/watch?v=U7B9-UtEK7w&list=PLWjCJDeWfDdcK0q3kJyY12Wjrq0A9Ljph&index=5)
4. [Images: multi-resolution PNGs](https://www.youtube.com/watch?v=Q91vXeF0mpU&list=PLWjCJDeWfDdcK0q3kJyY12Wjrq0A9Ljph&index=6)
5. [Images: compressive JPEGs](https://www.youtube.com/watch?v=3SzWx4_mL7A&list=PLWjCJDeWfDdcK0q3kJyY12Wjrq0A9Ljph&index=7)
6. [Images: CSS sprites](https://www.youtube.com/watch?v=nm8D1tTs5bY&list=PLWjCJDeWfDdcK0q3kJyY12Wjrq0A9Ljph&index=8)
