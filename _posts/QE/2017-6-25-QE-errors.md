---
layout: post
title: QE errors
excerpt_separator: <!--more-->
category: QE
comments: true
---
### Error in routine scale_h (1):
<strong> Not enough space allocated for radial FFT: try restarting with a larger cell_factor. </strong>

Often encounter this error in vc-relaxation. The reason could be the starting cell is too small.

<strong>Solution:</strong> <br>
```
&CELL
cell_factor = 3 ! the default value is 2 for variable cell calculations, 1 for otherwise.
```
