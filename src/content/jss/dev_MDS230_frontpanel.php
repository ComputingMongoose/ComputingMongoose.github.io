<?php $sys->setTags(["jss_device"]); ?>

<h1>JSS Device MDS230_frontpanel</h1>

<p>This device simulates the front panel of an Intellec Series II Model 230 system, with an <a href="<?php echo $sys->getLink('content/jss/dev_Intel8080.php');?>">Intel 8080</a> CPU.
</p>

<h2>Device Connections</h2>
<ul>
<?php include "common_dev_dataaccess_conn.php"; ?>
<?php include "common_dev_controldevice_conn.php"; ?>
<?php include "common_dev_connectionbus_conn.php"; ?>
</ul>


<h2>Implementation</h2>
<a href="https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/peripherals/MDS230_frontpanel.java" target="_blank">https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/peripherals/MDS230_frontpanel.java</a>

<h2>Example configuration</h2>
<pre>
<code>
{
	"name":"FrontPanel",
	"type":"MDS230_frontpanel",
	"configuration":[]
}
</code>
</pre>

<h2>Example simulation</h2>
<a href="https://github.com/ComputingMongoose/Simulations/tree/main/simulations/Intellec_8_mod_80/cpm22" target="_blank">https://github.com/ComputingMongoose/Simulations/tree/main/simulations/Intellec_8_mod_80/cpm22</a>

