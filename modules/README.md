# Modules

Thinking modularly in CSS allows us to create more reusable CSS.

### [☛ Videos for modules](https://www.youtube.com/playlist?list=PLWjCJDeWfDddIWwftJxBqtHpw8CbFMXsa)

---

## Examples

- [List group](list-group-html): vertical & horizontal
- [Buttons](buttons.html): small, medium, large, alternative
- [Media object](media-object.html): flexible image size, embeddable, with list group, stacked, reversed
- [Icons](icons): different sizes, stacked, inline, image replacement

**Videos**

1. [Modules: list group](https://www.youtube.com/watch?v=Kcd1742iCVA&list=PLWjCJDeWfDddIWwftJxBqtHpw8CbFMXsa&index=1)
2. [Modules: buttons](https://www.youtube.com/watch?v=u4yYGmI2-Qk&list=PLWjCJDeWfDddIWwftJxBqtHpw8CbFMXsa&index=2)
3. [Modules: media object](https://www.youtube.com/watch?v=bE0VpK1SjUc&list=PLWjCJDeWfDddIWwftJxBqtHpw8CbFMXsa&index=3)
4. [Modules: combining the media object and the list group](https://www.youtube.com/watch?v=V4QQFVa2Dok&list=PLWjCJDeWfDddIWwftJxBqtHpw8CbFMXsa&index=4)
5. [Modules: media object alternatives](https://www.youtube.com/watch?v=TTTrGPlIBJ8&list=PLWjCJDeWfDddIWwftJxBqtHpw8CbFMXsa&index=5)
6. [Modules: making modular icons](https://www.youtube.com/watch?v=s8198ThMOgA&list=PLWjCJDeWfDddIWwftJxBqtHpw8CbFMXsa&index=6)
7. [Modules: combining the icons and the list group](https://www.youtube.com/watch?v=zfUErXraYCc&list=PLWjCJDeWfDddIWwftJxBqtHpw8CbFMXsa&index=7)
8. [Modules: icon image replacement](https://www.youtube.com/watch?v=bv6OQ6X5xWY&list=PLWjCJDeWfDddIWwftJxBqtHpw8CbFMXsa&index=8)

---

## Naming conventions

There are a couple major naming conventions for modular CSS that help clarify the intent of our classes and help us visualize the HTML by just looking at the CSS classes.

- [BEM](http://bem.info/)
- [SMACSS](http://smacss.com/)

Part of what we learned today comes directly from SMACSS: the icon naming conventions.

BEM takes naming a little further by using double underscores or double hyphens to represent certain ideas.

- [Getting Your Head Around BEM Syntax](http://csswizardry.com/2013/01/mindbemding-getting-your-head-round-bem-syntax/)

```html
<div class="media media--highlighted">
  <div class="media__img"></div>
  <div class="media__body"></div>
</div>
```

1. Name your component with a descriptive phrase, e.g. `media`
2. Any classes that modify an original, base class, are separated with hyphens, e.g. `media--highlighted`
3. Any classes that represent pieces that are inside of the original class, or sub-components, are separated with underscores, e.g. `media__body`

*I find it helpful to remember that when using **under**scores the element is **under** the original component.*

**Videos**

- [Modules: modified BEM naming convention](https://www.youtube.com/watch?v=TmxQ_jEcpk0&list=PLWjCJDeWfDddIWwftJxBqtHpw8CbFMXsa&index=9)

---

## Links

- [OOCSS](https://github.com/stubbornella/oocss/wiki)
- [An Introduction to OOCSS](http://coding.smashingmagazine.com/2011/12/12/an-introduction-to-object-oriented-css-oocss/)
- [The Flag Object](http://csswizardry.com/2013/05/the-flag-object/)
- [CSS Wizardry: CSS Guidelines](https://github.com/csswizardry/CSS-Guidelines)
