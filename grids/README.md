# Grids

Making flexible and responsive grids using HTML & CSS.

## [☛ Videos for grids]()

---

## Flexible grids

Flexible grids in CSS are composed of nested `<div>` elements within a row.

```html
<div class="grid">
	<div class="unit">Grid Unit 1</div>
	<div class="unit">Grid Unit 2</div>
	<div class="unit">Grid Unit 3</div>
</div>
```

Within CSS, we can then float of each of the units to fit beside each other.

```css
.grid {
	overflow: hidden;
}

.unit {
	float: left;
	/* The width is set to 33% because we want to fit three columns in our row. */
	width: 33.3333%;
}
```

This will create a grid row with three columns inside that flex with the width of the browser.
The major problem is that there is no space, or gutter, between each column.
To solve the problem in the most flexible manner, we can put another `<div>` inside to add padding.

```html
⋮
<div class="unit">
	<div class="unit-spacer">
		Grid 1
	</div>
</div>
⋮
```

```css
.unit-spacer {
	padding: 8px;
}
```

Using a `.unit-spacer` gives us the flexibility to choose whether we want padding or not.
So we could create grid units with full bleed images.

```html
⋮
<div class="unit">
	<img src="http://placehold.it/500x500" alt="">
</div>
⋮
```

We can also create a column in our grid that takes up ⅔ of the available space—a column that is double width.

```html
⋮
<div class="unit unit-2-3">
	<div class="unit-spacer">
		Double Width 1
	</div>
</div>
⋮
```

```css
.unit-2-3 {
	width: 66.6667%;
}
```

### Videos

- <https://www.youtube.com/watch?v=csNyuON4G-s&list=PLWjCJDeWfDdeUChfM6TV2U7jzQVRjsu60&index=1>

---

## Responsive grids

We can extend our flexible grids to be responsive using a technique with multiple classes on our `<div>` elements.

```html
<div class="grid">
	<div class="unit unit-s-1 unit-m-1 unit-l-1-3">Grid Unit 1</div>
	<div class="unit unit-s-1 unit-m-1-2 unit-l-1-3">Grid Unit 2</div>
	<div class="unit unit-s-1 unit-m-1-2 unit-l-1-3">Grid Unit 3</div>
</div>
```

You’ll notice multiple classes on each of the `.unit` `<div>` elements.
Each class represents the position the `<div>` will be in at each different screen size.

- `unit-s-1`—means the unit takes up 100% of the space on small screens
- `unit-m-1-2`—means the unit takes up ½ the available space on medium screens
- `unit-l-1-3`—means the unit takes up ⅓ the available space on large screens

In our CSS we would then create these classes and style them within different media queries.

```css
.unit {
	float: left;
}

.unit-s-1 {
	width: 100%;
}

@media only screen and (min-width: 38em) {

	.unit-m-1 {
		width: 100%;
	}

	.unit-m-1-2 {
		width: 50%;
	}

}

@media only screen and (min-width: 60em) {

	.unit-l-1-3 {
		width: 33.3333%;
	}

}

```

### Videos

- <https://www.youtube.com/watch?v=bZCMtSDdkcI&list=PLWjCJDeWfDdeUChfM6TV2U7jzQVRjsu60&index=2>

---

## Complete grid system

A complete grid system would be composed of rows that can have thirds, quarters, fifths, etc.
As many columns as you’d like.

Here’s a complete grid system that’s allows up to 4 columns per row.

[☛ grid.css](css/grid.css)

---

## Grid frameworks

Bootstrap is a prototyping CSS framework that comes setup with a theme, grids, and components to help you create a quick prototype for any website.

- **<http://getbootstrap.com/>**

*Helpful links*

- <http://net.tutsplus.com/tutorials/html-css-techniques/mobile-first-with-bootstrap-3/>
- <http://www.sitepoint.com/understanding-twitter-bootstrap-3/>

*Other frontend grid systems & libraries*

- <http://foundation.zurb.com/>
- <http://purecss.io/>
- <https://gridsetapp.com/>
