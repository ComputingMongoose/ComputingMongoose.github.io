<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $sys->getTitle(); ?></title>
<link rel="stylesheet" href="<?php echo $sys->getResourceLink('css/style.css');?>"/>
<script async src="<?php echo $sys->getResourceLink('scripts/utils.js');?>"></script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BT4H4TG4TN"></script>

<!-- Sharethis button -->
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=651121d40e7b8300197c7c8a&product=sticky-share-buttons&source=platform" async="async"></script>

<!-- Pinterest -->
<script  type="text/javascript" async defer src="https://assets.pinterest.com/js/pinit.js"></script>

</head>

<body>

<div class="leftbar">
	<div class="title"><a href="<?php echo $sys->getLink('content/index.php'); ?>"><img src="<?php echo $sys->getResourceLink('img/logo_300_96.png');?>" width="250px"/></a></div>
	<ul class="menu">
	<?php echo $sys->getMenuHtml();?>
	</ul>
	
	<div style="position:absolute; bottom:0;">
	<a href="https://www.youtube.com/@ComputingMongoose" target="_blank"><img src="<?php echo $sys->getResourceLink('img/video.png');?>" width="50px"/></a>
	<a href="https://github.com/ComputingMongoose" target="_blank"><img src="<?php echo $sys->getResourceLink('img/github.png');?>" width="50px"/></a>
	<a href="https://www.pinterest.com/computingm/" target="_blank"><img src="<?php echo $sys->getResourceLink('img/pinterest.png');?>" width="50px"/></a>
	</div>
</div>

<div class="content1">
<div class="content"><?php echo $sys->getContent(); ?></div>
</div>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BT4H4TG4TN');
</script>

</body>
</html>
