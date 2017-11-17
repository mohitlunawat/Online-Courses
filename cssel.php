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
<h1>CSS Attribute Selectors</h1>
<hr>
<h2>Style HTML Elements With Specific Attributes</h2>
<xmp class="si">
It is possible to style HTML elements that have specific attributes or attribute values.
</xmp>
<hr>
<h2>CSS [attribute] Selector</h2>
<xmp class="si">
The [attribute] selector is used to select elements with a specified attribute.

The following example selects all <a> elements with a target attribute:
</xmp>
<h2>Example</h2>
<xmp class="s">
a[target] {
    background-color: yellow;
}
</xmp>
<hr>
<h2>CSS [attribute="value"] Selector</h2>
<xmp class="si">
The [attribute="value"] selector is used to select elements with a specified attribute and value.

The following example selects all <a> elements with a target="_blank" attribute:
</xmp>
<h2>Example</h2>
<xmp class="s">
a[target="_blank"] { 
    background-color: yellow;
}
</xmp>
<hr>
<xmp class="si">
CSS [attribute~="value"] Selector
The [attribute~="value"] selector is used to select elements with an attribute value containing a specified word.

The following example selects all elements with a title attribute that contains a space-separated list of words, one of which is "flower":
</xmp>
<h2>Example</h2>
<xmp class="s">
[title~="flower"] {
    border: 5px solid yellow;
}
</xmp>
<hr>
<xmp class="si">
The example above will match elements with title="flower", title="summer flower", and title="flower new", but not title="my-flower" or title="flowers".

CSS [attribute|="value"] Selector
The [attribute|="value"] selector is used to select elements with the specified attribute starting with the specified value.

The following example selects all elements with a class attribute value that begins with "top":

Note: The value has to be a whole word, either alone, like class="top", or followed by a hyphen( - ), like class="top-text"! 
</xmp>
<h2>Example</h2>
<xmp class="s">
[class|="top"] {
    background: yellow;
}
</xmp>
<xmp class="si">
CSS [attribute^="value"] Selector
The [attribute^="value"] selector is used to select elements whose attribute value begins with a specified value.

The following example selects all elements with a class attribute value that begins with "top":

Note: The value does not have to be a whole word! 
</xmp>
<h2>Example</h2>
<xmp class="s">
[class^="top"] {
    background: yellow;
}
</xmp>
