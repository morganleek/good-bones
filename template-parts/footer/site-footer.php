<footer id="colophon">
	<div class="inner">
		<h1 id="site-logo"><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<nav>
			<?php 
				_themename_nav( array( 
					'theme_location' => 'header'
				) );
			?>
		</nav>
		<div id="copyright">
			<p>&copy; <?php print date( 'Y' ); ?></p>
		</div>
	</div>
</footer><!-- #colophon -->