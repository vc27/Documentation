CSS Templating
====================

### Resources
- SASS using scss syntax: http://sass-lang.com/guide
- Gradients builder: http://www.css3factory.com/linear-gradients/
- Triangles: http://css-tricks.com/snippets/css/css-triangle/

### Retina images
Using retina images is a case by case issue. At it's core you will be loading all images @2x size then using css to resize them down to their proper size. There are a few methods for resizing images from img { width:100px; height:100px; } to using a wrapping div around an img { max-width:100%; height:auto; }

### Vector Icons 
If the design includes a vector icon try to use a vector icon. You can create a vector font by using "IcoMoon". In order to make sure that all the icons are exactly the same size you must resize them accordingly.

Foreach icon determine the longest-side. 500x400 the longest-side would be 500px. Resize all icons to have the same longest-side while maintaining their aspect ratio. The concept is that all icons will be able to fit within the same hypothetical box that is the individual font icon.

- choose a max-size: I use 590px
- resize all images to have a longest-side of the max-size.

##### Example
- width:30px height:7px = width:590px height:138px
- width:46px height:59px = width:590px height:757px

##### link resource
- https://chrome.google.com/webstore/detail/icomoon/kppingdhhalimbaehfmhldppemnmlcjd?hl=en