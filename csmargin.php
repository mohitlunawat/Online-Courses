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
<h1>CSS Margins</h1>
<xmp class="si">
The CSS margin properties are used to generate space around elements.

The margin properties set the size of the white space outside the border.

With CSS, you have full control over the margins. There are CSS properties for setting the margin for each side of an element (top, right, bottom, and left).
</xmp>
<hr>
<h2>Margin - Individual Sides</h2>
<p class="si">CSS has properties for specifying the margin for each side of an element:</p>
<ul class="s">
<li>margin-top</li>
<li>margin-right</li>
<li>margin-bottom</li>
<li>margin-left</li>
</ul>
<xmp class="si">
All the margin properties can have the following values:
</xmp>
<ul class="si">

<li>auto - the browser calculates the margin</li>
<li>length - specifies a margin in px, pt, cm, etc.</li>
<li>% - specifies a margin in % of the width of the containing element</li>
<li>inherit - specifies that the margin should be inherited from the parent element</li>
</ul>
<p class="si">Tip: Negative values are allowed.</p>
<hr>

<xmp class="si">The following example sets different margins for all four sides of a <p> element:</xmp>
<h2>Example</h2>
<xmp class="s">
p {
    margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 150px;
    margin-left: 80px;
}
</xmp>
<hr>
<h2>Margin - Shorthand Property</h2>
<xmp class="si">
To shorten the code, it is possible to specify all the margin properties in one property.

The margin property is a shorthand property for the following individual margin properties:
</xmp>
<ul class="si">
<li>margin-top</li>
<li>margin-right</li>
<li>margin-bottom</li>
<li>margin-left</li>
</ul>
<h2>Example</h2>
<xmp class="s">
p {
    margin: 100px 150px 100px 80px;
}
</xmp>
<hr>
<h2>So, here is how it works:</h2>
<xmp class="s">
If the margin property has four values:

margin: 25px 50px 75px 100px;
top margin is 25px
right margin is 50px
bottom margin is 75px
left margin is 100px

If the margin property has three values:

margin: 25px 50px 75px;
top margin is 25px
right and left margins are 50px
bottom margin is 75px

If the margin property has two values:

margin: 25px 50px;
top and bottom margins are 25px
right and left margins are 50px

If the margin property has one value:

margin: 25px;
all four margins are 25px
</xmp>
<hr>
<h2>The auto Value</h1>
<xmp class="si">
You can set the margin property to auto to horizontally center the element within its container.

The element will then take up the specified width, and the remaining space will be split equally between the left and right margins:
</xmp>
<h2>Example</h2>
<xmp class="s">
div {
    width: 300px;
    margin: auto;
    border: 1px solid red;
}
</xmp>