<?php defined('SYSPATH') OR die('No direct script access.'); ?>
	<div class='wrap over'>
		<aside>
			<?php echo View::factory('Page/Sidebar', array('categories' => $categories)) . "\n" ?>
		</aside>
		<section class='content'>
			<?php echo "\t" . $content . "\n" ?>
		</section><!--.content-->
	</div><!--.wrap-->

