<?php $sys->setTags(["jss_device"]); ?>

<h1>JSS Device DataBusNoError</h1>

<p>
This device simulates a basic data BUS. It sends data between different devices. Depending on the devices attached, it can be used as a memory BUS or an I/O BUS.
</p>

<h2>Options</h2>
<ul>
<li><b>log_misses</b> - Will record in the log file attempts to access (read or write) addresses for which there are no devices attached. This is particularly useful when developing new devices or running an unknown software.</li>
<li><b>suspend_on_access</b> - Comma separated list of addresses. Accessing one of these addresses will cause the simulation to become suspended (similar to a CPU breakpoint). Useful for debugging programs.</li>
</ul>

<h2>Implementation</h2>
<a href="https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/bus/impl/DataBusNoError.java" target="_blank">https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/bus/impl/DataBusNoError.java</a>

<h2>Example configuration</h2>
<pre>
<code>
{
	"name":"MemoryBUS",
	"type":"DataBusNoError",
	"configuration":[
		{"key":"log_misses","value":1}
	]
}
</code>
</pre>

<h2>Example simulation</h2>
<a href="https://github.com/ComputingMongoose/Simulations/blob/main/simulations/Intellec_8_mod_80/cpm22/simulation.json" target="_blank">https://github.com/ComputingMongoose/Simulations/blob/main/simulations/Intellec_8_mod_80/cpm22/simulation.json</a>

<?php include "common_dev_bus_youtube.php"; ?>
