<?php $sys->setTags(["jss_device"]); ?>

<h1>JSS Device Intel8080 CPU</h1>

<p>This device simulates an <a href="<?php echo $sys->getLink('content/cpu/intel8080.php');?>">Intel 8080</a> CPU. 
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


<h2>Implementation</h2>
<a href="https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/cpu/impl/Intel8080.java" target="_blank">https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/cpu/impl/Intel8080.java</a>

<h2>Example configuration</h2>
<pre>
<code>
{
	"name":"CPU",
	"type":"Intel8080",
	"configuration":[]
}
</code>
</pre>

<h2>Example simulation</h2>
<a href="https://github.com/ComputingMongoose/Simulations/tree/main/simulations/Intellec_8_mod_80/cpm22" target="_blank">https://github.com/ComputingMongoose/Simulations/tree/main/simulations/Intellec_8_mod_80/cpm22</a>

<?php include "common_dev_cpu_youtube.php"; ?>

<div>

<div style="display:inline-block">

</div>

<div style="display:inline-block">

</div>

</div>
