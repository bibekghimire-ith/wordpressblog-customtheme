<!DOCTYPE html>
<html>
<head>

	<title>Wordpress Blog Theme</title>
<!-- Required meta tags -->


<style type="text/css">
* {
  box-sizing: border-box;
}

body {


  /*font-family: Arial, Helvetica, sans-serif;*/
	font-family: 'Comic Sans MS';
}

	header{
	margin: 0px auto;
	width: 1240px;
	background: #bd3b0f;
	text-align: center;
	font-size: 48px;
	padding-bottom: 20px;
	margin-bottom: 30px;
	}

	b{
	font-size: 48px;
	font-family: 'Comic Sans MS';
	text-shadow: 3px 2px red;
}

/* Create three unequal columns that floats next to each other */
.column {
	margin: 0px auto;
	width: 1240px;
  float: left;
  padding: 10px;
  height: 435px; /* Should be removed. Only for demonstration */
}

/* Left and right column */
.column.side {
	margin: 0px auto;
  width: 30%;
}

/* Middle column */
.column.middle {
	margin: 0px auto;
  width: 70%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.center {
	font-size: 28px;
	font-weight: bold;
	color: #bcd;
	text-align: center;
}


button {
  padding: 15px 25px;
  font-size: 16px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  /*box-shadow: 0 9px #999;*/
}
button.snapshot, button.view {
  padding: 15px 25px;
  font-size: 16px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #ff4500;
  border: none;
  border-radius: 15px;
  /*box-shadow: 0 9px #999;*/
}
button.logout {
  padding: 15px 25px;
  font-size: 16px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #d00;
  border: none;
  border-radius: 15px;
  /*box-shadow: 0 9px #999;*/
}



button:hover {background-color: #3e8e41}

button:active {
  background-color: #100;
  /*box-shadow: 0 5px #666;*/
  /*transform: translateY(4px);*/
}

		span{
	padding-top: 50%;
	font-family: 'Comic Sans MS';
	/*text-shadow: 1px 1px red;*/
}

	footer{
	margin: 0px auto;
	width: 1240px;
	text-align: center;
	font-weight: bold;
	background: #bd3b0f;
	margin-top: 1em;
	min-height: 4em;
	text-shadow: 3px 2px red;
}
/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .side{
	width: 100%;
  }
  .middle {
    width: 100%;
  }
}

@media screen and (max-width: 1240px){
	.container{
		width: 100%;
	}
	header{
		width: 100%;
	}


	.middle{
		width: 70%;
	}
	.side{
		width: 30%;
	}
	footer{
		width: 100%;
	}
}

@media screen and (max-width: 640px){
	header{
		width: 100%;
	}
	.container {

		width: 100%;
	}
	.column .middle{
		width: 100%;
	}
	.column .side{
		width: 100%;
	}
	footer{
		width: 100%;
	}
}

@media screen and (max-width: 320px){
	.container{
		width: 320px;
	}
}

</style>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<link rel = "stylesheet" src = "{{ url_for('static', filename = 'bootstrap.min.css') }}">
<script type = "text/javascript" src = "{{ url_for('static', filename = 'bootstrap.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src = "{{ url_for('static', filename = 'jquery-3.4.1.js') }}"></script>


</head>
<body>

<div>
	<header><b>Wordpress Blog Theme</b></header>


<a href="#down">Down</a>
<div>
Theme Classes

Implement the following template tags to add WordPress-generated class attributes to body, post, and comment elements. For post classes, apply only to elements within The Loop.

    body_class()
    post_class()
    comment_class()

Template File Checklist

When developing a Theme, check your template files against the following template file standards.
Document Head (header.php)

  
Here's an example of a correctly-formatted HTML5 compliant head area:


Navigation Menus (header.php)

    The Theme's main navigation should support a custom menu with wp_nav_menu().
        Menus should support long link titles and a large amount of list items. These items should not break the design or layout.
        Submenu items should display correctly. If possible, support drop-down menu styles for submenu items. Drop-downs allowing showing menu depth instead of just showing the top level.

Widgets (sidebar.php)

    The Theme should be widgetized as fully as possible. Any area in the layout that works like a widget (tag cloud, blogroll, list of categories) or could accept widgets (sidebar) should allow widgets.
    Content that appears in widgetized areas by default (hard-coded into the sidebar, for example) should disappear when widgets are enabled from Appearance > Widgets.

Footer (footer.php)

    Use the wp_footer() call, to appear just before closing body tag.



Index (index.php)

    Display a list of posts in excerpt or full-length form. Choose one or the other as appropriate.
    Include wp_link_pages() to support navigation links within posts.

Archive (archive.php)

    Display archive title (tag, category, date-based, or author archives).
    Display a list of posts in excerpt or full-length form. Choose one or the other as appropriate.
    Include wp_link_pages() to support navigation links within posts.

Pages (page.php)

    Display page title and page content.
    Display comment list and comment form (unless comments are off).
    Include wp_link_pages() to support navigation links within a page.
    Metadata such as tags, categories, date and author should not be displayed.
    Display an "Edit" link for logged-in users with edit permissions.

Single Post (single.php)

    Include wp_link_pages() to support navigation links within a post.
    Display post title and post content.
        The title should be plain text instead of a link pointing to itself.
    Display the post date.
        Respect the date and time format settings unless it's important to the design. (User settings for date and time format are in Administration Panels > Settings > General).
        For output based on the user setting, use the_time( get_option( 'date_format' ) ).
    Display the author name (if appropriate).
    Display post categories and post tags.
    Display an "Edit" link for logged-in users with edit permissions.
    Display comment list and comment form.
    Show navigation links to next and previous post using previous_post_link() and next_post_link().

Comments (comments.php)

    Author comment should be highlighted differently.
    Display gravatars (user avatars) if appropriate.
    Support threaded comments.
    Display trackbacks/pingbacks.
    This file shouldn’t contain function definitions unless in the function_exist() check to avoid redeclaration errors. Ideally all functions should be in functions.php.

Search Results (search.php)

    Display a list of posts in excerpt or full-length form. Choose one or the other as appropriate.
    The search results page shows the search term which generated the results. It's a simple but useful way to remind someone what they just searched for -- especially in the case of zero results. Use the_search_query() or get_search_query() (display or return the value, respectively). For example:

   <code> <h2><?php printf( __( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>'); ?></h2></code>

    It's a good practice to include the search form again on the results page. Include it with: get_search_form().

JavaScript

    JavaScript code should be placed in external files whenever possible.
    Use wp_enqueue_script() to load your scripts.
    JavaScript loaded directly into HTML documents (template files) should be CDATA encoded to prevent errors in older browsers.


Screenshot

Create a screenshot for your theme. The screenshot should be named screenshot.png, and should be placed in the top level directory. The screenshot should accurately show the theme design and saved in PNG format. While .jpg, .jpeg, and .gif are also valid extensions and file formats for the screenshot, they are not recommended.

The recommended image size is 1200px wide by 900px tall. The screenshot will usually be shown smaller but the over-sized image allows for high-resolution viewing on HiDPI displays. Note that because the Manage Themes screen is responsive, the top and bottom of the screenshot image might not be viewable so keep graphics near the center.
Theme Options

Themes can optionally support the Theme Customize Screen. For an example code, see A Sample WordPress Theme Options Page.

When enabling the availability of the Theme Customize Screen for a user role, use the "edit_theme_options" user capability instead of the "switch_themes" capability unless the user role actually should also be able to switch the themes. See more at Roles and Capabilities and Adding Administration Menus.

If you are using the "edit_themes" capability anywhere in your Theme to gain the Administrator role access to the Theme Customize Screen (or maybe some custom screens), be aware that since Version 3.0, this capability has not been assigned to the Administrator role by default in the case of WordPress Multisite installation. See the explanation. In such a case, use the "edit_theme_options" capability instead if you want the Administrator to see the "Theme Options" menu. See the additional capabilities of Administrator role when using WordPress Multisite.
Theme Testing Process

    Fix PHP and WordPress errors. Add the following debug setting to your wp-config.php file to see deprecated function calls and other WordPress-related errors: define('WP_DEBUG', true);. See Deprecated Functions Hook for more information.
    Check template files against Template File Checklist (see above).
    Do a run-through using the Theme Unit Test.
    Validate HTML and CSS. See Validating a Website.
    Check for JavaScript errors.
    Test in all your target browsers. For example, IE9, Safari, Chrome, Opera, Firefox and Microsoft Edge.
    Clean up any extraneous comments, debug settings, or TODO items.
    See Theme Review if you are publicly releasing the Theme by submitting it to the Themes Directory.

Resources and References
Code Standards

    Know Your Sources
    WordPress Coding Standards
    CSS Coding Standards

Theme Design

    Site Design and Layout

CSS

    CSS
    CSS Shorthand
    WordPress Generated Classes

Templates

    Stepping Into Templates
    Templates
    Template Hierarchy
    Template Tags
    The Loop
    Conditional Tags
    Function Reference
    I18n for WordPress Developers
    Data Validation

Functions listing
</div>
<div id="down">
<h1 style="color:red">Slider</h1>
    Function Reference

Testing and QA

    Theme Unit Test
    Validating a Website
    CSS Fixing Browser Bugs
    CSS Troubleshooting
    modern.IE: for testing IE on different platforms with open-source tools

Release & Promotion

    Theme Review Process

External Resources & Tutorials

    List of WordPress Theme Development Resources
    Incorporating the Settings API in WordPress Themes
    HTML Dog
    WordPress Theme Support Generator

Categories:

    Design and Layout
    WordPress Development
    UI Link

    Home Page
    WordPress Lessons
    Getting Started
    Working with WordPress
    Design and Layout
    Advanced Topics
    Troubleshooting
    Developer Docs
    About WordPress

Codex Resources

    Community portal
    Current events
    Recent changes
    Random page
    Help

</div>
</div>
<footer><br><span>&copy; 2020 by Bibek Ghimire</span></footer>

</div>




</body>
</html>
