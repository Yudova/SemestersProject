<?php defined('SYSPATH') OR die('No direct script access.'); ?>
			<h1>Категории</h1>
			<section>
				<ul class='category'>
					<?php

					$html = "";

					foreach ($categories as $category)
					{
						$html .= "<li><a href='/category/" . $category->uri . "' title='" . $category->description . "'><b>" . $category->count . "</b>" . $category->title . "</a></li>";
					}
					
					echo $html . "\n";
					
					?>
				</ul><!--.category-->
			</section>