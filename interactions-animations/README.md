# Interactions & animations

Different interaction methods for websites (without Javascript) and triggering animations and transitions with those interactions.

### [▶ Video playlist for organization](https://www.youtube.com/watch?v=mYW7PPO81gk&list=PLWjCJDeWfDdfLCjaTRgCMkl_KNl5cfGlm)

---

- [Transitions](#transitions)
	- [A basic transition example](#a-basic-transition-example)
	- [Transition syntax](#transition-syntax)
		- [Multiple different transitions](#multiple-different-transitions)
	- [Transition resources](#transition-resources)
- [Target pseudo class](#target-pseudo-class)
	- [Target resources](#target-resources)
- [Transforms](#transforms)
	- [A basic transform example](#a-basic-transform-example)
	- [Transform syntax](#transform-syntax)
		- [Multiple different transforms](#multiple-different-transforms)
		- [Transform vendor prefixes](#transform-vendor-prefixes)
	- [Transform resources](#transform-resources)
- [Videos](#videos)

---

## Transitions

Transitions are simple animations that have a start and an end style that the browser seamlessly animates between, e.g. fading between colours, animating the motion of a box, etc.

- Just about any CSS number (font-size, width, height, top, colours, etc.) can be animated—with one major exception: linear-gradients.
- The transition CSS should always be added to the default CSS state, or there will be weird flashing when it’s triggered.

### A basic transition example

Here’s a simple example that creates an animation between two colours when a link is hovered:

```css
a {
	color: orange;
	transition: color 1000ms linear;
}

a:hover {
	color: red;
}
```

The animation will affect the “color” property and last for “1000ms”, using the “linear”̦ timing function.

### Transition syntax

```css
transition: property length timing-function;
```

- `property` — the CSS property that should be transitioned or `all` to transition all properties that change
- `length` — how long the transition should take in `ms` (milliseconds; where 1000 is 1 second) or `s` (seconds)
- `timing-function` — how the animation should function
	- `linear` — all steps of the animation are equal
	- `ease-in` — the animation starts slowly and speeds up over time
	- `ease-out` — the animation starts quickly and slows down over time
	- `ease-in-out` — the animation starts slowly, speeds up, and slows down
	- *refer to the links below for more timing functions*

Optionally, at the end of the transition a `delay` can be added, this is how long the browser will wait before starting the transition.

Here’s an example with a delay:

```css
transition: all 250ms linear 100ms;
```

#### Multiple different transitions

Different transitions can be applied to different properties of an element if, for example, you want background colour and border radius to transition over different periods of time.

The syntax for multiple transitions is the same, just separate each new transition with a comma.

```css
.box {
	background-color: green;
	border-radius: 0;

	/* It's easier to read if the different transitions are on individual lines */
	transition:
		background-color 250ms ease-out,
		border-radius 1s ease-in-out
	;
}

.box:hover {
	background-color: pink;
	border-radius: 40px;
}
```

### Transition resources

**Videos**

- [Interactions & animations: basic transitions](https://www.youtube.com/watch?v=mYW7PPO81gk&list=PLWjCJDeWfDdfLCjaTRgCMkl_KNl5cfGlm&index=1)

**Links**

- [MDN: Transition](https://developer.mozilla.org/en-US/docs/Web/CSS/transition)
- [MDN: Timing function](https://developer.mozilla.org/en-US/docs/Web/CSS/timing-function)
- [Can I Use: Transitions](http://caniuse.com/#feat=css-transitions)
- [CSS Tricks: Transition](http://css-tricks.com/almanac/properties/t/transition/)
- [All you need to know about CSS Transitions](http://blog.alexmaccaw.com/css-transitions)

---

## Target pseudo class

The `:target` pseudo class in CSS allows you to style an element when it is targeted by internal linking and the URL.

Say we have this URL:

```
https://domain.com/index.html#box
```

And this HTML:

```html
<div id="box" class="box">Box!</div>
```

Notice how the hash in the URL is the same as the ID on the `div`—this is the same technique as internal linking.

But, we can now target that item in CSS like this:

```css
.box:target {
	background-color: #ffc;
}
```

Now box will be styled with a background colour whenever the URL matches it’s ID.

### Target resources

**Videos**

- [Interactions & animations: target](https://www.youtube.com/watch?v=Fnhw6hz7AUA&list=PLWjCJDeWfDdfLCjaTRgCMkl_KNl5cfGlm&index=2)

**Links**

- [MDN: target](https://developer.mozilla.org/en-US/docs/Web/CSS/:target)
- [Can I Use: target](http://caniuse.com/#feat=css-sel3)
- [CSS Tricks: target](http://css-tricks.com/on-target/)
- [CSS :target](http://davidwalsh.name/css-target)

---

## Transforms

Transforms allow us to apply different alterations to HTML elements that change them in a specific way, e.g. rotate, scale, skew, move (translate), etc.

### A basic transform example

```css
.box {
	transform: rotate(30deg);
}
```

The above CSS would rotate that HTML element 30 degrees.

### Transform syntax

There’s a whole bunch of different functions to manipulate the elements:

- `rotate(angle)` — rotates the element the specified angle; negative numbers can be used

	```
	transform: rotate(30deg)
	transform: rotate(-15deg)
	```

- `translate(x, y)` — moves the element horizontally and vertically; negative numbers okay; also `translateX()`, `translateY()`

	```
	transform: translate(200px, 0) /* moves right 200px, doesn’t move down */
	```

- `scale(size)` — grow or shrink the element; negative numbers okay; also: `scaleX()`, `scaleY()`

	```
	transform: scale(1.5, 2) /* scale horizontal 1.5x and vertically 2x */
	```

- *refer to the links below for more transformation functions*

#### Multiple different transforms

Multiple transformations can be applied to a single element by separating each function with a space:

```css
.box {
	/* Rotates and scales the element */
	transform: rotate(30deg) scale(1.5);
}
```

#### Transform vendor prefixes

Since CSS transforms are so new they still need a few vendor prefixes, so you’d actually have to write your transforms like this:

```css
.box {
	/* Opera and Firefox can be omitted because they've been prefix free for many versions */
	-ms-transform: rotate(30deg);
	-webkit-transform: rotate(30deg);
	transform: rotate(30deg);
}
```

**It’s important that the non-prefixed version always comes last.**

### Transform resources

**Videos**

- [Interactions & animations: transforms](https://www.youtube.com/watch?v=n7b1_-Av2Dc&list=PLWjCJDeWfDdfLCjaTRgCMkl_KNl5cfGlm&index=3)

**Links**

- [MDN: Transform](https://developer.mozilla.org/en-US/docs/Web/CSS/transform)
- [Can I Use: Transform](http://caniuse.com/#feat=transforms2d)
- [CSS Tricks: Transform](http://css-tricks.com/almanac/properties/t/transform/)
- [Animation Using CSS Transforms](http://www.the-art-of-web.com/css/css-animation/)

---

## Videos

- [Interactions & animations: basic transitions](https://www.youtube.com/watch?v=mYW7PPO81gk&list=PLWjCJDeWfDdfLCjaTRgCMkl_KNl5cfGlm&index=1)
- [Interactions & animations: target](https://www.youtube.com/watch?v=Fnhw6hz7AUA&list=PLWjCJDeWfDdfLCjaTRgCMkl_KNl5cfGlm&index=2)
- [Interactions & animations: transforms](https://www.youtube.com/watch?v=n7b1_-Av2Dc&list=PLWjCJDeWfDdfLCjaTRgCMkl_KNl5cfGlm&index=3)
- [Interactions & animations: basic animations](https://www.youtube.com/watch?v=wK_UFBZgSMk&index=4&list=PLWjCJDeWfDdfLCjaTRgCMkl_KNl5cfGlm)
- [Interactions & animations: keyframe-based animations](https://www.youtube.com/watch?v=nG8hOT1TL8I&index=5&list=PLWjCJDeWfDdfLCjaTRgCMkl_KNl5cfGlm)
- [Interactions & animations: sprite-based animations](https://www.youtube.com/watch?v=oY3p-Rrl9Hg&index=6&list=PLWjCJDeWfDdfLCjaTRgCMkl_KNl5cfGlm)
- [Interactions & animations: vendor prefixes](https://www.youtube.com/watch?v=C5eDPR3pANQ&index=7&list=PLWjCJDeWfDdfLCjaTRgCMkl_KNl5cfGlm)
