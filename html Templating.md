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
_Usage: optional_  
Section class is an optional class that will probably not get used very often due to the fact that sections typically large blocks of html that are note repeated in a way that a section class is needed.

It is included in this outline in order to provide an optional class to span large portions of html.

**.inner-wrap**  
The purpose of .inner-wrap is to allow for a section wrapper that utilize max-width or specific width to be given to a #section-name with out confining the #section-name to a width. Now #section-width can extend to 100% of the page while it's .inner-wrap can be "max-width:960px;".

**.row-fluid**  
_Usage: bootstrap-responsive, optional, recommended for columns_  

**#{block-name}**  

**.span{number}**  
_Usage: bootstrap-responsive, optional, recommended for columns_  

**.{section-class}**  
_Usage: optional, recommended_  

**.inside-wrapper**  
_Usage: optional, recommended_  
The purpose of .inner-wrap is to allow for a block wrapper that utilizes padding on a block that has a set width.

**section-name.php**
```
<div id="{section-name}" class="outer-wrap {section-class}">
	<div class="inner-wrap">
		<div class="row-fluid">
			<div id="block-name" class="span8 block-class">
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

**#block-name**
Block name

**.loop**  
This is a globalized class that allows for the obvious usage through out all "loops" with in a project.

**.loop-{type}**  
This class allows for specific loop types to overwrite "loop". It also allows for targeting div's with out using id's.

```
<div id="block-name" class="loop loop-{type}">
	<div class="inside-wrapper">
		<div class="hentry hentry-{type}">
			<div class="h1">Title</div>
			<div class="entry">Text here</div>
			<div class="meta-data">
				<div class="meta-item">category</div>
			</div>
		</div>
	</div>
</div>
```

### Abstract
```
<div class="wrapper">
	<div class="head"></div>
	<div class="body"></div>
	<div class="foot"></div>
</div>
```