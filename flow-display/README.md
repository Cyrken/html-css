# Flow & display

Browsers use a flow to display elements on the page—understanding flow and display are critical to laying out websites.

### [☛ Videos for flow & display](https://www.youtube.com/playlist?list=PLWjCJDeWfDdc6YKkkrEdYuExcnY05rmwG)

---

When a browser renders your website it reads the HTML from the top to the bottom.
The browser tries to place each box beside the previous box, unless something prevents it.
Very similar to how words wrap in text editors like MS Word.

Elements may bump to the next line when:

- there's not enough space,
- CSS causes it,
- or a `<br>` tag.

## Inline

`<span>` elements by default are `inline` level

Inline level:

- Allows other elements to fit beside on the same line
- Takes up only as much width as needed
- `width`, `margin`, `padding` don't really work

## Block

`<div>` elements are specified as `block` in the browser's default CSS

Block level:

- Goes onto it's own line; anything that comes after goes onto the next line
- Takes up the whole width of its parent element
- `width`, `margin`, `padding` work as expected

## Inline-block

`display: inline-block` is a hybrid of `inline` and `block`

Inline-block:

- Fits beside other elements on the same line
- Takes up only as much space as needed
- `width`, `margin`, `padding` work as expected

---

## Videos

1. [Flow & display: introduction](http://www.youtube.com/watch?v=FwQo2P7L9bw&list=PLWjCJDeWfDdc6YKkkrEdYuExcnY05rmwG&index=1)
2. [Flow & display: details list](http://www.youtube.com/watch?v=-HeiRd22Tcg&list=PLWjCJDeWfDdc6YKkkrEdYuExcnY05rmwG&index=2)
3. [Flow & display: horizontal navigation](http://www.youtube.com/watch?v=sxO32mTbfUo&list=PLWjCJDeWfDdc6YKkkrEdYuExcnY05rmwG&index=3)

---

## Links

- [Gecko reflow visualization](http://www.youtube.com/watch?v=ZTnIxIA5KGw)
