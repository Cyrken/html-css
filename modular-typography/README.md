# Modular Typography

Creating a modular typography system in CSS creates an extremely reusable font-size system with a harmonious vertical rhythm.

---

## Steps to creating a type system

1. Choose the typeface for the body copy
2. Choose an appropriate font-size; usually 16 px unless the typeface is larger
3. Choose an appropriate line-height for the body text
4. Choose a type scale, often based on a musical or other natural scale
5. Set up the CSS font-sizes, line-heights, and margins to fit the scale

**Example type sizes**

- *font-family*: Georgia
- *font-size*: 16px
- *line-height*: 24px
- *type-scale*: 1.125 (major second)

**How to choose a type scale**

- [A List Apart: More Meaningful Typography](http://alistapart.com/article/more-meaningful-typography)
- [24 Ways: Composing the New Canon](http://24ways.org/2011/composing-the-new-canon/)
- [R(a|ela)tional Design](http://blog.8thlight.com/billy-whited/2011/10/28/r-a-ela-tional-design.html)
- [Typographic Scale](http://spencermortensen.com/articles/typographic-scale/)

**Tools**

- <http://type-scale.com/>
- <http://modularscale.com/>
- **[Modular Type CSS Generator](http://thomasjbradley.github.io/modular-type-css-generator/)** — A tool I created for myself to generate the default CSS code

---

## CSS for modular typography

I usually start my type-scale with the `h6` set at the same font-size as the body copy, `1rem`, then work upwards from there.

To calculate the font-size there’s just some simple multiplication:

```
font-size: previous-font-size × type-scale
```

So for the `h5`, it would be `1 × 1.125`. 

```css
h5 {
	font-size: 1.125rem; /* (1 × 1.125) */
}

h6 {
	font-size: 1rem;
}
```

A more general equation would be this:

```
font-size: base-font-size × type-scale ^ distance-from-base
```

Using the formula to calculate the `h1`:

```css
h1 {
	/* (1 × 1.125 ^ 5) - H1 is 5 steps away from the base font-size */
	font-size: 1.8020rem; 
}
```

### Re-usable classes

With a font-size system set to a scale we will want to use those font-sizes outside of `h1` so we should assign classes to them.

Some designers like to use the Greek alphabet for their font-sizes, some like to use the Metric prefixes. I personally prefer the Metric prefixes because they make sense to me and I don’t know whether alpha is my biggest or smallest font-size.

**Links**

- [Wikipedia: Metric Prefixes](http://en.wikipedia.org/wiki/Metric_prefix)
- [Pragmatic, Practical Font Sizing in CSS](http://csswizardry.com/2012/02/pragmatic-practical-font-sizing-in-css/)

So, we would then assign classes to all the significant font-sizes:

```css
h1, .exa {
	font-size: 1.8020rem;
}

⋮

h6, .kilo {
	font-size: 1rem;
}
```

Often we need larger font-sizes (for banners or hero graphics) and smaller font-sizes (for captions or footnotes). So we should make classes that go above and below the heading sizes:

```css
.yotta {
	font-size: 2.2807rem;
}

.zetta {
	font-size: 2.0273rem;
}

⋮

small, .milli {
	font-size: 0.8889rem;
}

.micro {
	font-size: 0.7901rem;
}
```

### Vertical rhythm

With our different font-sizes we now need to set everything to a semi-baseline grid—or at least create a harmonious vertical rhythm.

We start by applying a consistent margin to all the typography related elements:

```css
h1, h2, h3, h4, h5, h6,
p, ul, ol, dl,
blockquote, table, hr {
	margin: 0 0 1.5rem;
}
```

*The margin-bottom is the same size as our line-height.*

Next, we assign a line-height to every font-size in our type-scale that aligns with our base line-height.

Here’s the formula to calculate the appropriate line-height:

```
line-height: ceil(font-size ÷ base-line-height) × (base-line-height ÷ font-size)
```

To calculate the `h1` it would look like this:

```css
h1, .exa {
	/* line-height: ceil(1.802 ÷ 1.5) × (1.5 ÷ 1.802) */
	font-size: 1.8020rem;
	line-height: 1.6648;
}
```

**Links**

- [Single Direction Margin Declaration](http://csswizardry.com/2012/06/single-direction-margin-declarations/)
