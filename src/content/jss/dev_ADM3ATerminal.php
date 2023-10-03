<?php $sys->setTags(["jss_device"]); ?>

<h1>JSS Device ADM3ATerminal</h1>

<p>This device simulates an <a href="<?php echo $sys->getLink('content/serial/adm3a.php');?>">ADM-3A serial terminal</a> (with keyboard and display). The terminal simulation supports control sequences. Due to the large number of optional features and configuration options, not all the possible settings from a real terminal are available in the simulation.
</p>

<h2>Options</h2>
<ul>
<?php include "common_dev_serial.php"; ?>
<li><b>space_adv</b> - if set to 1, space will only advance the cursor without being recorded as a character (existing characters will not be overwritten). Default value is 0.</li>
<li><b>clr_scrn</b> - if set to 1, enables clear screen control sequences. Default value is 1.</li>
<li><b>enable_kb_lock</b> - if set to 1, enables locking/unlocking the keyboard with control sequences. Default value is 1. If you keep this value set, you should make sure the software has a way of unlocking the keyboard, otherwise the simulation may become unusable, requiring a restart. In some systems, you need a second terminal to be connected in order to be able to activate the unlock on the first terminal.</li>
<li><b>cur_ctl</b> - if set to 0, certain cursor control operations are disabled. This particularly include operations that would move the cursor to an upper line. This is particularly useful if simulating devices such as teletypes that does not allow complete cursor control. Default value is 1.</li>
<li><b>lc_characters</b> - if set to 1 will enable lowercase characters to be sent. Default value is 0.</li>
<li><b>num_lines</b> - number of text lines. Default value is 24.</li>
</ul>

<h2>Implementation</h2>
<a href="https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/peripherals/ADM3ATerminal.java" target="_blank">https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/peripherals/ADM3ATerminal.java</a>

<h2>Example configuration</h2>
<pre>
<code>
{

	"name":"ADM3A",
	"type":"ADM3ATerminal",
	"configuration":[
		{"key":"uart","value":0},
		{"key":"transmit_bit_number","value":7},
		{"key":"receive_bit_number","value":0},
		{"key":"bit_send_complement","value":0},
		{"key":"bit_transmit_empty","value":1},
		{"key":"receive_ignore_bit_7","value":1},
		{"key":"transmit_set_bit_7","value":0},
		{"key":"map_codes_from","value":"3,0D,0A,20,21,22,23,24,25,26,27,28,29,2A,2B,2C,2D,2E,2F,30,31,32,33,34,35,36,37,38,39,3A,3B,3C,3D,3E,3F,40,5B,5C,5D,5E,5F,60,7F"},
		{"key":"map_codes_to",  "value":"83,8D,8A,A0,A1,A2,A3,A4,A5,A6,A7,A8,A9,AA,AB,AC,AD,AE,AF,B0,B1,B2,B3,B4,B5,B6,B7,B8,B9,BA,BB,BC,BD,BE,BF,C0,CB,CC,CD,CE,CF,D0,FF"}
	]
}
</code>
</pre>

<!--
<h2>Example simulation</h2>
<a href="https://github.com/ComputingMongoose/Simulations/tree/main/simulations/Intellec_8_mod_80/cpm22" target="_blank">https://github.com/ComputingMongoose/Simulations/tree/main/simulations/Intellec_8_mod_80/cpm22</a>
-->
