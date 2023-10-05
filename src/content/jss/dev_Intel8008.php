<?php $sys->setTags(["jss_device"]); ?>

<h1>JSS Device Intel8008 CPU</h1>

<p>This device simulates an <a href="<?php echo $sys->getLink('content/cpu/intel8008.php');?>">Intel 8008</a> CPU. 
The real CPU has an interrupt signal. When this is asserted, an instruction can be forced onto the data bus to be executed by the CPU (for example a jump to an interrupt handling routine). The simulated CPU employs for this purpose the data associated with a signal on the simulated Control BUS (see the <a href="<?php echo $sys->getLink('dev_ControlBusBasic.php');?>">ControlBusBasic</a> for example).
</p>


<h2>Options</h2>
<ul>
<?php include "common_dev_cpu.php"; ?>
</ul>

<h2>Device Connections</h2>
<ul>
<?php include "common_dev_dataaccess_conn.php"; ?>
<?php include "common_dev_controldevice_conn.php"; ?>
</ul>


<h2>Control BUS signals</h2>
<ul>
<li><b>INT</b> - If set to "1", indicates an interrupt. Data associated with this signal is used as the next instruction to be executed.</li>
</ul>

<h2>Implementation</h2>
<a href="https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/cpu/impl/Intel8008.java" target="_blank">https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/cpu/impl/Intel8008.java</a>


<h2>Example configuration</h2>
<pre>
<code>
{
	"name":"CPU",
	"type":"Intel8008",
	"configuration":[]
}
</code>
</pre>

<h2>Example simulation</h2>
<a href="https://github.com/ComputingMongoose/Simulations/tree/main/simulations/Intellec_8/system_with_teletype" target="_blank">https://github.com/ComputingMongoose/Simulations/tree/main/simulations/Intellec_8/system_with_teletype</a>

<?php include "common_dev_cpu_youtube.php"; ?>

<div>

<div style="display:inline-block">
<iframe width="400" height="225" src="https://www.youtube.com/embed/H6AOyiNJLBc?si=V93xK0xWA4F1GRuD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>

<div style="display:inline-block">
<iframe width="400" height="225" src="https://www.youtube.com/embed/hlS-Ccoj8w4?si=_mM_AeqQWQ9UBdpX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>

</div>
