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

**.inner-wrap**  
The purpose of .inner-wrap is to allow for a section wrapper that utilize max-width or specific width to be given to a #section-name with out confining the #section-name to a width. Now #section-width can extend to 100% of the page while it's .inner-wrap can be "max-width:960px;".

**.row-fluid**  
_usage: bootstrap-responsive, optional, recommended for columns_  
row-fluid is a class from the bootstrap fluid responsive css file. It's purpose is to allow for rows of block content with columns that will flow within different size browser windows.

**.span{number}**  
_usage: bootstrap-responsive, optional, recommended for columns_  
span{number} is a class from the bootstrap fluid responsive css file. It's purpose is to allow for columns to be added in a way that can be fluid within various browser widths.

**.inside-wrapper**  
_usage: optional, recommended_  
The purpose of .inner-wrap is to allow for a block wrapper that utilizes padding on a block that has a set width.

**section-name.php**


```
<div id="{section-name}" class="outer-wrap">
	<div class="inner-wrap">
		<div class="row-fluid">
			<div id="{section-block-name}" class="span8 {layout-style}">
				<div class="inside-wrapper">
					<p>Some html here</p>
				</div>
			</div>
			<div class="span4">
				<div class="inside-wrapper">
					<p>Some more html here</p>
				</div>
			</div>
		</div>
	</div>
</div>
```


### Layouts
Layout follow the same basic concept as a standard block.

**.layout**  
This is a globalized class that allows for the obvious usage through out all "layouts" with in a project.

**.layout-{type}**  
_usage: optional, recommended_  
This class allows for specific layout types to overwrite "layout". It also allows for targeting div's with out using id's. A few example of layout-{type} would be: layout-posts, layout-pages, layout-events, layout-video

**.hentry**  
hentry refers to an individual item with in a layout. "item" would be a better term, but hentry has been used more often so it will remain in place.

**.hentry-{type}**  
_usage: optional, recommended_  
The purpose of hentry type to allow for various item types to exist with in a single layout and retain various styles.

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

**.item**  
_usage: optional, recommended_  
The purpose of the item is to group all items within meta-data

**.item-{type}**  
_usage: optional, recommended_  
The purpose of the meta-item-type is to target specific items for styles.

```
<div id="{section-name}" class="layout-{type}">
	<div class="inside-wrapper">
		<div class="hentry hentry-{type}">
			<div class="h1">Title</div>
			<div class="entry"><p>Text here</p></div>
			<div class="meta-data meta-data-{type}">
				<div class="meta-item-{type}">category</div>
			</div>
		</div>
	</div>
</div>
```

### Abstract
Abstract is a method for quick non-descript usage.

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
- 960
- 800
- 768
- 600
- 568
- 480
- 320
