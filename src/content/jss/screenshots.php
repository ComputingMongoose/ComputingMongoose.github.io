<?php $sys->setTags(["jss"]); ?>

<h1>Screenshots</h1>

<p>Screenshots from various simulations created with the Java System Simulator project. 
</p>


<div style="width:100%">
<div style="display:inline-block">
<img src="<?php echo $sys->getResourceLink("img/sim1.jpg"); ?>" width="200px" onclick="enlargeImage(event);"/>
</div>

<div style="display:inline-block">
<img src="<?php echo $sys->getResourceLink("img/sim2.jpg"); ?>" width="200px" onclick="enlargeImage(event);"/>
</div>

<div style="display:inline-block">
<img src="<?php echo $sys->getResourceLink("img/sim3.jpg"); ?>" width="200px" onclick="enlargeImage(event);"/>
</div>

</div>

<h2>More Information</h2>
<ul>
<?php
$items=$sys->generateMenuItemsForTag("jss");
foreach($items as $item){
	echo "<li><a href=\"${item['link']}\">${item['title']}</a></li>\n";
}
?>
</ul>
