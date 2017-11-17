<head>
  <style>
  .si
    {
        font-size: 25px;
    }
  .s
    {
        font-size: 25px;
        color:red;
    }
    
    </style>
</head>
<?php include 'lhtml.php' ?>
<div class="container" style="overflow:scroll; height:700px; width:1400px;padding-left:90px;">

<h1>CSS Syntax and Selectors</h1>
<hr>
<h2>CSS Syntax</h2>
<p class="si">A CSS rule-set consists of a selector and a declaration block:</p>
<h2>EXAMPLE</h2>
<xmp class="s">
p {
    color: red;
    text-align: center;
}
</xmp>
<hr>
<h2>CSS selector</h2>
<xmp class="si">
The selector points to the HTML element you want to style.

The declaration block contains one or more declarations separated by semicolons.

Each declaration includes a CSS property name and a value, separated by a colon.

A CSS declaration always ends with a semicolon, and declaration blocks are surrounded by curly braces.

In the following example all <p> elements will be center-aligned, with a red text color:
</xmp>
<h2>Example</h2>
<hr>
<xmp class="s">
p {
    color: red;
    text-align: center;
}
<hr>
<h2>CSS Selectors</h2>
<p class-"si">CSS selectors are used to "find" (or select) HTML elements based on their element name, id, class, attribute, and more.</p>
<hr>
<h2>The element Selector</h2>
<xmp class="si">
The element selector selects elements based on the element name.

You can select all <p> elements on a page like this (in this case, all <p> elements will be center-aligned, with a red text color):
</xmp>
<h2>Example</h2>
<xmp class="s">
p {
    text-align: center;
    color: red;
}
</xmp>
<hr>
<h2>The id Selector</h2>
<xmp class="si">
The id selector uses the id attribute of an HTML element to select a specific element.

The id of an element should be unique within a page, so the id selector is used to select one unique element!

To select an element with a specific id, write a hash (#) character, followed by the id of the element.

The style rule below will be applied to the HTML element with id="para1":
</xmp>
<h2>Example</h2>
<xmp class="s">
#para1 {
    text-align: center;
    color: red;
}

Note: An id name cannot start with a number!
</xmp>
<hr>
<h2>The class Selector</h2>
<xmp class="si">
The class selector selects elements with a specific class attribute.

To select elements with a specific class, write a period (.) character, followed by the name of the class.

In the example below, all HTML elements with class="center" will be red and center-aligned:
</xmp>
<hr>
<h2>Example</h2>
<xmp class="s">
.center {
    text-align: center;
    color: red;
}

You can also specify that only specific HTML elements should be affected by a class.
</xmp>
<p class="si">In the example below, only <p> elements with class="center" will be center-aligned:</p>

<h2>Example</h2>
<xmp class="s">
p.center {
    text-align: center;
    color: red;
}
</xmp>
<hr>
<xmp class="si">
HTML elements can also refer to more than one class.

In the example below, the <p> element will be styled according to class="center" and to class="large":
</xmp>

<h2>Example</h2>
<xmp class="s">
<p class="center large">This paragraph refers to two classes.</p>
Note: A class name cannot start with a number!
</xmp>
<hr>

<h2>Grouping Selectors</h2>
<xmp class="si">
If you have elements with the same style definitions, like this:

h1 {
    text-align: center;
    color: red;
}

h2 {
    text-align: center;
    color: red;
}

p {
    text-align: center;
    color: red;
}
It will be better to group the selectors, to minimize the code.

To group selectors, separate each selector with a comma.
</xmp>