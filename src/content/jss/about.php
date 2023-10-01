<?php $sys->setTags(["jss"]); ?>

<h1>About JSS</h1>

<p>The Java System Simulator project aims at simulating old computer architectures. It implements different components (CPU, memory, bus, controller ICs, etc.) as standalone objects that can be connected using a configuration file, specific to the simulation. In addition, it offers a Simulation Control component that can be used to suspend a running simulation, inspect the CPU, step through a program, inspect the memory, inspect the disks, and even disassemble the running code (when the CPU implementation supports it). 
</p>


<h2>Screenshots</h2>
<div>
<div style="display:inline-block">
<img src="<?php echo $sys->getResourceLink("img/sim1.jpg"); ?>" width="200px" onclick="enlargeImage(event);"/>
</a>
</div>

<div style="display:inline-block">
<img src="<?php echo $sys->getResourceLink("img/sim2.jpg"); ?>" width="200px" onclick="enlargeImage(event);"/>
</div>

<div style="display:inline-block">
<img src="<?php echo $sys->getResourceLink("img/sim3.jpg"); ?>" width="200px" onclick="enlargeImage(event);"/>
</div>

</div>
<p><a href="<?php echo $sys->getLink("content/jss/screenshots.php");?>">More screenshots</a></p>

<h2>Downloads</h2>
<ul>
<li><a href="https://github.com/ComputingMongoose/JavaSystemSimulator/releases" target="_blank">Releases</a></li>
<li><a href="https://github.com/ComputingMongoose/JavaSystemSimulator" target="_blank">GitHub project</a></li>
<li><a href="https://github.com/ComputingMongoose/Simulations" target="_blank">Simulations</a></li>
</ul>

<h2>More Information</h2>
<ul>
<?php
$items=$sys->generateMenuItemsForTag("jss");
foreach($items as $item){
	echo "<li><a href=\"${item['link']}\">${item['title']}</a></li>\n";
}
?>
</ul>
