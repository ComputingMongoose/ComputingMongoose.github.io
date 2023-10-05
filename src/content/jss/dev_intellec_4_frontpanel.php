<?php $sys->setTags(["jss_device"]); ?>

<h1>JSS Device Intellec_4_frontpanel</h1>

<p>This device simulates the front panel of an Intellec 4 system, with an <a href="<?php echo $sys->getLink('content/jss/dev_Intel4004.php');?>">Intel 4004</a> CPU.
</p>

<h2>Device Connections</h2>
<ul>
<?php include "common_dev_dataaccess_conn.php"; ?>
<?php include "common_dev_controldevice_conn.php"; ?>
<?php include "common_dev_connectionbus_conn.php"; ?>
</ul>


<h2>Implementation</h2>
<a href="https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/peripherals/Intellec_4_frontpanel.java" target="_blank">https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/peripherals/Intellec_4_frontpanel.java</a>

<h2>Example configuration</h2>
<pre>
<code>
{
	"name":"FrontPanel",
	"type":"Intellec_4_frontpanel",
	"configuration":[]
}
</code>
</pre>

<h2>Example simulation</h2>
<a href="https://github.com/ComputingMongoose/Simulations/tree/main/simulations/Intellec_4/basic_system_with_monitor" target="_blank">https://github.com/ComputingMongoose/Simulations/tree/main/simulations/Intellec_4/basic_system_with_monitor</a>


<h2>Youtube</h2>
<div>

<div style="display:inline-block">
<iframe width="400" height="225" src="https://www.youtube.com/embed/EdVN3QWorog?si=VfPnyzBMb7cdhZTp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>

<div style="display:inline-block">
<iframe width="400" height="225" src="https://www.youtube.com/embed/tiV3skx6IW4?si=krCBurVapxBVSFDx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>

</div>
