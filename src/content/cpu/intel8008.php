<?php $sys->setTags(["cpu","intel8008"]); ?>

<h1>Intel 8008</h1>

<p>The Intel 8008 was introduced in 1972. It was designed by the Computer Terminal Corporation (CTC), implemented and manufactured by Intel. Even though the 8008 was launched on year after the <a href="<?php echo $sys->getLink("intel4004.php");?>">Intel 4004</a> and having a similar naming, the 8008 is not based on the 4004 design. There were two assembly language instruction sets published for the Intel 8008. The first instruction set was introduced in 1972. The second instruction set was introduced a few years later, in order to make it look more similar to the 8080 instruction set. The newer mnemonics resemble a primitive version of the modern x86 instruction set. The difference is only in the assembly language instructions, the resulting machine code is the same.
</p>

<div>
<div style="display:inline-block">

<a href="../img/intel_8008_pinout.jpg" target="_blank"><img width="300" alt="Intel 8008 processor pinout" src="../img/intel_8008_pinout.jpg"></a>

</div>

<div style="display:inline-block">

<a title="Appaloosa, CC BY-SA 3.0 &lt;https://creativecommons.org/licenses/by-sa/3.0&gt;, via Wikimedia Commons" href="https://commons.wikimedia.org/wiki/File:Intel_8008_arch.svg" target="_blank"><img width="400" alt="Intel 8008 arch" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Intel_8008_arch.svg/512px-Intel_8008_arch.svg.png"></a>

</div>
</div>

<h2>Main Characteristics</h2>
<ul>
<li>8 pins for Data, Address, Instructions, and I/O (D0,...,D8)</li>
<li>14-bit addresses, 8-bit data (sent over multiple clock cycles on the 8 data pins)</li>
<li>Interrupt signal</li>
<li>Maximum clock rate 800KHz</li>
<li>From the CPU Datasheet: "Directly addresses 16K x 8-bits of memory (RAM, ROM, or S.R.); Memory capacity can be indefinitely expanded through bank switching using I/O instructions."</li>
<li>6x 8-bit registers, 1x 8-bit accumulator, address stack (PC+7 levels)</li>
<li>48 instructions</li>
</ul>

<p>If the interrupt line is enabled (Logic "1"), the CPU recognizes an interrupt request at the next instruction fetch cycle. The lower and higher order address bytes of the program counter are sent out, but the program counter is not advanced. A successive instruction fetch cycle can be used to insert an arbitrary instruction into the instruction register in the CPU. (If a multi-cycle or multibyte instruction is inserted, an interrupt need only be inserted for the first cycle.)</p>

<iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?si=iAs6Vd36TSTs12V-&amp;list=PL7-u-wmV6bWp6Uuj6ywNMvMXzP2t6F9yG&autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


<h2>Java System Simulator</h2>
<ul>
<li>Intel 8008 CPU simulation implementation in Java <a href="https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/cpu/impl/Intel8008.java" target="_blank">here</a></li>
<li>Intellec 8 system simulations <a href="https://github.com/ComputingMongoose/Simulations/tree/main/simulations/Intellec_8" target="_blank">here</a></li>
<li>Details about the Intel8008 virtual device <a href="<?php echo $sys->getLink('content/jss/dev_Intel8008.php'); ?>">here</a></li>
</ul>

<h2>Tools</h2>
<ul>
<li>Macroassembler AS <a href="http://john.ccac.rwth-aachen.de:8000/as/index.html" target="_blank">Home</a> | <a href="http://john.ccac.rwth-aachen.de:8000/as/as_EN.html" target="_blank">Manual</a></li>
<li>Information, Source code, Excel with instructions, "Clock" project <a href="https://www.8008chron.com/" target="_blank">https://www.8008chron.com/</a></li>
</ul>

<h2>Useful resources</h2>
<ul>
<li><a href="http://datasheets.chipdb.org/upload/wepwawet/8008_(1978)%20Datasheet.pdf" target="_blank">Intel 8008 Datasheet</a></li>
<li><a href="http://www.bitsavers.org/components/intel/MCS8/Intel_8008_8-Bit_Parallel_Central_Processing_Unit_Rev1_Apr72.pdf " target="_blank">MCS-8 Micro Computer Set 8008 8-bit Parallel Central Processing Unit</a></li>
<li><a href="https://en.wikipedia.org/wiki/Intel_8008" target="_blank">https://en.wikipedia.org/wiki/Intel_8008</a></li>
</ul>

<h2>Images</h2>
<a data-pin-do="embedBoard" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/computingm/intel-8008/"></a>

