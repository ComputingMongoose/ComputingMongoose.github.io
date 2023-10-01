<?php $sys->setTags(["utils"]); ?>

<h1>Utilities</h1>

<p>This section of the website hosts a number of utilities created by me or things that I commonly use and recommend.
</p>


<ul>
<?php
$items=$sys->generateMenuItemsForTag("utils");
foreach($items as $item){
	echo "<li><a href=\"${item['link']}\">${item['title']}</a></li>\n";
}
?>
</ul>
