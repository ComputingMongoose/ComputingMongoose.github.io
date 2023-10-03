<?php $sys->setTags(["serial","adm3a"]); ?>

<h1>ADM-3A Terminal</h1>

<p>The Lear Siegler company introduced the ADM-3 terminal in 1975. The next year, in 1976, the ADM-3A interactive display terminal was introduced, with support for cursor control codes. These were not as advanced as those present in later terminals, but allowed simple cursor positioning from software. The terminal was connected via a serial port to the host computer.
</p>


<div>
<div style="display:inline-block">

<a title="Chris Jacobs, CC BY-SA 3.0 &lt;https://creativecommons.org/licenses/by-sa/3.0&gt;, via Wikimedia Commons" href="https://commons.wikimedia.org/wiki/File:Adm3aimage.jpg" target="_blank"><img height="340" alt="Adm3aimage" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Adm3aimage.jpg/512px-Adm3aimage.jpg"></a>

</div>

<div style="display:inline-block">

<a title="Daniel Sancho from Málaga, Spain, CC BY 2.0 &lt;https://creativecommons.org/licenses/by/2.0&gt;, via Wikimedia Commons" href="https://commons.wikimedia.org/wiki/File:ADM_3A_(82481457).jpg" target="_blank"><img height="340" alt="ADM 3A (82481457)" src="https://upload.wikimedia.org/wikipedia/commons/1/1b/ADM_3A_%2882481457%29.jpg"></a>

</div>
</div>

<h2>Main Characteristics</h2>
<ul>
<li>12 lines of 80 characters (can be increased to 24 lines)</li>
<li>Memory for 960 characters (can be increased to 1920 characters)</li>
<li>Generates 128 ASCII characters (with 32 control characters)</li>
<li>Displays 64 distinct ASCII characters (can be increased to 96 ASCII characters)</li>
<li>Character size: 5x7 dot matrix</li>
<li>11 communication rates (allows for a maximum of 1920 characters/s)</li>
<li>Communication format: 10-bit word (START bit+7 data bits+odd/even parity+STOP bit; START bit+8 data bits+STOP bit); 11-bit word (START bit+7 data bits+odd/even parity+2 STOP bits; START bit+8 data bits+odd/even parity+STOP bit)</li>
<li>Communication modes: half-duplex (data is sent to the computer and locally echoed); full-duplex (data is sent to the computer and the computer must echo the data back for display)</li>
<li>Downline scrolling or bottom line entry</li>
<li>Selectable communication option: RS-232C or current loop interface</li>
<li>Keyboard with 59 keys</li>
<li>Screen diagonal: 12 inches (30.5 cm)</li>
<li>Configuration control: 20 front-panel switches and 13 switches on the main PCBA</li>
</ul>

<h2>Optional features</h2>
<ul>
<li>24 lines</li>
<li>Lower case characters (provides the capability of displaying, generating and transmitting of lower case characters)</li>
<li>Answer back (activated by the HERE IS key, transmits an identification message, stored in a special ROM, to identify the terminal)</li>
<li>Numeric key pad</li>
<li>Display test (provides a toggle switch on the main PCBA which may be used to test the CRT display</li>
<li>Extension port current loop</li>
<li>Split baud rate (transmit at one baud rate and receive at another)</li>
<li>BEEP defeat (adds a switch for enabling or disabling the BEEP signal)</li>
<li>230V AC, European</li>
<li>230V AC, Australian</li>
</ul>


<h2>Java System Simulator</h2>
<ul>
<li>ADM-3A terminal simulation implementation in Java <a href="https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/peripherals/ADM3ATerminal.java" target="_blank">here</a></li>
<li>Details about the ADM3ATerminal virtual device <a href="<?php echo $sys->getLink('content/jss/dev_ADM3ATerminal.php'); ?>">here</a></li>
</ul>


<h2>Useful resources</h2>
<ul>
<li><a href="https://vt100.net/lsi/adm3a-om.pdf" target="_blank">ADM3A Operator's manual</a></li>
<li><a href="https://en.wikipedia.org/wiki/ADM-3A" target="_blank">https://en.wikipedia.org/wiki/ADM-3A</a></li>
</ul>

<h2>Images</h2>
<a data-pin-do="embedBoard" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/computingm/terminal-adm-3/"></a>
