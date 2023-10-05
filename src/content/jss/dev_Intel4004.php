<?php $sys->setTags(["jss_device"]); ?>

<h1>JSS Device Intel4004 CPU</h1>

<p>This device simulates an <a href="<?php echo $sys->getLink('content/cpu/intel4004.php');?>">Intel 4004</a> CPU. The real Intel 4004 used different signals for RAM bank specification, ROM selection, and addressing. For simplicity, the simulated CPU combines those signals into a "virtual" address. The source code contains a comment related to this, which is also reproduced here:
</p>

<pre>
<code>
	// address
	//    4-bit MODE | 3-bit RAM | 1-bit ROM | 12-bit address => total 20-bit
	//    MODE: 0x8=DATA | 0x4=PROM | 0x2=RAM | 0x1=ROM
	//
	// ROM bank 0 = 0x10000
	// ROM bank 1 = 0x11000
	//
	// RAM bank 0 = 0x20000
	// RAM bank 1 = 0x21000
	//
	// PROM bank 0 = 0x40000
	// PROM bank 1 = 0x41000
	//
	// DATA bank 0 = 0x80000
	// DATA bank 1 = 0x82000
	// DATA bank 2 = 0x84000
	// DATA bank 3 = 0x88000
	// DATA bank 4 = 0x86000
	// DATA bank 5 = 0x8A000
	// DATA bank 6 = 0x8C000
	// DATA bank 7 = 0x8E000
	
	// ROM I/O = 0x10000 | SRC
	//      0x10000, 0x10010, 0x10020, 0x10030
	//      0x100E0 => enable/disable RAM write
	// DATA bank 0 /O = 0x80000 | SRC
	//		0x80000, 0x80010, 0x80020, 0x80030
	// DATA bank 1 /O = 0x82000 | SRC
	// DATA bank 2 /O = 0x84000 | SRC
	// DATA bank 3 /O = 0x88000 | SRC
	// DATA bank 4 /O = 0x86000 | SRC
	// DATA bank 5 /O = 0x8A000 | SRC
	// DATA bank 6 /O = 0x8C000 | SRC
	// DATA bank 7 /O = 0x8E000 | SRC
	// ROM 0  = 0x10000 | SRC
	// ROM 1  = 0x10010 not connected
	// ROM 2  = 0x10020 | SRC
	// ROM 3  = 0x10030 | SRC
</code>
</pre>

<h2>Options</h2>
<ul>
<?php include "common_dev_cpu.php"; ?>
</ul>

<h2>Device Connections</h2>
<ul>
<?php include "common_dev_dataaccess_conn.php"; ?>
<?php include "common_dev_controldevice_conn.php"; ?>
</ul>


<h2>Implementation</h2>
<a href="https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/cpu/impl/Intel4004.java" target="_blank">https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/cpu/impl/Intel4004.java</a>

<h2>Example configuration</h2>
<pre>
<code>
{
	"name":"CPU",
	"type":"Intel4004",
	"configuration":[]
}
</code>
</pre>

<h2>Example simulation</h2>
<a href="https://github.com/ComputingMongoose/Simulations/tree/main/simulations/Intellec_4/basic_system_with_monitor" target="_blank">https://github.com/ComputingMongoose/Simulations/tree/main/simulations/Intellec_4/basic_system_with_monitor</a>

<?php include "common_dev_cpu_youtube.php"; ?>

<div>

<div style="display:inline-block">
<iframe width="400" height="225" src="https://www.youtube.com/embed/VSi-IdIyEGI?si=Hi0zpHHMYW9Ctb9K" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>

<div style="display:inline-block">
<iframe width="400" height="225" src="https://www.youtube.com/embed/k5vZ6gBcbrg?si=Sj_aEENCEulIFJnR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>

</div>
