# Accessibility

Making websites work better for every human being.

### [☛ Videos for accessibility](https://www.youtube.com/playlist?list=PLWjCJDeWfDdcEtSnqq_iGLKGA_H_3o3y7)

---

## Impairments

There are lots of different impairments that can affect human beings—but the great thing about the web and computers is that they’re empowering to everybody. *It’s our job as designers to help people accomplish what they want.*

**One important thing to remember is that these impairments can be temporary—as an example: a broken arm.**

### Visual

Visual impairments are issues that affect eyes, e.g. blindness, partial or full; colour blindness; cataracts; glaucoma; age; etc. 

**Things we can do**

- Allow text to be resized
- Have good contrast in colours
- Test for colour blindness related issues
- Make sure the website works well with screen readers
- Use proper alt attributes

### Mobility and dexterity

Mobility and dexterity impairments primarily affect people’s arms and hands, e.g. missing a hand, limited movement, difficulty with fine control, trouble holding a mouse, termors or shakes, etc.

**Things we can do**

- Recognize and prepare for the fact that not everybody will use a mouse
- Make the website keyboard accessible
- Increase hit areas of links and buttons

### Auditory

Impairments that affect a person’s ability to hear, e.g. deafness, partial deafness, etc.

**Things we can do**

- Provide text captions and subtitles

### Cognitive

Generally considered something that affects a person’s brain, e.g. dyslexia, memory issues, problem solving issues, attention deficits, hyperactivity, reading abilities, etc.

**Things we can do**

- Make it clear where in the website the user is
- Organize your content correctly & use proper headings
- Make the text easily scannable
- Clearly mark links
- Use lots of images and graphics

---

## WAI-ARIA roles

Adding ARIA roles to your website is a great way to provide navigational landmarks for people using accessibility tools like screen readers.

With roles people using screen readers can jump directly to specific locations on the website.

### Landmark roles

The major landmark roles for websites are:

- `banner` — for defining an element as the masthead, added to the primary `<header>`
- `navigation` — for defining an element as the primary navigation, added the the top `<nav>`
- `search` — for defining an element as being the search field, usually added to a `<form>`
- `main` — for defining an element as being the main content of the page, same as the `<main>` element, and added to the `<main>`
- `complementary` — for defining an element as being content related to the primary content, usually added to an `<aside>`
- `contentinfo` — for defining an element as information about the content: e.g. copyright, terms, privacy policy

Here’s an example of adding the landmark role to the masthead:

```html
<header role="banner">
	<strong>Accessible Website</strong>
</header>
```

**Videos**

- [Accessibility: ARIA roles](https://www.youtube.com/watch?v=o4xHfi4t9S0&list=PLWjCJDeWfDdcEtSnqq_iGLKGA_H_3o3y7&index=1)

**Links**

- [Using WAI-ARIA Landmarks](http://www.paciellogroup.com/blog/2013/02/using-wai-aria-landmarks-2013/)

## Focus styles

It’s important to not remove the keyboard focus rectangle from links, but it can be styled for better contrast or to match your website.

```css
a:focus {
	outline: 3px solid #000;
}
```

*But don’t ever write `outline: none;` on the `:focus` state—it’s an extremely important feature for keyboard users.*

**Videos**

- [Accessibility: focus styles](https://www.youtube.com/watch?v=js9yaVtV04E&list=PLWjCJDeWfDdcEtSnqq_iGLKGA_H_3o3y7&index=2)

## Skip links

It’s a good idea to add skip links to a website for jumping over the navigation to the main content. Or adding a skip link to jump from the bottom to the top of the website.

Skip links are just standard internal links that jump down to a specific point of a page.

```html
<a href="#main">Jump to main content</a>

⋮

<main role="main" id="main">
```

Most often designers like to hide them but they must be hidden in an accessible manner. Hidden by default but when focused, shown again.

```css
.skip-links a {
	position: absolute;
	top: -3em;
}

.skip-links a:focus {
	top: 0;
}
```

**Videos**

- [Accessibility: skip links](https://www.youtube.com/watch?v=UnEItq289lU&list=PLWjCJDeWfDdcEtSnqq_iGLKGA_H_3o3y7&index=3)

## Tools

There are a few things that you should check on every website—at least—to help with accessibility.

*The tools are still no replacement for proper user and accessibility testing.*

1. Bump the font-size up and down to make sure the layout doesn’t break: at least 2 sizes up and 2 sizes down
2. Hide images and see what happens to the layout without them
3. Disable the CSS to get an idea of what content is available to screen readers
4. Check the website with [Color Oracle](http://colororacle.org/) to look for colour blindness related issues
5. Run your website through one or all of the validators
6. Check all the pages with a screen reader like [Voice Over](#voiceover)

**Videos**

- [Accessibility: tools to help find issues](https://www.youtube.com/watch?v=xpqPctbDhnc&list=PLWjCJDeWfDdcEtSnqq_iGLKGA_H_3o3y7&index=4)
- [Accessibility: validators](https://www.youtube.com/watch?v=FOVKDAt8-oI&list=PLWjCJDeWfDdcEtSnqq_iGLKGA_H_3o3y7&index=5)

**Tools**

- [Web Developer Toolbar](http://chrispederick.com/work/web-developer/)
- [Color Oracle](http://colororacle.org/)

**Validators**

- [Total Validator](http://www.totalvalidator.com/index.html)
- [Wave by WebAim](http://wave.webaim.org/)
- [Chrome Accessibility Developer Tools](https://chrome.google.com/webstore/detail/accessibility-developer-t/fpkknkljclfencbdbgkenhalefipecmb)

## Screen readers

Screen readers are accessibility tools to help users with poor vision or complete blindness get the content of a website read out to them. 

### Voice Over

Here’s some shortcut keys for using Apple’s Voice Over:

- `Command + F5` — Turn VoiceOver on/off
- `Control` — Pause VoiceOver
- `Control + Option + Right Arrow` — Move to next item
- `Control + Option + Left Arrow` — Move to previous item
- `Control + Option + U` — Open the rotor
- `Control + Option + Command + H` — Next heading (+ `Shift` for previous)
- `Control + Option + Command + L` — Next link
- `Control + Option + Command + G` — Next graphic
- `Control + Option + Command + X` — Next list

**Videos**

- [Accessibility: Voice Over](https://www.youtube.com/watch?v=G-EsQ_VHtVM&list=PLWjCJDeWfDdcEtSnqq_iGLKGA_H_3o3y7&index=6)

**Voice Over links**

- <http://accessibility.psu.edu/voiceover>
- <http://webaim.org/articles/voiceover/>
- <http://www.apple.com/accessibility/resources/>
- <http://axslab.com/articles/ios-voiceover-gestures-and-keyboard-commands.php>

---

## Videos

1. [Accessibility: ARIA roles](https://www.youtube.com/watch?v=o4xHfi4t9S0&list=PLWjCJDeWfDdcEtSnqq_iGLKGA_H_3o3y7&index=1)
2. [Accessibility: focus styles](https://www.youtube.com/watch?v=js9yaVtV04E&list=PLWjCJDeWfDdcEtSnqq_iGLKGA_H_3o3y7&index=2)
3. [Accessibility: skip links](https://www.youtube.com/watch?v=UnEItq289lU&list=PLWjCJDeWfDdcEtSnqq_iGLKGA_H_3o3y7&index=3)
4. [Accessibility: tools to help find issues](https://www.youtube.com/watch?v=xpqPctbDhnc&list=PLWjCJDeWfDdcEtSnqq_iGLKGA_H_3o3y7&index=4)
5. [Accessibility: validators](https://www.youtube.com/watch?v=FOVKDAt8-oI&list=PLWjCJDeWfDdcEtSnqq_iGLKGA_H_3o3y7&index=5)
6. [Accessibility: Voice Over](https://www.youtube.com/watch?v=G-EsQ_VHtVM&list=PLWjCJDeWfDdcEtSnqq_iGLKGA_H_3o3y7&index=6)

---

## Links and resources

#### [☛ More links and resources](links-and-resources.md)
