<?php $sys->setTags(["jss_device"]); ?>

<h1>JSS Device ROMW4D4</h1>

<p>This device simulates a Read Only Memory (ROM) with word size 4-bits and data bus connection 4-bits. Internally, data is stored in bytes (two 4-bit words are packed into a byte). When an address is read the memory will return data in the lower 4-bits of the Java long value. When written, only the lower 4-bits will be taken into consideration and stored according to the specified address. This type of memory is useful with 4-bit CPUs, such as the <a href="<?php echo $sys->getLink('content/cpu/intel4004.php');?>">Intel 4004</a>. 
It is similar to the <a href="<?php echo $sys->getLink('dev_MemoryW4D4.php');?>">MemoryW4D4</a> device, but does not allow data to be written under program control. It should be initialized from a HEX or BINARY file.</p>

<h2>Options</h2>
<ul>
<?php include "common_dev_memory.php"; ?>
</ul>

<h2>Implementation</h2>
<a href="https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/memory/impl/ROMW4D4.java" target="_blank">https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/memory/impl/ROMW4D4.java</a>

<?php include "common_dev_memory_youtube.php"; ?>
