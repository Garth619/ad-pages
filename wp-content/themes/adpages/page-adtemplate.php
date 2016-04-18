<?php
/**
 * Template Name: Ad Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

 ?>
 
 <?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
<script src="https://use.typekit.net/fae3bee.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>

<body <?php body_class(); ?>>
	
	<div class="header">
		<div class="inner_header">
			<div class="logo_wrapper">
				<img class="logo" src="<?php bloginfo('template_directory');?>/images/logo.png"/>
				<span class="location_name">Location Name</span><!-- location_name -->
			</div><!-- logo_wrapper -->
				<span class="phone_number">(XXX) XXX-XXXX</span><!-- phone_number -->
			
			</div><!-- inner_header -->
	</div><!-- header -->
	
	<div class="main">
		
		<div id="content">
		
			<h1>How to: Make Your Windows Appear Bigger Without Replacing Them</h1>
			
			<p>Large-scale windows with gorgeous views are any interior designer’s dream, but unfortunately it’s not a dream all of us can afford. Did you know window treatments have the ability to make your windows appear bigger than they actually are? Serving both aesthetic, and practical purposes, there is nothing that can change a room as dramatically as window treatments. Complete your home with the elegant touch of window treatments and use these 5 guaranteed ways to make your windows appear bigger:</p>
			
			<img src="<?php bloginfo('template_directory');?>/images/img.png"/>
			
			
			The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site.

<hr />

<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<h6>Heading 6</h6>
<small><a href="#wrapper">[top]</a></small>

<hr />

<h2 id="paragraph">Paragraph</h2>
Lorem ipsum dolor sit amet, <a title="test link" href="#">test link</a> adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.

Lorem ipsum dolor sit amet, <em>emphasis</em> consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.

<small><a href="#wrapper">[top]</a></small>

<hr />

<h2 id="list_types">List Types</h2>
<h3>Definition List</h3>
<dl><dt>Definition List Title</dt><dd>This is a definition list division.</dd></dl>
<h3>Ordered List</h3>
<ol>
	<li>List Item 1</li>
	<li>List Item 2</li>
	<li>List Item 3</li>
</ol>
<h3>Unordered List</h3>
<ul>
	<li>List Item 1</li>
	<li>List Item 2</li>
	<li>List Item 3</li>
</ul>
<small><a href="#wrapper">[top]</a></small>

<hr />

<h2 id="form_elements">Forms</h2>
<fieldset><legend>Legend</legend>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus.

<form>
<h2>Form Element</h2>
Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui.

<label for="text_field">Text Field:</label>

<input id="text_field" type="text" /><label for="text_area">Text Area:</label>
<textarea id="text_area"></textarea>

<label for="select_element">Select Element:</label>

<select name="select_element"> <optgroup label="Option Group 1"> <option value="1">Option 1</option> <option value="2">Option 2</option> <option value="3">Option 3</option></optgroup></select>&nbsp;
<select name="select_element"> <optgroup label="Option Group 2"> <option value="1">Option 1</option> <option value="2">Option 2</option> <option value="3">Option 3</option></optgroup></select>&nbsp;
<label for="radio_buttons">Radio Buttons:</label>

<input class="radio" type="radio" name="radio_button" value="radio_1" /> Radio 1 <input class="radio" type="radio" name="radio_button" value="radio_2" /> Radio 2 <input class="radio" type="radio" name="radio_button" value="radio_3" />Radio 3<label for="checkboxes">Checkboxes:</label>

<input class="checkbox" type="checkbox" name="checkboxes" value="check_1" /> Radio 1 <input class="checkbox" type="checkbox" name="checkboxes" value="check_2" /> Radio 2 <input class="checkbox" type="checkbox" name="checkboxes" value="check_3" />Radio 3<label for="password">Password:</label>

<input class="password" type="password" name="password" /><label for="file">File Input:</label>

<input class="file" type="file" name="file" /> <input class="button" type="reset" value="Clear" /> <input class="button" type="submit" value="Submit" /></form></fieldset>
<small><a href="#wrapper">[top]</a></small>

<hr />

<h2 id="tables">Tables</h2>
<table cellspacing="0" cellpadding="0">
<tbody>
<tr>
<th>Table Header 1</th>
<th>Table Header 2</th>
<th>Table Header 3</th>
</tr>
<tr>
<td>Division 1</td>
<td>Division 2</td>
<td>Division 3</td>
</tr>
<tr class="even">
<td>Division 1</td>
<td>Division 2</td>
<td>Division 3</td>
</tr>
<tr>
<td>Division 1</td>
<td>Division 2</td>
<td>Division 3</td>
</tr>
</tbody>
</table>
<small><a href="#wrapper">[top]</a></small>

<hr />

<h2 id="misc">Misc Stuff – abbr, acronym, pre, code, sub, sup, etc.</h2>
Lorem <sup>superscript</sup> dolor <sub>subscript</sub> amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. <cite>cite</cite>. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. <acronym title="National Basketball Association">NBA</acronym> Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus. <abbr title="Avenue">AVE</abbr>
<pre>
Lorem ipsum dolor sit amet,
 consectetuer adipiscing elit.
 Nullam dignissim convallis est.
 Quisque aliquam. Donec faucibus.
Nunc iaculis suscipit dui.
Nam sit amet sem.
Aliquam libero nisi, imperdiet at,
 tincidunt nec, gravida vehicula,
 nisl.
Praesent mattis, massa quis
luctus fermentum, turpis mi
volutpat justo, eu volutpat
enim diam eget metus.
Maecenas ornare tortor.
Donec sed tellus eget sapien
 fringilla nonummy.
<acronym title="National Basketball Association">NBA</acronym>
Mauris a ante. Suspendisse
 quam sem, consequat at,
commodo vitae, feugiat in,
nunc. Morbi imperdiet augue
 quis tellus.
<abbr title="Avenue">AVE</abbr></pre>
<blockquote>“This stylesheet is going to help so freaking much.”
-Blockquote</blockquote>
<small><a href="#wrapper">[top]</a></small>


			
			
		
		</div><!-- content -->
		
		<div class="sidebar">
			
			<h1>Schedule Your<br/>
In-Home Consultation</h1>

<?php gravity_form(1, false, false, false, '', true, 12); ?>
			
		</div><!--sidebar -->
		
	</div><!-- main -->


	
<?php // get_template_part( 'loop', 'page' ); ?> 


<div class="sticky_footer">
	
	<span class="schedule">Schedule Your In-Home Consultation</span>
	
	
	
</div><!-- sticky_footer -->

		


<?php wp_footer(); ?>

</body>
</html>
