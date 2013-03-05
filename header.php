<html>

	<head>
	
		<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		
		
		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="shortcut icon" href="img/favicon.ico">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" />
		<link href='http://fonts.googleapis.com/css?family=Lato:400,400italic' rel='stylesheet' type='text/css'>
		
	</head>
	
	<body class="basket">
		
		<header class="basket-quarter">

			<h1><a href="/"><?php bloginfo('name'); ?></a></h1>

		</header>

		<nav class="basket-threeq main">

			<ul>
				<?php wp_list_pages('title_li=&depth=1'); ?>
			</ul>
		
		</nav>