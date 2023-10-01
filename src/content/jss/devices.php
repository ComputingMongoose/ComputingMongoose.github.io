<?php $sys->setTags(["jss"]); ?>

<h1>Simulated Devices</h1>

<p>The Java System Simulator does not simulate a single, hardcoded, computer architecutre. Instead it simulates individual devices which can be connected using a simulation configuration file. In this way, different architectures with different parameters can be configured and simulated. Each simulated device has a number of parameters which can be set in the simulation json configuration.</p>
<p>The following classes of devices are currently available:
<ul>
<li><b>Memory</b> - Different types of memory are simulated, including ROM/RAM, with different word sizes 4-bit, 8-bit, 16-bit.</li>
<li><b>CPU</b> - The Central Processing Unit executes programs for a specific architecture.</li>
<li><b>BUS</b> - Devices are connected via BUSes (which can be Data BUS and/or Control BUS).</li>
<li><b>Special ICs</b> - Special integrated circuits (ICs), such as Programmable Interrupt Controller (PIC), Programmable Peripheral Interface (PPI), Direct Memory Access (DMA) controller.</li>
<li><b>Terminals</b> - In certain computer architectures, display is accomplished via terminals connected on the serial interface</li>
<li><b>Disk controllers</b> - Access to floppy disks or hard disks is accomplished via disk controllers</li>
</p>

<h2>Device details</h2>
<ul>
<?php
$items=$sys->generateMenuItemsForTag("jss_device");
foreach($items as $item){
	echo "<li><a href=\"${item['link']}\">${item['title']}</a></li>\n";
}
?>
</ul>
