<?php $sys->setTags(["jss_device"]); ?>

<h1>JSS Device ASR33Teletype</h1>

<p>This device simulates an <a href="<?php echo $sys->getLink('content/serial/asr33.php');?>">ASR-33 teletype</a> (with keyboard and paper tape reader). The real device was connected via a current loop interface, however the simulated device can be connected using an UART for RS-232 communication (for real hardware, modern RS-232 adapter boards do exist). The tape can be changed by selecting a file. When the paper tape reader is used, the file will be sent byte by byte. This is particularly useful for loading HEX files into a monitor software.
</p>

<h2>Options</h2>
<ul>
<?php include "common_dev_serial.php"; ?>
<li><b>enable_load_tape</b> - if set to 0, disables changing of the tape file. Default value is 1.</li>
<li><b>tape_in</b> - sets the default file to be loaded in the paper tape reader.</li>
<li><b>tape_in_compute_checksums</b> - if set to 1, will assume the tape is a HEX file and will compute the checksum when the file is loaded. Default value is 0.</li>
</ul>

<h2>Implementation</h2>
<a href="https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/peripherals/ASR33Teletype.java" target="_blank">https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/peripherals/ASR33Teletype.java</a>

<h2>Example configuration</h2>
<pre>
<code>
{
	"name":"ASR33",
	"type":"ASR33Teletype",
	"configuration":[]
}
</code>
</pre>


<h2>Example simulation</h2>
<a href="https://github.com/ComputingMongoose/Simulations/tree/main/simulations/Intellec_4_mod_40/basic_system_with_monitor" target="_blank">https://github.com/ComputingMongoose/Simulations/tree/main/simulations/Intellec_4_mod_40/basic_system_with_monitor</a>

