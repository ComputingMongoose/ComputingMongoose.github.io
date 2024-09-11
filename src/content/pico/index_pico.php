<?php $sys->setTags(["pico"]); ?>

<h1>Raspberry Pi Pico</h1>

<p>The Raspberry Pi Pico board allows for easy implementation of microcontroller projects. 
There are multiple versions of the board, the main differences being the clock frequency and the presence (or absence) of built-in wireless connectivity.
The RP2040 microcontroller features a dual-core Arm Cortex-M0+ processor with 264kB internal RAM and support for up to 16MB 
of off-chip flash. I/O options include: I2C, SPI, and Programmable I/O (PIO). 
</p>

<p>The main programming languages used with the Pi Pico are C/C++ and MicroPython.
While the C/C++ SDK provides quick and direct access to all the hardware features, the Python libraries provide high-level, object-based interfaces.
This website section is dedicated to different projects employing the Raspberry Pi Pico board.</p>

<h2>Raspberry Pi Pico projects and resources</h2>
<ul>
<?php
$cpus=$sys->generateMenuItemsForTag("pico");
foreach($cpus as $item){
	echo "<li><a href=\"${item['link']}\">${item['title']}</a></li>\n";
}
?>
</ul>

<h2>External links</h2>
<ul>
<li><a href="https://www.raspberrypi.com/documentation/microcontrollers/pico-series.html" target="_blank">Raspberry Pi Pico Official Documentation</a></li>
<li><a href="https://github.com/raspberrypi/pico-sdk" target="_blank">Raspberry Pi Pico SDK Github Repository</a></li>
<li><a href="https://www.raspberrypi.com/documentation/pico-sdk/" target="_blank">Raspberry Pi Pico SDK Documentation</a></li>
<li><a href="https://www.raspberrypi.com/documentation/microcontrollers/micropython.html" target="_blank">Raspberry Pi Pico MicroPython Documentation</a></li>
</ul>

<h2>Pinout of the Pi Pico board</h2>
<div style="display:inline-block">
<img src="<?php echo $sys->getResourceLink("img/pico-2-r4-pinout.png"); ?>" width="200px" onclick="enlargeImage(event);"/>
</div>

<h2>My Youtube playlist with Raspberry Pi Pico projects</h2>
<iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?si=ZI6_EWpA6vqPrhk8&amp;list=PL7-u-wmV6bWolOY_WsMYsVexO07NUKOXR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
