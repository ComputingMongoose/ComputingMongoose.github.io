<li><b>initialization_policy</b> - Decides how this memory is initialized. Values:
	<ul>
	<li>ZERO - All locations are initialized with zero.</li>
	<li>RANDOM - Locations are initialized with random values.</li>
	<li>FIXED - Locations are initialized with a fixed value, set by the "fixed_value" option.</li>
	<li>VALUES - Individual values are specified in the "initialization_values" option.</li>
	</ul>
</li>
<li><b>fixed_value</b> - Value used to initialize memory when the "initialization_policy" is set to "FIXED".</li>
<li><b>initialization_values</b> - List of values used to initialize the memory, separated by space or comma. Only the number of values present in the list are used (some memory locations may remain uninitialized if the list has less values than the memory size).</li>
<li><b>load_hex</b> - Specifies a HEX file that will be read in the memory.</li>
<li><b>load_hex_offset</b> - This value is subtracted from the address specified in the HEX file.</li>
<li><b>load_bin</b> - Specifies a BINARY file that will be read in the memory.</li>
<li><b>load_bin_offset</b> - Specifies the starting address for the BINARY file. Its use differs from the HEX file, since the BINARY file does not have any address specified internally.</li>
<li><b>invert_nibbles</b> - When loading either a HEX file or a BINARY file, it will invert the nibbles. This may be useful with 4-bit memory if the values were stored in the HEX file in reverse order.</li>
