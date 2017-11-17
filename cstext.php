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
<h1>CSS Text</h1>
<hr>
<h2>TEXT FORMATTING</h2>
<xmp class="si">
This text is styled with some of the text formatting properties. The heading uses the text-align, text-transform, and color properties. The paragraph is indented, aligned, and the space between characters is specified. The underline is removed from this colored "Try it Yourself" link.

Text Color
The color property is used to set the color of the text.

With CSS, a color is most often specified by:

a color name - like "red"
a HEX value - like "#ff0000"
an RGB value - like "rgb(255,0,0)"
Look at CSS Color Values for a complete list of possible color values.

The default text color for a page is defined in the body selector.
</xmp>
<h2>Example</h2>
<xmp class="s">
body {
    color: blue;
}

h1 {
    color: green;
}

Note: For W3C compliant CSS: If you define the color property, you must also define the background-color.
</xmp>
<hr>
<h2>Text Alignment</h2>
<xmp class="si">
The text-align property is used to set the horizontal alignment of a text.

A text can be left or right aligned, centered, or justified.

The following example shows center aligned, and left and right aligned text (left alignment is default if text direction is left-to-right, and right alignment is default if text direction is right-to-left):
</xmp>
<h2>Example</h2>
<xmp class="s">
h1 {
    text-align: center;
}

h2 {
    text-align: left;
}

h3 {
    text-align: right;
}
</xmp>
<hr>
<xmp class="s">
When the text-align property is set to "justify", each line is stretched so that every line has equal width, and the left and right margins are straight (like in magazines and newspapers):
</xmp>
<h2>Example</h2>
<xmp class="s">
div {
    text-align: justify;
}
</xmp>
<hr>
<h2>Text Decoration</h2>
<xmp class="si">
The text-decoration property is used to set or remove decorations from text.

The value text-decoration: none; is often used to remove underlines from links:
</xmp>
<h2>Example</h2>
<xmp class="s">
a {
    text-decoration: none;
}
</xmp>
<hr>
<xmp class="si">
The other text-decoration values are used to decorate text:
</xmp>
<h2>Example</h2>
<xmp class="s">
h1 {
    text-decoration: overline;
}

h2 {
    text-decoration: line-through;
}

h3 {
    text-decoration: underline;
}
Note: It is not recommended to underline text that is not a link, as this often confuses the reader.
</xmp>
<hr>
<h2>Text Transformation</h2>
<xmp class="si">
The text-transform property is used to specify uppercase and lowercase letters in a text.

It can be used to turn everything into uppercase or lowercase letters, or capitalize the first letter of each word:
</xmp>
<h2>Example</h2>
<xmp class="s">
p.uppercase {
    text-transform: uppercase;
}

p.lowercase {
    text-transform: lowercase;
}

p.capitalize {
    text-transform: capitalize;
}
</xmp>