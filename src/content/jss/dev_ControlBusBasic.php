<?php $sys->setTags(["jss_device"]); ?>

<h1>JSS Device ControlBusBasic</h1>

<p>
This device simulates a basic control BUS. It allows setting different signals on the BUS, by name. Data can be associated with the signals, if needed.
In certain old architectures, an interrupt signal would require having the jump address present on the data bus as well. This can be simulated using the data associated with the interrupt signal. This is the case with the <a href="<? $sys->getLink('dev_Intel8008.php');?>">Simulated Intel 8008 CPU</a>. In a real <a href="<?php echo $sys->getLink('content/cpu/intel8008.php');?>">Intel 8008</a>, when an interrupt signal is received, an instruction is forced on the data bus, usually indicating a jump to the interrupt servicing routine. In the simulated implementation, the instruction to be executed is placed in the data associated with the interrupt signal on the control BUS. Other CPUs may not use the associated data with signals, having interrupt handling routines at fixed addresses.
</p>

<h2>Options</h2>
<ul>
<li><b>signals</b> - Comma separated list of signal names that may be sent accross this BUS.</li>
</ul>

<h2>Implementation</h2>
<a href="https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/bus/impl/ControlBusBasic.java" target="_blank">https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/bus/impl/ControlBusBasic.java</a>

<h2>Example configuration</h2>
<pre>
<code>
{
	"name":"ControlBUS",
	"type":"ControlBusBasic",
	"configuration":[
		{"key":"signals", "value":"INT,S0,S1,S2"}
	]
}
</code>
</pre>

<h2>Example simulation</h2>
<a href="https://github.com/ComputingMongoose/Simulations/blob/main/simulations/Intellec_8_mod_80/cpm22/simulation.json" target="_blank">https://github.com/ComputingMongoose/Simulations/blob/main/simulations/Intellec_8_mod_80/cpm22/simulation.json</a>

<?php include "common_dev_bus_youtube.php"; ?>
