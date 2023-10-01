<?php $sys->setTags(["jss_device"]); ?>

<h1>JSS Device PROMW8D8</h1>

<p>This device simulates a Programmable Read Only Memory (PROM) with word size 8-bits and data bus connection 8-bits. This type of memory is probably the most widely used in 8-bit architectures (and newer), such as the <a href="<?php echo $sys->getLink('content/cpu/intel8008.php');?>">Intel 8008</a> and the <a href="<?php echo $sys->getLink('content/cpu/intel8080.php');?>">Intel 8080</a>.
It is similar to the <a href="<?php echo $sys->getLink('dev_MemoryW8D8.php');?>">MemoryW8D8</a> device. To use the PROM functionality, it must be attached to a PROM Controller, such as <a href="<?php echo $sys->getLink('dev_PROMControllerBasic.php'); ?>">PROMControllerBasic</a>.</p>

<h2>Options</h2>
<ul>
<?php include "common_dev_memory.php"; ?>
</ul>

<h2>Implementation</h2>
<a href="https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/memory/impl/PROMW8D8.java" target="_blank">https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/memory/impl/PROMW8D8.java</a>

<h2>Example configuration</h2>
<pre>
<code>
{
	"name":"ProgramRAM",
	"type":"PROMW8D8",
	"configuration":[
		{"key":"size", "value":4096},
		{"key":"initialization_policy", "value":"ZERO"}
	]
}
</code>
</pre>

<h2>Example simulation</h2>
<a href="https://github.com/ComputingMongoose/Simulations/tree/main/simulations/Intellec_4/basic_system_with_monitor" target="_blank">https://github.com/ComputingMongoose/Simulations/tree/main/simulations/Intellec_4/basic_system_with_monitor</a>

<?php include "common_dev_memory_youtube.php"; ?>

