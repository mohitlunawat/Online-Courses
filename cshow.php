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
<h1>CSS How To...</h1>
<hr>
<xmp class="si">
When a browser reads a style sheet, it will format the HTML document according to the information in the style sheet.
</xmp>
<h1>Three Ways to Insert CSS</h1>
<p class="si">There are three ways of inserting a style sheet:</p>
<ul class="si">
<li>External style sheet</li>
<li>Internal style sheet</li>
<li>Inline style</li>
</ul>

<h2>External Style Sheet</h2>
<xmp class="si">
With an external style sheet, you can change the look of an entire website by changing just one file!

Each page must include a reference to the external style sheet file inside the <link> element. The <link> element goes inside the <head> section:
</xmp>
<h2>Example</h2>
<xmp class="s">
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
</xmp>
<hr>
<xmp class="si">
An external style sheet can be written in any text editor. The file should not contain any html tags. The style sheet file must be saved with a .css extension.

Here is how the "mystyle.css" looks:
</xmp>
<xmp class="s">
body {
    background-color: lightblue;
}

h1 {
    color: navy;
    margin-left: 20px;
}
</xmp>
<hr>
<p class="si">Note: Do not add a space between the property value and the unit (such as margin-left: 20 px;). The correct way is: margin-left: 20px;</p>

<h2>Internal Style Sheet</h2>
<xmp class="si">
An internal style sheet may be used if one single page has a unique style.

Internal styles are defined within the <style> </style>element, inside the <head> section of an HTML page:
</xmp>
<h1>Example</h2>
<xmp class="s">
<head>
<style>
body {
    background-color: linen;
}

h1 {
    color: maroon;
    margin-left: 40px;
} 
</style>
</head>
</xmp>
<hr>
<h2>Inline Styles</h2>
<xmp class="si">
An inline style may be used to apply a unique style for a single element.

To use inline styles, add the style attribute to the relevant element. The style attribute can contain any CSS property.

The example below shows how to change the color and the left margin of a <h1> element:
</xmp>

<h2>Example</h2>
<xmp class="s">
<h1 style="color:blue;margin-left:30px;">This is a heading</h1>
Try it Yourself »
Tip: An inline style loses many of the advantages of a style sheet (by mixing content with presentation). Use this method sparingly.
</xmp>
<hr>
<h2>Multiple Style Sheets</h2>
<p class="si">If some properties have been defined for the same selector (element) in different style sheets, the value from the last read style sheet will be used. </p>

<h2>Example</h2>
<xmp class="s">
Assume that an external style sheet has the following style for the <h1> element:

h1 {
    color: navy;
}
then, assume that an internal style sheet also has the following style for the <h1> element:

h1 {
    color: orange;    
}
</xmp>
<xmp class="si">If the internal style is defined after the link to the external style sheet, the <h1>elements will be "orange":</xmp>