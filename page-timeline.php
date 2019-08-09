<?php
/**
template name: 时间线
*/
?>
<html>	
<head>
<title><?php wp_title( '-', true, 'right' ); ?></title>
		
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<link rel="stylesheet" type="text/css" href="https://blog-1252258959.file.myqcloud.com/tools/timeline/css/default.css" />
		<link rel="stylesheet" type="text/css" href="https://blog-1252258959.file.myqcloud.com/tools/timeline/css/component.css" />
	</head>
	<body>
		<div class="container">
			<header class="clearfix">
				<span>bbsec.xyz <span class="bp-icon bp-icon-about" data-content="需要技术支持请Mail我"></span></span>
				<h1>About Timeline</h1>
				<nav>
					<a onclick="window.history.go(-1)" class="bp-icon bp-icon-prev" data-info="Go Back"><span>Go Back</span></a>
					<a href="/" class="bp-icon bp-icon-next" data-info="Go Blog"><span>Go Blog</span>
					<a href="link.html" class="bp-icon bp-icon-drop" data-info="Go Links"><span>Go Links</span></a>
					<a href="mailto:admin@bbsec.xyz" class="bp-icon bp-icon-archive" data-info="Email to me"><span>Email to me</span></a>
				</nav>
			</header>	
			<div class="main">
				<ul class="cbp_tmtimeline">				
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
<?php 
$json = get_the_content();
$J=json_decode($json);
foreach($J as $item){?>			<li>
						<time class="cbp_tmtime"><span><?php print($item->y);?>年</span><span><?php print($item->d);?></span></time>
						<div class="cbp_tmicon cbp_tmicon-screen"></div>
						<div class="cbp_tmlabel">
							<h2><?php print($item->h);?></h2>
							<p><?php print($item->t);?></p>
						</div>
					</li>

<?php }
?>
<?php endwhile; else : ?>
<?php endif; ?>
					<li>
						<time class="cbp_tmtime"><span>过去</span></time>
						<div class="cbp_tmicon cbp_tmicon-earth"></div>
					</li>

				</ul>
			</div>
		</div>
	</body>
<script src="https://blog-1252258959.file.myqcloud.com/tools/timeline/js/modernizr.custom.js"></script>
</html>
