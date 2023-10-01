<?php $sys->setTags(["cpu","intel4040"]); ?>

<h1>Intel 4040</h1>

<p>The Intel 4040, introduced in 1974, is the successor of <a href="<?php echo $sys->getLink("intel4004.php");?>">Intel 4004</a>. From a programming perspective, the new microprocessor is very similar to the Intel 4004, with several additions: interrupts, halt/stop, extended program stack, two register sets selectable via an index register. New supporting ICs were also introduced. 
</p>

<div>
<div style="display:inline-block">

<a title="Rudiniemeijer, CC BY-SA 4.0 &lt;https://creativecommons.org/licenses/by-sa/4.0&gt;, via Wikimedia Commons" href="https://commons.wikimedia.org/wiki/File:Intel_4040_processor_pinout.png" target="_blank"><img width="300" alt="Intel 4040 processor pinout" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Intel_4040_processor_pinout.png/512px-Intel_4040_processor_pinout.png"></a>

</div>

<div style="display:inline-block">

<a title="Appaloosa, CC BY-SA 3.0 &lt;https://creativecommons.org/licenses/by-sa/3.0&gt;, via Wikimedia Commons" href="https://commons.wikimedia.org/wiki/File:Intel_4040_arch.svg" target="_blank"><img width="400" alt="Intel 4040 arch" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Intel_4040_arch.svg/512px-Intel_4040_arch.svg.png"></a>

</div>
</div>

<h2>Main Characteristics</h2>
<ul>
<li>4 pins for Data, Address, Instructions, and I/O (D0,D1,D2,D3)</li>
<li>12-bit addresses, 8-bit instructions, and 4-bit data words (sent over multiple clock cycles on the 4 data pins)</li>
<li>4 pins for RAM bank selection (CM-RAM)</li>
<li>2 pins for ROM bank selection (CM-ROM)</li>
<li>Separate program and data storage (different memory areas)</li>
<li>740KHz maximum clock rate</li>
<li>Pins for external hardware interrupt (INT) and interrupt acknowledge (INT ACK)</li>
<li>From the CPU Datasheet: "The CPU can directly address 4K 8-bit instruction words or 8K with a bank switch. 7 levels of subroutine nesting … and 24 index registers."</li>
<li>24 4-bit registers (grouped in 2 banks: 16+8), 1 accumulator, address stack (PC+7 levels), register bank index</li>
<li>60 instructions in total: 46 instructions from Intel 4004 (41 8-bits instructions + 5 16-bits instructions) + 14 new instructions (8-bits)</li>
<li>Similar to the 4004, it uses big-endian storage (a nice discussion about this topic is <a href="https://retrocomputing.stackexchange.com/questions/18224/which-endian-was-the-intel-4004" target="_blank">here</a> )
</ul>

<iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?si=mYX6OZTyfCVnxbJy&amp;list=PL7-u-wmV6bWq97qpt6-5A1Q1T1Rn36Q51&autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

<h2>Java System Simulator</h2>
<ul>
<li>Intel 4040 CPU simulation implementation in Java <a href="https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/cpu/impl/Intel4040.java" target="_blank">here</a></li>
<li>Intellec 4 mod 40 system simulations <a href="https://github.com/ComputingMongoose/Simulations/tree/main/simulations/Intellec_4_mod_40" target="_blank">here</a></li>
<li>Details about the Intel4040 virtual device <a href="<?php echo $sys->getLink('content/jss/dev_Intel4040.php'); ?>">here</a></li>
</ul>

<h2>Tools</h2>
<ul>
<li>Macroassembler AS <a href="http://john.ccac.rwth-aachen.de:8000/as/index.html" target="_blank">Home</a> | <a href="http://john.ccac.rwth-aachen.de:8000/as/as_EN.html" target="_blank">Manual</a></li>
<li>ROM dumps and information <a href="https://www.retrotechnology.com/restore/intel440_roms.html" target="_blank">here</a></li>
</ul>

<h2>Useful resources</h2>
<ul>
<li><a href="http://datasheets.chipdb.org/Intel/MCS-40/4040.pdf" target="_blank">Intel 4040 Datasheet</a></li>
<li><a href="http://bitsavers.informatik.uni-stuttgart.de/components/intel/MCS40/MCS-40_Users_Manual_Nov74.pdf" target="_blank">MCS-40 Users manual</a></li>
<li><a href="https://en.wikipedia.org/wiki/Intel_4040" target="_blank">https://en.wikipedia.org/wiki/Intel_4040</a></li>
</ul>
