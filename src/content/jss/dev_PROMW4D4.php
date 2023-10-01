<?php $sys->setTags(["jss_device"]); ?>

<h1>JSS Device PROMW4D4</h1>

<p>This device simulates a Programmable Read Only Memory (PROM) with word size 4-bits and data bus connection 4-bits. Internally, data is stored in bytes (two 4-bit words are packed into a byte). When an address is read the memory will return data in the lower 4-bits of the Java long value. When written, only the lower 4-bits will be taken into consideration and stored according to the specified address. This type of memory is useful with 4-bit CPUs, such as the <a href="<?php echo $sys->getLink('content/cpu/intel4004.php');?>">Intel 4004</a>. 
It is similar to the <a href="<?php echo $sys->getLink('dev_MemoryW4D4.php');?>">MemoryW4D4</a> device. To use the PROM functionality, it must be attached to a PROM Controller, such as <a href="<?php echo $sys->getLink('dev_PROMControllerBasic.php'); ?>">PROMControllerBasic</a>.</p>

<h2>Options</h2>
<ul>
<?php include "common_dev_memory.php"; ?>
</ul>

<h2>Implementation</h2>
<a href="https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/memory/impl/PROMW4D4.java" target="_blank">https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/memory/impl/PROMW4D4.java</a>

<h2>Example configuration</h2>
<pre>
<code>
{
	"name":"DataPROM",
	"type":"PROMW4D4",
	"configuration":[
		{"key":"size", "value":500},
		{"key":"initialization_policy", "value":"ZERO"}
	]
}
</code>
</pre>

<?php include "common_dev_memory_youtube.php"; ?>
