<p class="lead">Grid systems are used for creating page layouts through a series of rows and columns that house your content.</p>

<p>This Grid includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases.</p>
	
	<code><pre>
	/* Extra small devices (phones, less than 768px) */
	/* No media query since this is the default */

	/* Small devices (tablets, 768px and up) */
	@media (min-width: @screen-sm-min) { ... }

	/* Medium devices (desktops, 992px and up) */
	@media (min-width: @screen-md-min) { ... }

	/* Large devices (large desktops, 1200px and up) */
	@media (min-width: @screen-lg-min) { ... }
	</pre></code>

<h3>The Grid</h3>
<p>Rows must be placed within a <code>.container</code> <i>(fixed-width)</i> or <code>.container-fluid</code> <i>(full-width)</i> for proper alignment and padding.</p>

<p>Use rows to create horizontal groups of columns.Using a single set of <code>.col-md-*</code> grid classes, you can create a basic grid system that starts out stacked on mobile devices and tablet devices <i>(the extra small to small range)</i> before becoming horizontal on desktop <i>(medium)</i> devices. Place grid columns in any <code>.row</code>. Here's how the grid system works:</p>
