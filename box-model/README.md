# The box model: everything is a box

### [▶ Video playlist for box model](https://www.youtube.com/playlist?list=PLWjCJDeWfDdeEM254gHVHz26yswh59Hih)

---

- [Everything is a box](#)
- [The box model](#)
	- [Margin & padding](#)
		- [Margin collapsing](#)
	- [Width & height](#)
		- [What units to use](#)
		- [When to use height](#)
	- [Adjusting layout math with border box](#)
- [Box decorations](#)
	- [Background colour](#)
	- [Border](#)
	- [Border radius](#)
	- [Box shadow](#)
- [Videos](#videos)
- [Links](#links)

---

## Everything is a box

---

## The box model

### Margin & padding

#### Margin collapsing

### Width & height

#### What units to use

#### When to use height

### Adjusting layout math with border box

---

## Box decorations

There are lots of different decorations you can apply to a box.

### Background colour 

The most basic decoration is `background-color`, which just applies a colour to the background, behind the padding.

```css
header {
	background-color: #000; /* Solid black */
	background-color: rgba(0,0,0,0.5); /* Semi-transparent black */
}
```

### Border

Border puts a line around the box, outside the background colour. The line can be solid, dashed, dotted, or an image.

The most basic `border` has 3 values: `width`, `style`, `color`:

```css
header {
	/* Apply the same border to all 4 sides of the box */
	border: 3px solid #000;
}
```

- `width` — a measurement to describe the thickness of the border
- `style` — what kind of border: `solid`, `dashed`, `dotted`, `double`, etc.
- `color` — any colour for the border, including semi-transparent ones

If you want to style a specific side of a border, you can target it directly with `border-top`, `border-bottom`, `border-left`, `border-right`.

```css
nav {
	border-bottom: 4px solid pink;
}
```

Each of the inner values also have their own properties like: `border-style`, `border-color`, `border-bottom-color`, etc.

```css
header {
	/* Applies border to all 4 sides */
	border: 3px solid #000;
	/* Overwrites bottom color */
	border-bottom-color: pink;
	/* Overwrites right width */
	border-right-width: 1px;
}
```

**Links**

- [MDN: Border](https://developer.mozilla.org/en-US/docs/Web/CSS/border)
- [MDN: Border-style](https://developer.mozilla.org/en-US/docs/Web/CSS/border-bottom-style)

### Border radius

The `border-radius` property allows you to add rounded corners to your boxes.

```css
a {
	/* Add 8px rounding to all 4 corners */
	border-radius: 8px;
}
```

You could also specify the `border-radius` in other units:

- `em` — the border radius would change with the font size
- `%` — of the box itself: using 50% would make a circle/oval

If you want to specify only certain corners, add more values, like `margin` and `padding`:

```css
a {
	/* Top left, bottom right & top right, bottom left */
	border-radius: 8px 10px;
	/* Top left & top right, bottom left & bottom right */
	border-radius: 8px 10px 6px;
	/* Top left & top right & bottom right & bottom left*/
	border-radius: 8px 10px 6px 12px;
}
```

**Links**

- [MDN: Border-radius](https://developer.mozilla.org/en-US/docs/Web/CSS/border-radius)

### Box shadow

Box shadow allows you to add a drop shadow to the box itself, where `text-shadow` adds to the text inside the box.

```css
div {
	box-shadow: 2px 4px 5px rgba(0,0,0,0.5);
}
```

When specifying `box-shadow` there’s four values to write out:

- `horizontal offset` — how far to shift the shadow left and right: positive numbers move right, negative move left
- `vertical offset` — how far to shift the shadow up and down: positive numbers move down, negative move up
- `blur radius` — how blurry the edge of the shadow will be, the bigger the number the lighter the shadow; `0` would make a crisp edge
- `spread` — *(optional);* how much bigger the shadow is than the box
- `color` — any colour you want, including semi-transparency

```css
div {
	/* Specifying `inset` inside the declaration will make the shadow inside the box */
	box-shadow: inset 0 0 5px rgba(0,0,0,0.5);
}
```

You can also specify multiple shadows on the box using a comma:

```css
div {
	box-shadow: 2px 4px 5px black, -2px -4px 5px red;
}
```

**Links**

- [MDN: Box-shadow](https://developer.mozilla.org/en-US/docs/Web/CSS/box-shadow)

#### [Decorations with images are covered in the “Using images” tutorial.](using-images)

---

## Videos

1. [Box model: margin & padding](https://www.youtube.com/watch?v=1PxUbAFQKoY&index=1&list=PLWjCJDeWfDdeEM254gHVHz26yswh59Hih)
2. [Box model: collapsing top & bottom margins](https://www.youtube.com/watch?v=4nGZ8OULcY0&index=2&list=PLWjCJDeWfDdeEM254gHVHz26yswh59Hih)
3. [Box model: width and height](https://www.youtube.com/watch?v=VEWSy3Gjybo&index=3&list=PLWjCJDeWfDdeEM254gHVHz26yswh59Hih)
4. [Box model: adjusting layout math with border box](https://www.youtube.com/watch?v=jG9sDpBJfqY&index=4&list=PLWjCJDeWfDdeEM254gHVHz26yswh59Hih)
5. [Box model: box decorations](https://www.youtube.com/watch?v=MGCbRH8gpQ0&index=5&list=PLWjCJDeWfDdeEM254gHVHz26yswh59Hih)

## Links

- [MDN: Box Model](https://developer.mozilla.org/en-US/docs/Web/CSS/box_model)
- [Opening the Box Model](http://learn.shayhowe.com/html-css/opening-the-box-model/)
- [Learn Layout](http://learnlayout.com/)
