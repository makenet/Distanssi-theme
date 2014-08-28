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
			<div class="infonav" data-spy="affix" data-offset-top="250" data-offset-bottom="300"> 
				<ul class="nav nav-pills nav-stacked"></ul>
			</div>
		</div>
	</div>
<?php endwhile; wp_reset_query(); ?>
<?php get_footer(); ?>
<script type="text/javascript">
$(".content h1, .content h2, .content h3").each(function(i) {
    var current = $(this);
    current.attr("id", "title" + i);
    $(".infonav ul").append("<li><a id='link" + i + "' href='#title" +
        i + "' class='infonav_" + current.get(0).tagName + "'>" + 
        current.html() + "</a></li>");
});
$(document).ready(function () {
    $(window).resize(function () {
        $('.infonav').width($('.sidebar').width());
    });
    $(window).bind('scroll',function () {
        $('.infonav').width($('.sidebar').width());
    });

});</script>