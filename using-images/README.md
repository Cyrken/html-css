# Using images

### [▶ Video playlist for using images](https://www.youtube.com/watch?v=xVv3SHU_l1o&list=PLWjCJDeWfDdewUQe57s3Tuktg_8eT0yA7)

---

## Foreground vs. background images

There are two ways to insert images into a website, each with a specific purpose:

1. As a foreground content-based image using the HTML `<img>` tag
2. As a background decorative-based image using the CSS property `background-image`

The HTML `<img>` tag is for inserting images that are part of the content. The information inside the image is relevant and important for understanding the content of the page.

Background images are for decorative purposes. If the image is purely there for decoration—to make your site pretty—then it should be a background image using CSS.

## Alt attributes

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

**Links**

- [Simply Accessible: Images in Context](http://simplyaccessible.com/article/images-in-context/)
- [Simply Accessible: Descriptive Alt Attributes](http://simplyaccessible.com/bpow/descriptive-alt-attributes/)
- [W3: Techniques for providing useful text alternatives](http://dev.w3.org/html5/alt-techniques/)
- [When is an image ‘purely decorative’?](http://www.4syllables.com.au/2014/04/decorative-images/)
- [Longdesc Links, History, Future](http://www.webaxe.org/longdesc-links-history-future/)

## Figures & captions

Often you’ll need to provide a caption for your image, that’s where the `<figure>` element comes in handy.

```html
<figure>
	<img src="pluto.jpg" alt="">
	<figcaption>Photo of Pluto taken with the Hubble Telescope</figcaption>
</figure>
```

Using the `<figure>` and `<figcaption>` elements we can associate a caption with an image.

You’ll notice that the alt attribute is empty in this situation. Often it’s not needed because the content of the caption would be no different than the alt attribute so we don’t want the information repeated.

## Image replacement

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

**Links**

- [Zeldman: New Image Replacement](http://www.zeldman.com/2012/03/01/replacing-the-9999px-hack-new-image-replacement/)

---

## CSS sprites

Combine your images into a single file in Photoshop and using `background-position` show only a single part of the image at a time.

---

## Videos

1. [Using images: HTML image tags](https://www.youtube.com/watch?v=xVv3SHU_l1o&index=1&list=PLWjCJDeWfDdewUQe57s3Tuktg_8eT0yA7)
2. [Using images: alt attributes](https://www.youtube.com/watch?v=xcWwcTRS79s&index=2&list=PLWjCJDeWfDdewUQe57s3Tuktg_8eT0yA7)
3. [Using images: figures](https://www.youtube.com/watch?v=X-uIMl8V6kg&index=3&list=PLWjCJDeWfDdewUQe57s3Tuktg_8eT0yA7)
4. [Using images: background images](https://www.youtube.com/watch?v=pF-AeeBIvzo&index=4&list=PLWjCJDeWfDdewUQe57s3Tuktg_8eT0yA7)
5. [Using images: multiple background images](https://www.youtube.com/watch?v=dt6Af0V-Xxw&index=5&list=PLWjCJDeWfDdewUQe57s3Tuktg_8eT0yA7)
6. [Using images: gradients](https://www.youtube.com/watch?v=d6cYf6qXHBQ&index=6&list=PLWjCJDeWfDdewUQe57s3Tuktg_8eT0yA7)
7. [Using images: CSS sprites](https://www.youtube.com/watch?v=nm8D1tTs5bY&index=7&list=PLWjCJDeWfDdewUQe57s3Tuktg_8eT0yA7)
8. [Using images: image replacement](https://www.youtube.com/watch?v=U7B9-UtEK7w&index=8&list=PLWjCJDeWfDdewUQe57s3Tuktg_8eT0yA7)
9. [Using images: patterns](https://www.youtube.com/watch?v=M4M1HT-Tlxs&index=9&list=PLWjCJDeWfDdewUQe57s3Tuktg_8eT0yA7)
10. [Using images: border images](https://www.youtube.com/watch?v=Adfa4xqYmik&index=10&list=PLWjCJDeWfDdewUQe57s3Tuktg_8eT0yA7)
11. [Using images: creating a button](https://www.youtube.com/watch?v=pIDLkglb_WE&index=11&list=PLWjCJDeWfDdewUQe57s3Tuktg_8eT0yA7)
12. [Using images: hero banner with background images](https://www.youtube.com/watch?v=RBxtA5ZM1MY&index=12&list=PLWjCJDeWfDdewUQe57s3Tuktg_8eT0yA7)
13. [Using images: improving the toggle nav](https://www.youtube.com/watch?v=B15cheIlUZ0&index=13&list=PLWjCJDeWfDdewUQe57s3Tuktg_8eT0yA7)
