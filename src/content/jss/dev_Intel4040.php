<?php $sys->setTags(["jss_device"]); ?>

<h1>JSS Device Intel4040 CPU</h1>

<p>This device simulates an <a href="<?php echo $sys->getLink('content/cpu/intel4040.php');?>">Intel 4040</a> CPU. The real Intel 4040 used different signals for RAM bank specification, ROM selection, and addressing. For simplicity, the simulated CPU combines those signals into a "virtual" address. The source code contains a comment related to this, which is also reproduced here:
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
	
	// Intel 4002 DATA RAM
	// 4 registers x (16 characters x 4-bit + 4 status character x 4-bit)
	// 4 chips per memory bank
	// X2 time D3,D2 = chip select (00,01,10,11) ; D1,D0 = register select
	// X3 time D3,D2,D1,D0 = select character 
	// SRC = CHIP + REGISTER + CHARACTER
	// Data ADDRESS   = MODE_DATA | CM_RAM | 0 (ROM) | 0000 | CHIP | REGISTER | CHARACTER
	// Status ADDRESS = MODE_DATA | CM_RAM | 0 (ROM) | 0001 | CHIP | REGISTER | 00 | CHARACTER
	// Memory for bank 0 = 0x80000 - 0x801F3  (499 locations, some will not be accessed)
</code>
</pre>

<h2>Options</h2>
<ul>
<?php include "common_dev_cpu.php"; ?>
</ul>

<h2>Implementation</h2>
<a href="https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/cpu/impl/Intel4040.java" target="_blank">https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/cpu/impl/Intel4040.java</a>

<h2>Example configuration</h2>
<pre>
<code>
{
	"name":"CPU",
	"type":"Intel4040",
	"configuration":[]
}
</code>
</pre>

<h2>Example simulation</h2>
<a href="https://github.com/ComputingMongoose/Simulations/tree/main/simulations/Intellec_4_mod_40/basic_system_with_monitor" target="_blank">https://github.com/ComputingMongoose/Simulations/tree/main/simulations/Intellec_4_mod_40/basic_system_with_monitor</a>

<?php include "common_dev_cpu_youtube.php"; ?>

<div>

<div style="display:inline-block">
<iframe width="400" height="225" src="https://www.youtube.com/embed/fLxGkAMpb-Q?si=Rv-msWZ7eUXY5Ry5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>

<div style="display:inline-block">
<iframe width="400" height="225" src="https://www.youtube.com/embed/EMf_JF2kE0c?si=69tLb5tbHjGaH35T" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>

</div>
