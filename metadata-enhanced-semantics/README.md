# Metadata & enhanced semantics

There are a bunch of standards to enhance the semantics of our websites. Search engines look for these semantics, infer information from them, and adapt their search results to them. Also, when people link to your website from social media sites you can provide defaults for the displayed content.

- **[Web 3.0](http://vimeo.com/11529540)**
- [Tim Berners-Lee: The Next Web](http://www.ted.com/talks/tim_berners_lee_on_the_next_web.html)

---

## Structured data

[⬇ Download sample Microdata person](microdata-person.html) · [⬇ Download sample Microdata recipe](microdata-recipe.html)

There are three major standards for structured data: Microdata, Microformats, and RDFa Lite. Microdata is quickly becoming the most popular and is the format that Google encourages authors to use.

Using structured data, we can enhance the semantics of our website so search engines more thoroughly understand our content.

**The Microdata extends all the semantics you choose in HTML—concentrate on choosing the best HTML tags first then add Microdata.**

Here’s an example [person/contact](http://schema.org/Person) marked up with Microdata:

```html
<div itemscope itemtype="http://schema.org/Person">
	<h1 itemprop="name">Sir John A. Macdonald</h1>
	<span itemprop="title">Prime Minister of Canada</span>
	<p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
		<span itemprop="streetAddress">24 Sussex Dr.</span>
		<br>
		<span itemprop="addressLocality">Ottawa</span>,
		<span itemprop="addressRegion">ON</span>,
		<span itemprop="addressCountry">Canada</span>
		<br>
		<span itemprop="postalCode">K1A 0A3</span>
	</p>
	<dl>
		<dt>E-mail:</dt><dd><a href="mailto:primeminister@canada.ca" itemprop="email">primeminister@canada.ca</a></dd>
		<dt>Tel:</dt><dd><a href="tel:+16139416900" itemprop="telephone">613-941-6900</a></dd>
		<dt>Website:</dt><dd><a href="http://canada.ca/" itemprop="url">http://canada.ca/</a></dd>
	</dl>
</div>
```

There are a few attributes to understand:

- `itemtype`—what kind of thing you’re marking up, [there’s a big list](http://schema.org/docs/schemas.html)
- `itemscope`—defines the HTML element that surrounds all the content related to the item
- `itemprop`—defines a single piece on content for the item

**Links**

- **[Microdata at Schema.org](http://schema.org/)**
- [Microformats](http://microformats.org/)
- [RDFa Lite](http://rdfa.info/)
- [RDFa Lite vs. Microdata](http://manu.sporny.org/2012/mythical-differences/)
- [Schema.org markup for logos](http://googlewebmastercentral.blogspot.ca/2013/05/using-schemaorg-markup-for-organization.html)
- [Schema Creator](http://schema-creator.org/)

**Validators**

- **[Google: Rich Snippets Testing Tool](http://www.google.com/webmasters/tools/richsnippets)**
- [W3 Markup Validation Service](http://validator.w3.org/nu/)
- [Structure Data Linter](http://validator.w3.org/nu/)
- [W3 Semantic Extractor](http://www.w3.org/2003/12/semantic-extractor)

---

## Social semantics

The web is an inherently social place. To encourage finding and understanding social connections we can define them in HTML using the relationship (`rel`) attribute.

- [A List Apart: Spread Your Message with Third-Party Metadata](http://alistapart.com/article/like-able-content-spread-your-message-with-third-party-metadata)

### Relationships

[⬇ Download example relationships](relationships.html)

Relationships can be defined in HTML using the `rel` attribute. These relationships semantically connect people together on the web.

```html
<!-- Linking to `me` -->
<a href="http://thomasjbradley.ca" rel="me">Thomas J Bradley</a>
<!-- Linking to my `spouse` -->
<a href="http://elizabethandjane.ca" rel="spouse">elizabeth&amp;jane photography</a>
<!-- Linking to a `friend` and a `colleague` -->
<a href="http://jedlooker.com/" rel="friend colleague">Jed Looker</a>
<!-- Linking to an `external` website -->
<a href="http://gmpg.org/xfn/creator" rel="external">XFN Creator</a>
<!-- Defining a link that represents the `home` page of your website -->
<a href="/index.html" rel="home">Home</a>
<!--
	Defining that the linked item is a download using `enclosure`
	Using the `download=""` attribute, the file will be downloaded to the computer instead of opening
	The content inside the download attribute can define its final file name
-->
<a href="/files/download.pdf" download="Download.pdf" rel="enclosure">Download Now!</a>
<!-- Linking to the `license` for this document -->
<link href="https://github.com/algonquin-design/html-css/blob/master/LICENSE" rel="license">
```

**Links**

- **[Rel Values](http://microformats.org/wiki/existing-rel-values)**
- [XFN](http://gmpg.org/xfn/)
- [XFN Creator](http://gmpg.org/xfn/creator)
- [Marking Up Relationships](http://maban.co.uk/49)

#### Authorship

In Google you can define whom the author of a website is by connecting your Google+ profile.

```html
<link href="https://plus.google.com/{{YOUR PERSONAL GOOGLE+ PROFILE HERE}}" rel="author">
```

**Links**

- [Google Profile Authorship](https://support.google.com/webmasters/answer/2539557?hl=en)

### Facebook Open Graph

[⬇ Download sample Facebook Open Graph](facebook-open-graph.html)

Facebook uses the Open Graph Protocol to extract information from your website when a user links to it.

Four tags are required to support the Open Graph Protocol:

```html
<meta property="og:type" content="article">
<meta property="og:title" content="Title of this page">
<meta property="og:url" content="URL of this page">
<meta property="og:image" content="URL to an image representing this page">
<!-- `og:site_name` is optional but highly recommended -->
<meta property="og:site_name" content="Name of your website">
<!-- `og:description` is also optional, but could easily be filled with the meta description -->
<meta property="og:description" content="Description of this page">
```

There are plenty of optional tags for descriptions, author info—and more specific forms of content like: [music](http://ogp.me/#type_music), [video](http://ogp.me/#type_video), [books](http://ogp.me/#type_book), etc.

**Links**

- [Facebook Open Graph Documentation](http://developers.facebook.com/docs/opengraph/)
- [The Open Graph Protocol](http://ogp.me/)
- [Facebook Open Graph Tag Overview](http://davidwalsh.name/facebook-meta-tags)
- [Facebook Open Graph Validator](https://developers.facebook.com/tools/debug/)

### Twitter Cards

[⬇ Download sample Twitter Card](twitter-card.html)

Twitter Cards allow designers to attach supplemental information to tweets when people link to your website.

The default card is the “summary” card; it requires four tags:

```html
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Title of this page">
<meta name="twitter:url" content="URL of this page">
<meta name="twitter:description" content="Description of this page">
<!-- The image should be 120x120 pixels in dimension -->
<meta name="twitter:image" content="URL to an image representing this page">
```

There are many optional tags for larger images and different types of content like: [photos](https://dev.twitter.com/docs/cards/types/photo-card), [galleries](https://dev.twitter.com/docs/cards/types/gallery-card), [apps](https://dev.twitter.com/docs/cards/types/app-card), [media](https://dev.twitter.com/docs/cards/types/player-card), and [products](https://dev.twitter.com/docs/cards/types/product-card).

**Links**

- [Twitter Card Documentation](https://dev.twitter.com/docs/cards)
- [Markup Reference](https://dev.twitter.com/docs/cards/markup-reference)
- [Twitter Card Validator](https://dev.twitter.com/docs/cards/validation/validator)
