<?php $sys->setTags(["jss_device"]); ?>

<h1>JSS Device PROMW8D16</h1>

<p>This device simulates a Programmable Read Only Memory (PROM) with word size 8-bits and data bus connection 16-bits. This type of memory can be used in 16-bit architectures, when specifying a memory address will read/write 2 bytes. Internally, data is stored as bytes. Since the word size is 8, an address specifies a byte location. The data is formed by using the specified address as the lower byte in the result.
It is similar to the <a href="<?php echo $sys->getLink('dev_MemoryW8D16.php');?>">MemoryW8D16</a> device. To use the PROM functionality, it must be attached to a PROM Controller, such as <a href="<?php echo $sys->getLink('dev_PROMControllerBasic.php'); ?>">PROMControllerBasic</a>.</p>

<h2>Options</h2>
<ul>
<?php include "common_dev_memory.php"; ?>
</ul>

<h2>Device Connections</h2>
<ul>
<?php include "common_dev_prom_conn.php"; ?>
</ul>

<h2>Implementation</h2>
<a href="https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/memory/impl/PROMW8D16.java" target="_blank">https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/memory/impl/PROMW8D16.java</a>


<?php include "common_dev_memory_youtube.php"; ?>
