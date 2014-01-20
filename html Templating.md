HTML Templating
====================

Notes:
--------------------
The following code is intended to be use as a guid for any html that fit with in the following patters. There are numerous times when html will not fit with in these confines.

html
--------------------

### Standard Block
The following code block allows for re-usable "class" targeting as well as id overwrites. 

**.outer-wrap**
The purpose of .outer-wrap is to allow for a global class incase of a need to target all top level div's.

**.inner-wrap**
The purpose of .inner-wrap is to allow for a section wrapper that utilize max-width or specific width to be given to a #section-name with out confining the #section-name to a width. Now #section-width can extend to 100% of the page while it's .inner-wrap can be "max-width:960px;".

**.inside-wrapper**
The purpose of .inner-wrap is to allow for a block wrapper that utilizes padding on a block that has a set width.

```
<div id="section-name" class="outer-wrap section-class">
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