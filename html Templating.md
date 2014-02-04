HTML Templating
====================

Notes:
--------------------
The following code is intended to be use as a guid for any html that fit with in the following patters. There are numerous times when html will not fit with in these confines.

html
--------------------

### Standard Block
The following code block allows for re-usable "class" targeting as well as id overwrites. 

**#{section-name}**  
Section name is what you would think, it refers to the "section" of the specific web page. It's goal is to allow for id targeting and overwrites. If the section is large enough to be included by a php require or include the section-name should mimic the required file name.

**.outer-wrap**  
The purpose of .outer-wrap is to allow for a global class incase of a need to target all top level div's.

**.{section-class}**  
_usage: optional_  
Section class is an optional class that will probably not get used very often due to the fact that sections typically large blocks of html that are note repeated in a way that a section class is needed.

It is included in this outline in order to provide an optional class to span large portions of html. A few example of section-class would be: section-videos, section-galleries, section-tour-dates

**.inner-wrap**  
The purpose of .inner-wrap is to allow for a section wrapper that utilize max-width or specific width to be given to a #section-name with out confining the #section-name to a width. Now #section-width can extend to 100% of the page while it's .inner-wrap can be "max-width:960px;".

**.row-fluid**  
_usage: bootstrap-responsive, optional, recommended for columns_  
row-fluid is a class from the bootstrap fluid responsive css file. It's purpose is to allow for rows of block content with columns that will flow within different size browser windows.

**#{block-name}**  
_usage: optional_  
The purpose of block name is to allow for id targeting of select blocks of code that reside with in a section. Some blocks may be re-used on various pages. If a block is added via require or include than the block name should use the same name as the file.

**.span{number}**  
_usage: bootstrap-responsive, optional, recommended for columns_  
span{number} is a class from the bootstrap fluid responsive css file. It's purpose is to allow for columns to be added in a way that can be fluid within various browser widths.

**.{block-class}**  
_usage: optional, recommended_  
The purpose of block class is to allow for reusable block styling. A few examples of block-class would be: layout-featured-content, layout-featured-video, layout-grid, layout-gallery

**.inside-wrapper**  
_usage: optional, recommended_  
The purpose of .inner-wrap is to allow for a block wrapper that utilizes padding on a block that has a set width.

**section-name.php**
```
<div id="{section-name}" class="outer-wrap {section-class}">
	<div class="inner-wrap">
		<div class="row-fluid">
			<div id="{block-name}" class="span8 {block-class}">
				<div class="inside-wrapper">
					<p>Some html here</p>
				</div>
			</div>
			<div id="block-name2" class="span4 block-class">
				<div class="inside-wrapper">
					<p>Some more html here</p>
				</div>
			</div>
		</div>
	</div>
</div>
```

### Loop
Loops follow the same basic concept as a standard block.

**.loop**  
This is a globalized class that allows for the obvious usage through out all "loops" with in a project.

**.loop-{type}**  
_usage: optional, recommended_  
This class allows for specific loop types to overwrite "loop". It also allows for targeting div's with out using id's. A few example of loop-{type} would be: loop-posts, loop-pages, loop-events, loop-video

**.hentry**  
hentry refers to an individual item with in a loop. "item" would be a better term, but hentry has been used more often so it will remain in place.

**.hentry-{type}**  
_usage: optional, recommended_  
The purpose of hentry type to allow for various item types to exist with in a single loop and retain various styles.

**h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6, .h7, .etc**  
_usage: optional, recommended_  
The purpose of an h1 class, and the other h classes, is to allow for the use of h styles with out using the h tags. 

**.entry**  
The purpose of the entry class is to wrap the general html content.

**.meta-data**  
The purpose of the meta-data class is to wrap append data to a block. Many times there is meta-data before and after the entry, this class allows you to maintain the styles for both.

**.meta-data-{type}**  
_usage: optional, recommended_  
The purpose of the meta-data-type is to target specific type of meta-data that may be re-used in various locations, but require small tweaks from the parent meta-data class.

**.meta-item-{type}**  
_usage: optional, recommended_  
The purpose of the meta-item-type is to target specific items for styles.

```
<div id="{block-name}" class="loop loop-{type}">
	<div class="inside-wrapper">
		<div class="hentry hentry-{type}">
			<div class="h1">Title</div>
			<div class="entry">Text here</div>
			<div class="meta-data meta-data-{type}">
				<div class="meta-item-{type}">category</div>
			</div>
		</div>
	</div>
</div>
```

### Abstract
Abstract is a method for quick nondescript usage. It's a method for adding block elements that do not require 

**.wrapper**  

**.head**  

**.body**  

**.foot**  

```
<div class="wrapper">
	<div class="head"></div>
	<div class="body"></div>
	<div class="foot"></div>
</div>
```

### Responsive tier widths

- 1600
- 1280
- 1080
- 1024
- 800
- 768
- 600
- 568
- 480
- 320
