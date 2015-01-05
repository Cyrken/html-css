# Interactions & animations

Different interaction methods for websites (without Javascript) and triggering animations and transitions with those interactions.

### [☛ Videos for organization](https://www.youtube.com/watch?v=mYW7PPO81gk&list=PLWjCJDeWfDdfLCjaTRgCMkl_KNl5cfGlm)

---

- [Transitions](#transitions)
	- [A basic example](#a-basic-example)
	- [Syntax](#syntax)
		- [Multiple different transitions](#multiple-different-transitions)
	- [Resources](#resources)
- [Target pseudo class]()
- [Transforms]()
	- [Syntax]()
	- [Resources]()
- [Videos](#videos)

---

## Transitions

Transitions are simple animations that have a start and an end style that the browser seamlessly animates between, e.g. fading between colours, animating the motion of a box, etc.

- Just about any CSS number (font-size, width, height, top, colours, etc.) can be animated—with one major exception: linear-gradients.
- The transition CSS should always be added to the default CSS state, or there will be weird flashing when it’s triggered.

### A basic example

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

### Syntax

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

### Resources

**Videos**

- [Interactions & animations: basic transitions](https://www.youtube.com/watch?v=mYW7PPO81gk&list=PLWjCJDeWfDdfLCjaTRgCMkl_KNl5cfGlm&index=1)

**Links**

- [MDN: Transition](https://developer.mozilla.org/en-US/docs/Web/CSS/transition)
- [MDN: Timing function](https://developer.mozilla.org/en-US/docs/Web/CSS/timing-function)
- [CSS Tricks: Transition](http://css-tricks.com/almanac/properties/t/transition/)
- [All you need to know about CSS Transitions](http://blog.alexmaccaw.com/css-transitions)

---

## Target pseudo class

---

## Transforms

---

## Videos

- [Interactions & animations: basic transitions](https://www.youtube.com/watch?v=mYW7PPO81gk&list=PLWjCJDeWfDdfLCjaTRgCMkl_KNl5cfGlm&index=1)
- [Interactions & animations: target](https://www.youtube.com/watch?v=Fnhw6hz7AUA&list=PLWjCJDeWfDdfLCjaTRgCMkl_KNl5cfGlm&index=2)
- [Interactions & animations: transforms](https://www.youtube.com/watch?v=n7b1_-Av2Dc&list=PLWjCJDeWfDdfLCjaTRgCMkl_KNl5cfGlm&index=3)
