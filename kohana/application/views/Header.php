<?php defined('SYSPATH') OR die('No direct script access.'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8' />
	<meta name='description' content='<?php echo $description ?>' />
	<meta name='keywords' content='<?php echo $keywords ?>' />
	<title><?php echo $title ?></title>
	<link type='text/css' rel='stylesheet' href='/css/style.css'/>
	<script type='text/javascript' src='/js/core.js'></script>
</head>
<body>
	<header>
		<section class='top'>
			<div class='wrap'>
				<nav>
					<?php echo View::factory('Menu/Generate') ?>
				</nav>
				<h1><a href='/'>цитаты</a></h1>
			</div>
		</section>
		<hr class='clear2' />
	</header>
