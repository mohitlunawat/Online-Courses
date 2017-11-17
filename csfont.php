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
<h1>CSS Fonts</h1>
<hr>
<xmp class="si">
The CSS font properties define the font family, boldness, size, and the style of a text.
</xmp>
<h2>CSS Font Families</h2>
<p class="si">In CSS, there are two types of font family names:</p>
<ul class="si">

<li>generic family - a group of font families with a similar look (like "Serif" or "Monospace")</li>
<li>font family - a specific font family (like "Times New Roman" or "Arial")</li>
</ul>
<hr>
<xmp class="s">
Generic family		Font family		Description
Serif			Times New RomanGeorgia	Serif fonts have small lines at the ends on some characters
Sans-serif		ArialVerdana		"Sans" means without - these fonts do not have the lines at the ends of characters
Monospace	Courier NewLucida Console	All monospace characters have the same width
Note: On computer screens, sans-serif fonts are considered easier to read than serif fonts.
</xmp>
<hr>
<h2>Font Family</h2>
<xmp class="si">
The font family of a text is set with the font-family property.

The font-family property should hold several font names as a "fallback" system. If the browser does not support the first font, it tries the next font, and so on.

Start with the font you want, and end with a generic family, to let the browser pick a similar font in the generic family, if no other fonts are available.

Note: If the name of a font family is more than one word, it must be in quotation marks, like: "Times New Roman".

More than one font family is specified in a comma-separated list:
</xmp>
<h2>Example</h2>
<xmp class="s">
p {
    font-family: "Times New Roman", Times, serif;
}

For commonly used font combinations, look at our Web Safe Font Combinations.
</xmp>
<hr>
<h2>Font Style</h2>
<xmp class="si">
The font-style property is mostly used to specify italic text.

This property has three values:
</xmp>
<ul class="si">
<li>normal - The text is shown normally</li>
<li>italic - The text is shown in italics</li>
<li>oblique - The text is "leaning" (oblique is very similar to italic, but less supported)</li>
</ul>
<h2>Example</h2>
<xmp class="s">
p.normal {
    font-style: normal;
}

p.italic {
    font-style: italic;
}

p.oblique {
    font-style: oblique;
}
</xmp>
<hr>
<h2>Font Size</h2>
<xmp class="si">
The font-size property sets the size of the text.

Being able to manage the text size is important in web design. However, you should not use font size adjustments to make paragraphs look like headings, or headings look like paragraphs.

Always use the proper HTML tags, like <h1> - <h6> for headings and <p> for paragraphs.

The font-size value can be an absolute, or relative size.

Absolute size:

Sets the text to a specified size
Does not allow a user to change the text size in all browsers (bad for accessibility reasons)
Absolute size is useful when the physical size of the output is known
Relative size:

Sets the size relative to surrounding elements
Allows a user to change the text size in browsers
Note: If you do not specify a font size, the default size for normal text, like paragraphs, is 16px (16px=1em).

Set Font Size With Pixels
Setting the text size with pixels gives you full control over the text size:
</xmp>
<h2>Example</h2>
<xmp class="s">
h1 {
    font-size: 40px;
}

h2 {
    font-size: 30px;
}

p {
    font-size: 14px;
}
</xmp>