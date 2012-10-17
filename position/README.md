# Position

Position allows us to move elements around on the screen and bypass the browsers flow.

*If possible use the browsers flow before trying to manipulate elements with position.*

Position has a few values:

- `static` (what all elements are by default)
- `relative`
- `absolute`
- `fixed`

## Position: RELATIVE

Allows the box to be moved from the flow while still maintaining the original space.

Relative creates a new positioning context that absolutely positioned children can move against.

## Position: ABSOLUTE

Completely removes the box from the flow; all other boxes fill the space.

Movement is against the parent context, which by default is the `<body>`.

When something is positioned, it becomes a new positioning context.

## Position: FIXED

Completely removes the box from the flow; all other boxes fill the space.

Positions against the window and does not move when the user scrolls.

---

## Videos

-
