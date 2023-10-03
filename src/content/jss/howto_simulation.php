<?php $sys->setTags(["jss"]); ?>

<h1>How to create a simulation ?</h1>

<p>A simulation for the <a href="<?php echo $sys->getLink('content/jss/about.php'); ?>">Java System Simulator</a> is a folder containing at least a file called <i>simulation.json</i>. This file describes the simulated computer architecture. In addition, the same folder may contain supporting files, such as floppy disk images, hard disk images, paper tape files.
</p>

<h2>Structure of the <i>simulation.json</i> file</h2>
<p>The <i>simulation.json</i> file is a regular JSON file. It contains three elements:
<ul>
<li>the devices (cpu, memory, disk controllers, etc.) that form the simulated architecture, with their individual configuration options (including any disk images, preloaded ROMs, etc.);</li>
<li>connections between the devices (memory mappings, I/O port mappings, control bus connections, etc.);</li>
<li>simulation options (name, simulation speed, maximum simulation steps, etc.).</li>
</ul>
</p>

<h2>Devices</h2>
<p>Devices are defined in the <i>simulation.json</i> file, inside an array of objects, with the key "devices". Each device object must have at least a "name", a "type", and a "configuration" field. The "type" field must clearly identify a valid JSS device. The "configuration" field is an array of configuration options, specific to the device. Device types and specific configuration options are available under <a href="<?php $sys->getLink('content/jss/devices.php');?>">JSS Devices</a>. Configuration options that keep their default values may remain unspecified.
</p>
<p>Example (this is only a fraction of a real <i>simulation.json</i> file; complete simulations are available <a href="https://github.com/ComputingMongoose/Simulations" target="_blank">here</a>) :</p>
<pre>
<code>
{
	......
	"devices": [
		{
			"name":"ASR33",
			"type":"ASR33Teletype",
			"configuration":[
				{"key":"tape_in", "value":"write_tty.hex"}
			]
		},
		......
	],
	......
}
</code>
</pre>

<h2>Device connections</h2>
<p>Device connections are defined in the <i>simulation.json</i> file, inside an array of objects, with the key "connections". Each connection object must have at least a "type", a "src", and a "dev" field. The "type" field clearly identifies the connection type. The "src" field identifies the device to which the "dev" device is attached. From a programming perspective, internally the system will invoke the "type" method on the "src" object with the additional fields as parameters. 
</p>

<p>Example (this is only a fraction of a real <i>simulation.json</i> file; complete simulations are available <a href="https://github.com/ComputingMongoose/Simulations" target="_blank">here</a>) :</p>
<pre>
<code>
{
	......
	"connections": [
		{"type":"attachDataDevice", "src":"MemoryBUS", "dev":"ROM", "start":59392,"end":61439,"offset":59392, "name":"bootrom", "enabled":true},
		{"type":"attachDataDevice", "src":"MemoryBUS", "dev":"ROM", "start":63488,"end":65535,"offset":59392, "name":"MonitorROM"},
		{"type":"attachToDataBus", "src":"CPU", "dev":"MemoryBUS"},
		......
	],
	......
}
</code>
</pre>

<h2>Simulation options</h2>
<p>Simulation options are defined in the <i>simulation.json</i> file as top level fields. Available options are:
<ul>
<li><b>name</b> - the simulation name;</li>
<li><b>maximum_steps</b> - specifies a number of steps after which the simulation will become automatically suspended. Default value is 0, disabling the automatic suspend;</li>
<li><b>delay_between_steps_ms</b>, <b>delay_between_steps_ns</b> - non-zero values will introduce a delay between simulation steps. This allows reducing the simulation speed and is useful to make it seem like real hardware, slower than the host machine;</li>
<li><b>onCPUInvalidOpcodeException</b> - specifies the system behaviour when an invalid CPU opcode is encountered. A value of "CONTINUE" will let the simulation continue, while a value of "SUSPEND" will automatically suspend the simulation.</li>
</ul>

<p>Example (this is only a fraction of a real <i>simulation.json</i> file; complete simulations are available <a href="https://github.com/ComputingMongoose/Simulations" target="_blank">here</a>) :</p>
<pre>
<code>
{
	"name":"MDS 80 booting CP/M 2.2",
	"maximum_steps":0,
	"delay_between_steps_ms":0,
	"delay_between_steps_ns":5000,
	"onCPUInvalidOpcodeException":"SUSPEND",

	"devices": [
		......
	],

	"connections": [
		......
	]
}
</code>
</pre>

<h2>Hints</h2>
<ul>
<li>Devices are initialized (including window creation) in the order they are written in the <i>simulation.json</i> file. If you want a certain device window to be on top when starting the simulation, place that device last in the "devices" object.</li>
<li>Most numerical values in the <i>simulation.json</i> file can be expressed in decimal, hexadecimal, octal or binary. Decimal numbers should be written without quotes. Hexadecimal numbers may start with 0x, 0h, $0, or h and may end with h (examples: 0x3f0, 3f0h). Octal numbers may start with 0q, 0o, q, or o and may end with q or o (examples: 0q100, 100q). Binary numbers may start with 0b or 0y and may end with b or y (examples: 0b0011, 1101b).</li>
<li>If there is an error while reading the <i>simulation.json</i> an exception will be thrown in the console. The simulation may remain in an undefined state (most likely not running).</li>
</ul>

<h2>Run the simulation</h2>
<p>After creating a simulation, you should run it. If you don't know how, a short guide is available <a href="<?php echo $sys->getLink('content/jss/howto_run_simulation.php'); ?>">here</a>.</p>
