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
<h1>CSS Backgrounds</h1>
<xmp class="si">
The CSS background properties are used to define the background effects for elements.

CSS background properties:
</xmp>
<ul class="si">
<li>background-color</li>
<li>background-image</li>
<li>background-repeat</li>
<li>background-attachment</li>
<li>background-position</li>
<li>Background Color</li>
</ul>
<xmp class="si">
The background-color property specifies the background color of an element.

The background color of a page is set like this:
</xmp>
<h2>Example</h2>
<xmp class="s">
body {
    background-color: lightblue;
}
</xmp>
<hr>
<p class="si">With CSS, a color is most often specified by:</p>
<ul class="si">
<li>a valid color name - like "red"</li>
<li>a HEX value - like "#ff0000"</li>
<li>an RGB value - like "rgb(255,0,0)"</li>
</ul>
<xmp class="si">
Look at CSS Color Values for a complete list of possible color values.

In the example below, the <h1>, <p>, and <div> elements have different background colors:
</xmp>
<h2>Example</h2>
<xmp class="s">
h1 {
    background-color: green;
}

div {
    background-color: lightblue;
}

p {
    background-color: yellow;
}
</xmp>
<hr>
<h2>Background Image<h2>
<xmp class="si">
The background-image property specifies an image to use as the background of an element.

By default, the image is repeated so it covers the entire element.

The background image for a page can be set like this:
</xmp>
<h2>Example</h2>
<xmp class="s">
body {
    background-image: url("paper.gif");
}
</xmp>
<hr>
<p class="si">Below is an example of a bad combination of text and background image. The text is hardly readable:</p>

<h2>Example</h2>
<xmp class="s">
body {
    background-image: url("bgdesert.jpg");
}
Note: When using a background image, use an image that does not disturb the text.
</xmp>
<hr>
<p class="si">Background Image - Repeat Horizontally or Vertically</p>
<xmp class="si">
By default, the background-image property repeats an image both horizontally and vertically.

Some images should be repeated only horizontally or vertically, or they will look strange, like this:
</xmp>
<h2>Example</h2>
<xmp class="s">
body {
    background-image: url("gradient_bg.png");
}
</xmp>
<hr>
<xmp class="si">
If the image above is repeated only horizontally (background-repeat: repeat-x;), the background will look better:
</xmp>
<hr>
<h2>Example</h2>
<xmp class="s">
body {
    background-image: url("gradient_bg.png");
    background-repeat: repeat-x;
}

Tip: To repeat an image vertically, set background-repeat: repeat-y;
</xmp>