# PHP contact form

Making a contact form in PHP is fairly straight forward.
The most important thing to do is make sure we’re getting the correct information from our users—we can never trust our users.

## How the form works

1. The user views the contact page
2. Our code determines they haven’t submitted the form and doesn’t display errors
3. User fills out the form
4. Our code checks to make sure the data is correct
5. If the data is incorrect, error messages are displayed
6. If the data is good, a thank you message is displayed

## Validating the data

Because we can’t trust our users’ data, we need to validate it: to confirm it’s in a format we expect.

1. Make sure there is something in the name field and use filters to strip nasty stuff
2. Make sure the e-mail address is properly formated; easily done using PHP Filters
3. Make sure the message is at least 25 characters and use filters to strip ugly things

## Files

- `contact.php`—the HTML and content for the contact form; has a little logic to hide/show the thanks screen and the error messages
- `includes/contact-controller.php`—holds the majority of the PHP logic for validating the user input and sending the e-mail message
