# Control structures

We always need to control the flow of our code. Some of the ways Javascipt allows us to control program flow is with standard if statements and loops.

---

## If statements

If statements add logic-based control to our code; they allow us to perform one action or another action.

<!--#include "control/if.js" -->

- {important}The double equals (==) means compare. It’s best to not use a single equals in an if statement. [Read more about equals](#equals).
- If statements are always looking for a truthy scenario. The if statement is looking to see if the comparison between the opening and closing parenthesis is true. If the comparison is truthy the if statement is executed.

<!--#include "control/if-more.js" -->

### And/or

Often it’s helpful to compare multiple situations at once in our if statements. To do this we use ‘or’ and ‘and’ clauses.

<!--#include "control/if-and-or.js" -->

### Not equal

We can also compare to see if two things are not equal.

<!--#include "control/if-not-equal.js" -->

### Single equals vs. double equals vs. triple equals[equals]

Equals can be used in a series of up to three in Javascript, each meaning slightly different things and acting differently.

1. single equals means ‘set’
	<!--#include "control/equals-single.js" -->
2. double equals means ‘compare’
	<!--#include "control/equals-double.js" -->
3. triple equals means ‘compare exactly’
	<!--#include "control/equals-triple.js" -->

### Type coercion

Type coercion occurs inside the if statement when trying to get a truthy value. Since Javascript is a dynamically interpreted language certain, values become are coerced to boolean, becoming true or false.

<!--#include "control/type-coercion.html" raw -->

- {important}If it’s not in the list, chances are it will be coerced to true.

<!--#include "control/type-coercion.js" -->

---

## Switch

Javascript has another control structure that has a similar purpose to the if statement.

<!--#include "control/switch.js" -->

The switch statement also has an ‘else’ like mechanism: `default`.

<!--#include "control/switch-default.js" -->

---

## Loops

Programming languages provide mechanisms for repeating a section of code: loops. There are a bunch of different loop types in Javascript—the for loop is the most popular.

### For loop

For loops are fast and great if we know exactly how many items we have to loop through.

<!--#include "control/for.js" -->

A very common use for loops is running through all the items in a collection like an array.

<!--#include "control/for-array.js" -->

Using the `.length` property inside the second expression—every time through the loop—isn’t efficient. It is much better to count the array once before we start the loop.

<!--#include "control/for-total.js" -->

### While loop

While loops are for when you don’t know exactly how many times you have to loop. They have a syntax similar to if statements where you use logic to determine if the loop should continue.

<!--#include "control/while.js" -->

---

## Resources & tutorials

- [**Dev.Mozilla: Language reference**](https://developer.mozilla.org/en/JavaScript)
- [Dev.Mozilla: For](https://developer.mozilla.org/en/JavaScript/Reference/Statements/for)
- [Dev.Mozilla: If](https://developer.mozilla.org/en/JavaScript/Reference/Statements/if...else)
- [WikiBooks: Javascript](http://en.wikibooks.org/wiki/JavaScript/Control_Structures)
- [Eloquent Javascript: Chapter 2](http://www.amazon.ca/dp/1593272820/)
- [ThinkVitamin: Javascript](http://membership.thinkvitamin.com/library/javascript)
- [Javascript: The Good Parts: Chapters 2](http://www.amazon.ca/dp/0596517742/)