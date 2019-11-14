# Dufuna Coding Styleguide 📜
[TOC]
This Styleguide explains the guidelines to follow when writing code and submitting pull requests to this repository.

This guide particularly focuses on the formatting and indentation of code blocks. Good indentation makes your code readable and makes it easy to spot errors in the code.

## General
- File names should have no spaces in between. Multi-word file names should be separated with hyphen e.g `my-new-file.txt`, or camel case `myNewFile.txt`

## In this doc
1. [HTML](#html)
2. [CSS](#css)

## HTML 
- Use correct document type declaration: Always declare the document type as the first line in your document: For example your HTML document should start with `<!doctype html>` or `<!DOCTYPE html>`

- Use lowercase element names
HTML5 allows mixing uppercase and lowercase letters in element names, but lowercase tags look cleaner
    ### Bad
    ```html
    <SECTION>
        <p>This is a paragraph.</p>
    </SECTION>
    ```
    ```html
    <Section>
        <p>This is a paragraph.</p>
    </SECTION>
    ```

    ### Good
    ```html
    <section>
        <p>This is a paragraph.</p>
    </section>
    ```

- Code within tags should be well indented.
    ### Bad
    ```html
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    ```
    ### Good
    ```html
    <p> 
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
    </p>
    ```
- Tags on the same level should align properly.
    ### Bad
    ```html
    <ul> 
    <li>Lorem</li> 
    <li>Ipsum</li> 
        <li>Dolor</li> 
    </ul>
    ```

    ### Good
    ```html
    <ul> 
        <li>Lorem</li> 
        <li>Ipsum</li> 
        <li>Dolor</li> 
    </ul>
    ```

- This is an example of a well-indented table
    ```html
    <table> 
        <tr> 
            <td> 
                Lorem ipsum dolor sit amet 
            </td> 
            <td> 
                Consectetur adipisicing 
            </td> 
        </tr> 
        <tr> 
            <td> 
                Lorem ipsum dolor sit amet 
            </td> 
            <td> 
                Consectetur adipisicing 
            </td> 
        </tr> 
    </table>
    ```

- Your text editor should make it easy to indent your code. You could press tab or the space bar to indent your code. Fortunately, good text editors help you out when it comes to indenting.

- Use lowercase attribute names
    ### Bad
    ```html
    <div CLASS="menu">
    ```

    ### Good
    ```html
    <div class="menu">
    ```


## CSS
- Use lowercase file names
- Use simple syntax for linking to style sheets
    ```html
    <link rel="stylesheet" href="styles.css">
    ```
- Long rules should be written over multiple lines:
    ```css
    body {
        background-color: lightgrey;
        font-family: "Arial Black", Helvetica, sans-serif;
        font-size: 16em;
        color: black;
    }
    ```
- Place the opening bracket on the same line as the selector
- Use one space before the opening bracket for CSS style
- Use two spaces of indentation
- Use semicolon after each property-value pair, including the last
- Only use quotes around values if the value contains spaces
- Place the closing bracket on a new line, without leading spaces
- Avoid lines over 80 characters
- Avoid spaces in rule names

Adapted from [this blog](https://www.granneman.com/webdev/coding/formatting-and-indenting-your-html)
and [W3Schools](https://www.w3schools.com/HTML/html5_syntax.asp)
