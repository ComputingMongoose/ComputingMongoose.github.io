<?php $sys->setTags(["jss_device"]); ?>

<h1>JSS Device PROMControllerBasic</h1>

<p>This device controls write access to a Programmable Read Only Memory (PROM) module. A PROM module can always be read, but writing is allowed only if the controller is first notified.</p>

<h2>Options</h2>
<ul>
<li><b>write_enable</b> - Default setting for the write_enable flag.
</ul>

<h2>Implementation</h2>
<a href="https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/memory/impl/PROMControllerBasic.java" target="_blank">https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/memory/impl/PROMControllerBasic.java</a>

<h2>Example configuration</h2>
<pre>
<code>
{
	"name":"ProgramRAMController",
	"type":"PROMControllerBasic",
	"configuration":[
		{"key":"write_enable", "value":0}
	]
}
</code>
</pre>

<h2>Example simulation</h2>
<a href="https://github.com/ComputingMongoose/Simulations/tree/main/simulations/Intellec_4/basic_system_with_monitor" target="_blank">https://github.com/ComputingMongoose/Simulations/tree/main/simulations/Intellec_4/basic_system_with_monitor</a>
