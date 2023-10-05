<li><b>attachDataDevice</b> - Allows attaching a device that provides data, such as a RAM, ROM, PROM, port-mapped or memory mapped I/O device.
Supported attributes:
<ul>
<li><b>start</b> - Start address as seen by the bus</li>
<li><b>end</b> - End address as seen by the bus</li>
<li><b>offset</b> - This value will be subtracted from the value seen by the bus</li>
<li><b>name</b> - (optional) A name for this connection</li>
<li><b>enabled</b> - (optional) Boolean value indicating if this connection is enabled. This option can be toggled by a control device, if present, based on the connection name.</li>
</ul>

<p>Example:</p>
<pre>
<code>
	{"type":"attachDataDevice", "src":"MemoryBUS", "dev":"ROM", "start":59392,"end":61439,"offset":59392, "name":"bootrom", "enabled":true},
</code>
</pre>

<p>This example attaches a device called "ROM" (presumably a ROM device) starting at address 59392 (E800h) until address 61439 (EFFFh) with an offset of 59392. This means that devices accessing any address between E800h - EFFFh on this bus will connect to the ROM. Also, the ROM has addresses between 0-7FFh. The mapping between the two address spaces is performed by means of the "offset", which is subtracted from the specified address.</p>

</li>
