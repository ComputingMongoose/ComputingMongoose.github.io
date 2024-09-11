<?php $sys->setTags(["pico"]); ?>

<h1>Counter using 7-Segments Display</h1>

<p>
This is a very simple project created using a Raspberry Pi Pico board and a 3611AS LED 7-Segments Display. 
The display is connected to ground via a 330 ohms resistor. The pins are connected in order to the Pico's GPIO pins, as indicated in the diagram.
The 3611AS has a somewhat weird pin numbering, where pin 1 is ground, pin 2 corresponds to segment F, pin 3 corresponds to segment G, pin 4 corresponds to segment E, etc. (see the schematic for all the mappings).
The Pico's pins are connected in order, thus GPIO 0 is connected to pin 2 of the 3611AS, GPIO 1 is connected to pin 3, etc. 
The mapping between the GPIO pins and the corresponding segments is done in software. 
Power is provided through the USB cable connected to the Pico board (the other end of the USB cable can be connected either to a laptop or to a power adapter).
<br/>
<b>IMPORTANT:</b>When building this circuit, don't forget to place the current limiting resistor, or your 3611AS will likely be damaged.
</p>


<div> <!-- here comes the gallery -->

<div style="display:inline-block">
<img src="<?php echo $sys->getResourceLink("img/pico_project_counter.png"); ?>" width="200px" onclick="enlargeImage(event);"/>
</div>
<div style="display:inline-block">
<img src="<?php echo $sys->getResourceLink("img/pico_project_counter_1.jpg"); ?>" width="200px" onclick="enlargeImage(event);"/>
</div>
<div style="display:inline-block">
<img src="<?php echo $sys->getResourceLink("img/pico_project_counter_2.jpg"); ?>" width="150px" onclick="enlargeImage(event);"/>
</div>
<div style="display:inline-block">
<img src="<?php echo $sys->getResourceLink("img/pico_project_counter_3.jpg"); ?>" width="150px" onclick="enlargeImage(event);"/>
</div>
<div style="display:inline-block">
<img src="<?php echo $sys->getResourceLink("img/pico_project_counter_4.jpg"); ?>" width="200px" onclick="enlargeImage(event);"/>
</div>

</div> <!-- end gallery -->

<h2>Resources</h2>
<ul>
<li>My GitHub repository with the project: <a href="https://github.com/ComputingMongoose/PicoProjects" target="_blank">https://github.com/ComputingMongoose/PicoProjects</a></li>
<li>3611AS datasheet: <a href="http://www.xlitx.com/datasheet/3611AS.pdf" target="_blank">http://www.xlitx.com/datasheet/3611AS.pdf</a></li>
</ul>

<h2>Building the project video</h2>
<iframe width="560" height="315" src="https://www.youtube.com/embed/coLgDJsp-t8?si=yWudbKWBOZIZeb6f" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
