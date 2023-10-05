<?php $sys->setTags(["jss_device"]); ?>

<h1>JSS Device Intellec_8_80_frontpanel</h1>

<p>This device simulates the front panel of an Intellec 8 MOD 80 system, with an <a href="<?php echo $sys->getLink('content/jss/dev_Intel8080.php');?>">Intel 8080</a> CPU.
</p>

<h2>Device Connections</h2>
<ul>
<?php include "common_dev_dataaccess_conn.php"; ?>
<?php include "common_dev_controldevice_conn.php"; ?>
<?php include "common_dev_connectionbus_conn.php"; ?>
</ul>


<h2>Implementation</h2>
<a href="https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/peripherals/Intellec_8_80_frontpanel.java" target="_blank">https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/peripherals/Intellec_8_80_frontpanel.java</a>

<h2>Example configuration</h2>
<pre>
<code>
{
	"name":"FrontPanel",
	"type":"Intellec_8_80_frontpanel",
	"configuration":[]
}
</code>
</pre>

