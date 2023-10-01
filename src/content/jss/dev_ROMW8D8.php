<?php $sys->setTags(["jss_device"]); ?>

<h1>JSS Device ROMW8D8</h1>

<p>This device simulates a Read Only Memory (ROM) with word size 8-bits and data bus connection 8-bits. This type of memory is probably the most widely used in 8-bit architectures (and newer), such as the <a href="<?php echo $sys->getLink('content/cpu/intel8008.php');?>">Intel 8008</a> and the <a href="<?php echo $sys->getLink('content/cpu/intel8080.php');?>">Intel 8080</a>.
It is similar to the <a href="<?php echo $sys->getLink('dev_MemoryW8D8.php');?>">MemoryW8D8</a> device, but does not allow data to be written under program control. It should be initialized from a HEX or BINARY file.</p>

<h2>Options</h2>
<ul>
<?php include "common_dev_memory.php"; ?>
</ul>

<h2>Implementation</h2>
<a href="https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/memory/impl/ROMW8D8.java" target="_blank">https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/memory/impl/ROMW8D8.java</a>

<h2>Example configuration</h2>
<pre>
<code>
{
	"name":"ROM",
	"type":"ROMW8D8",
	"configuration":[
		{"key":"size", "value":6144},
		{"key":"initialization_policy", "value":"ZERO"},
		{"key":"load_hex", "value":"monIIv13_diagIIv13_as.hex"},
		{"key":"load_hex_offset", "value":59392}
	]
}
</code>
</pre>

<h2>Example simulation</h2>
<a href="https://github.com/ComputingMongoose/Simulations/tree/main/simulations/Intellec_8_mod_80/cpm22" target="_blank">https://github.com/ComputingMongoose/Simulations/tree/main/simulations/Intellec_8_mod_80/cpm22</a>

<?php include "common_dev_memory_youtube.php"; ?>

