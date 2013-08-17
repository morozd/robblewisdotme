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
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/twitterFetcher.min.js"></script>

				<script type="text/javascript">
  					var GoSquared = {};
  					GoSquared.acct = "GSN-829474-I";
  					(function(w){
  					  function gs(){
  					    w._gstc_lt = +new Date;
  					    var d = document, g = d.createElement("script");
  					    g.type = "text/javascript";
  					    g.src = "//d1l6p2sc9645hc.cloudfront.net/tracker.js";
  					    var s = d.getElementsByTagName("script")[0];
  					    s.parentNode.insertBefore(g, s);
  					  }
  					  w.addEventListener ?
  					    w.addEventListener("load", gs, false) :
  					    w.attachEvent("onload", gs);
  					})(window);
				</script>

				<script type="text/javascript" src="http://snaptortoise.github.io/konami-js/konami.js"></script>
				<script type="text/javascript">
					var success = function() {
						console.log("Done");
						$('p').attr('class', 'rainbow');
						$('a').attr('class', 'rainbow');
						$('ul').attr('class', 'rainbow');
						$('ol').attr('class', 'rainbow');
						$('li').attr('class', 'rainbow');
						$('code').attr('class', 'rainbow');
					}

					konami = new Konami(success);
				</script>
		
	</head>
	
	<body class="basket">
		
		<header class="basket-whole title">

			<h1><a href="/"><?php bloginfo('name'); ?></a></h1>

		</header>

		<nav class="basket-whole main">

			<ul>
				<?php wp_list_pages('title_li=&depth=1'); ?>
			</ul>
		
		</nav>