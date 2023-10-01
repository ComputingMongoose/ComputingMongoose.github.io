<?php $sys->setTags(["jss_device"]); ?>

<h1>JSS Device GenericTerminal</h1>

<p>This device simulates a generic serial terminal (with keyboard and display). The terminal supports control sequences, but currently only regular characters (no bold, underline, inverse, color, etc.). For details on terminal control sequences see: <a href="https://www.real-world-systems.com/docs/ANSIcode.html" target="_blank">https://www.real-world-systems.com/docs/ANSIcode.html</a>, <a href="https://nvlpubs.nist.gov/nistpubs/Legacy/FIPS/fipspub86.pdf" target="_blank">https://nvlpubs.nist.gov/nistpubs/Legacy/FIPS/fipspub86.pdf</a>, <a href="https://vt100.net/docs/vt100-ug/chapter3.html" target="_blank">https://vt100.net/docs/vt100-ug/chapter3.html</a>. Certain functions and control characters can be disabled by using different options (see below). </p>
<p>This device allows for data files to be sent or recorded. When recording is enabled, the data file will contain all the control sequences sent by the host system.</p>

<h2>Options</h2>
<ul>
<?php include "common_dev_serial.php"; ?>
<li><b>space_adv</b> - if set to 1, space will only advance the cursor without being recorded as a character (existing characters will not be overwritten). Default value is 0.</li>
<li><b>clr_scrn</b> - if set to 1, enables clear screen control sequences. Default value is 1.</li>
<li><b>enable_kb_lock</b> - if set to 1, enables locking/unlocking the keyboard with control sequences. Default value is 1. If you keep this value set, you should make sure the software has a way of unlocking the keyboard, otherwise the simulation may become unusable, requiring a restart. In some systems, you need a second terminal to be connected in order to be able to activate the unlock on the first terminal.</li>
<li><b>cur_ctl</b> - if set to 0, certain cursor control operations are disabled. This particularly include operations that would move the cursor to an upper line. This is particularly useful if simulating devices such as teletypes that does not allow complete cursor control. Default value is 1.</li>
<li><b>enable_ansi</b> - if set to 1 will enable ANSI control sequences (starting with an &lt;ESCAPE&gt; character). Default value is 0.</li>
<li><b>num_lines</b> - number of text lines. Default value is 24.</li>
</ul>

<h2>Implementation</h2>
<a href="https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/peripherals/GenericTerminal.java" target="_blank">https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/peripherals/GenericTerminal.java</a>

<h2>Example configuration</h2>
<pre>
<code>
{
	"name":"Terminal",
	"type":"GenericTerminal",
	"configuration":[
		{"key":"num_lines","value":25},
		{"key":"uart","value":1},
		{"key":"uart_receive_complement","value":0},
		{"key":"uart_send_complement","value":0},
		{"key":"uart_status_data_send_ready_bit","value":1},
		{"key":"enable_ansi","value":1},
		{"key":"enable_kb_lock","value":0}
	]
}
</code>
</pre>

<h2>Example simulation</h2>
<a href="https://github.com/ComputingMongoose/Simulations/tree/main/simulations/Intellec_8_mod_80/cpm22" target="_blank">https://github.com/ComputingMongoose/Simulations/tree/main/simulations/Intellec_8_mod_80/cpm22</a>

