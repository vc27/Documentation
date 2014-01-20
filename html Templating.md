HTML Templating
====================

Notes:
--------------------
The following code is intended to be use as a guid for any html that fit with in the following patters. There are numerous times when html will not fit with in these confines.

html
--------------------

### Standard Block
`
<div id="block-name" class="outer-wrap section-class">
	<div class="inner-wrap">
		<div class="row-fluid">
			<div id="block-name span{number}">
				<div class="inside-wrapper"></div>
			</div>
		</div>
	</div>
</div>
`

### Loop
`
<div id="file-name" class="loop loop-{type}">
	<div class="inside-wrapper">
		<div class="item item-{type}">
			<div class="h1">Title</div>
			<div class="entry">Text here</div>
			<div class="meta-data">
				<div class="meta-item">category</div>
			</div>
		</div>
	</div>
</div>
`

### Abstract
`
<div class="wrap">
	<div class="head"></div>
	<div class="body"></div>
	<div class="foot"></div>
</div>
`