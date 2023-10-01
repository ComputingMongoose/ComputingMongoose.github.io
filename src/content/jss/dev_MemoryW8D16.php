<?php $sys->setTags(["jss_device"]); ?>

<h1>JSS Device MemoryW8D16</h1>

<p>This device simulates a memory with word size 8-bits and data bus connection 16-bits. This type of memory can be used in 16-bit architectures, when specifying a memory address will read/write 2 bytes. Internally, data is stored as bytes. Since the word size is 8, an address specifies a byte location. The data is formed by using the specified address as the lower byte in the result.</p>

<h2>Options</h2>
<ul>
<?php include "common_dev_memory.php"; ?>
</ul>

<h2>Implementation</h2>
<a href="https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/memory/impl/MemoryW8D16.java" target="_blank">https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/memory/impl/MemoryW8D16.java</a>

<h2>Example configuration</h2>
<pre>
<code>
{
	"name":"RAM",
	"type":"MemoryW8D16",
	"configuration":[
		{"key":"size", "value":14336},
		{"key":"initialization_policy", "value":"ZERO"}
	]
}
</code>
</pre>

<?php include "common_dev_memory_youtube.php"; ?>
