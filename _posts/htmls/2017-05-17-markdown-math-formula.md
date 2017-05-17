---
layout: post
title: Insert Math formula in github markdown files
category: htmls
comments: true
excerpt_separator: <!--more-->
---
### Method 1: External link
Use online latex generator to generate an image which can be inserted into markdown files.
Here is the link:
<a href="https://www.codecogs.com/latex/eqneditor.php" >https://www.codecogs.com/latex/eqneditor.php </a>

#### example
choose svg format.
``` html
<img src="https://latex.codecogs.com/svg.latex?a^2&plus;b^2=3" title="a^2+b^2=3" />
```
Which generates:

<img src="https://latex.codecogs.com/svg.latex?a^2&plus;b^2=3" title="a^2+b^2=3" />

However, it is way too complicated.

### Method 2:  JekyII in combination with MathJax
Add one line of script to the layout html file.
```html
<script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-MML-AM_CHTML'></script>
```
And now you are ready to type in formulas in your post.
```
$$ a^2+b^2=3 $$
```
Github will render the formula correctly for you.

**Note:** Maxjax syntax is not the same as Latex. Maxjax uses **$$** instead of **$** for equations.  

[Maxjax official documentation](https://www.mathjax.org/#features)
