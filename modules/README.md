# Modules

Thinking modularly in CSS allows us to create more reusable CSS.

### [☛ Videos for modules]()

---

## Examples

- [List group](list-group-html): vertical & horizontal
- [Buttons](buttons.html): small, medium, large, alternative
- [Media object](media-object.html): flexible image size, embeddable, with list group, stacked, reversed
- [Icons](icons): different sizes, stacked, inline, image replacement

### Videos

-
-
-

---

## Naming conventions

There are a couple major naming conventions for modular CSS that help clarify the intent of our classes and help us visualize the HTML by just looking at the CSS classes.

- <http://bem.info/>
- <http://smacss.com/>

Part of what we learned today comes directly from SMACSS: the icon naming conventions.

BEM takes naming a little further by using double underscores or double hyphens to represent certain ideas.

- **<http://csswizardry.com/2013/01/mindbemding-getting-your-head-round-bem-syntax/>**

```html
<div class="media media--stacked">
  <div class="media__img"></div>
  <div class="media__body"></div>
</div>
```

1. Name your component with a descriptive phrase, e.g. `media`
2. Any classes that modify an original, base class, are separated with hyphens, e.g. `media--stacked`
3. Any classes that represent pieces that are inside of the original class, or sub-components, are separated with underscores, e.g. `media__body`

*I find it helpful to remember that when using **under**scores the element is **under** the original component.*

### Videos

-

---

## Links

- <https://github.com/stubbornella/oocss/wiki>
- <http://coding.smashingmagazine.com/2011/12/12/an-introduction-to-object-oriented-css-oocss/>
- <http://csswizardry.com/2013/05/the-flag-object/>
- <https://github.com/csswizardry/CSS-Guidelines>
