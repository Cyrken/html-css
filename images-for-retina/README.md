# Images for retina

---

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
