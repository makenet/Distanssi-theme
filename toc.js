<?php
/*
Template Name: info
*/

get_header(); ?>
<?php while(have_posts()) : the_post(); ?>
<div class="otsake kartta sivukartta">
	<div class="container">
		<h1><?php the_title(); ?></h1>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-9 content">
			<p><?php the_content(''); ?></p>
		</div>
		<div class="sidebar col-md-3" id="myScrollspy">
			<ul class="nav nav-pills nav-stacked infonav" data-spy="affix" data-offset-top="100" data-offset-bottom="300"></ul>
		</div>
	</div>
<?php endwhile; wp_reset_query(); ?>
<?php get_footer(); ?>
<script type="text/javascript">
$("h1, h2, h3").each(function(i) {
    var current = $(this);
    current.attr("id", "title" + i);
    $("").append("<li><a id='link" + i + "' href='#title" +
        i + "' title='" + current.attr("tagName") + "'>" + 
        current.html() + "</a></li>");
});


/*	$('.sidebar').toc({
    //'selectors': 'h3, h4', //elements to use as headings
    'container': '.content', //element to find all selectors in
    'smoothScrolling': true, //enable or disable smooth scrolling on click
    'prefix': '', //prefix for anchor tags and class names
    'onHighlight': function(el) {}, //called when a new section is highlighted 
    'highlightOnScroll': true, //add class to heading that is currently in focus
    'highlightOffset': 100, //offset to trigger the next headline
    'anchorName': function(i, heading, prefix) { //custom function for anchor name
        return prefix+i;
    },
    'headerText': function(i, heading, $heading) { //custom function building the header-item text
        return $heading.text();
    },
	'itemClass': function(i, heading, $heading, prefix) { // custom function for item class
  		return $heading[0].tagName.toLowerCase();
		}
	});
   	$('.sidebar ul').addClass('nav nav-pills nav-stacked infonav');
   	$('.infonav').affix({
    offset: {
      top: 100, 
      bottom: function () {
        return (this.bottom = $('.footer').outerHeight(true))
      }
    }
  })*/
</script>