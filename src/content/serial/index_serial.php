<?php $sys->setTags(["serial"]); ?>

<h1>Serial Peripherals</h1>

<p>This section of the website is dedicated to serial peripherals, such as teletypes and computer terminals (also known as "dumb terminals", or "interactive display terminals"). 
These devices allowed interaction with early computers (entering data, viewing results). In the <a href="<?php echo $sys->getLink('content/jss/about.php');?>">Java System Simulator</a> project, some of these devices are <a href="<?php echo $sys->getLink('content/jss/devices.php');?>">simulated</a> and are available for inclusion in larger simulations.
</p>

<h2>Serial Peripherals</h2>
<ul>
<?php
$cpus=$sys->generateMenuItemsForTag("serial");
foreach($cpus as $item){
	echo "<li><a href=\"${item['link']}\">${item['title']}</a></li>\n";
}
?>
</ul>
