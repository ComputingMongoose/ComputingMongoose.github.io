<?php $sys->setTags(["cpu","intel4004"]); ?>

<h1>Intel 4004</h1>

<p>The Intel 4004, introduced in 1971, is recognized as the first microprocessor. Prior to its release, computer processors required multiple components, sometimes even multiple circuit boards. With the Intel 4004, the computer processor became a single integrated circuit (IC), hence the name "microprocessor". In reality, the Intel 4004 required additional supporting ICs for certain functions, such as I/O operations. Nevertheless, certain programs could be theoretically executed without the involvement of other ICs, thus justifying the classification as "microprocessor".</p>

<div>
<div style="display:inline-block">

<a title="Rudiniemeijer, CC BY-SA 4.0 &lt;https://creativecommons.org/licenses/by-sa/4.0&gt;, via Wikimedia Commons" href="https://commons.wikimedia.org/wiki/File:Intel_4004_processor_pinout.png" target="_blank"><img width="400" alt="Intel 4004 processor pinout" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Intel_4004_processor_pinout.png/512px-Intel_4004_processor_pinout.png"></a>

</div>

<div style="display:inline-block">

<a title="Appaloosa, CC BY-SA 3.0 &lt;http://creativecommons.org/licenses/by-sa/3.0/&gt;, via Wikimedia Commons" href="https://commons.wikimedia.org/wiki/File:4004_arch.svg" target="_blank"><img width="400" alt="4004 arch" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/4004_arch.svg/512px-4004_arch.svg.png"></a>

</div>
</div>

<h2>Main Characteristics</h2>
<ul>
<li>4 pins for Data, Address, Instructions, and I/O (D0,D1,D2,D3)</li>
<li>12-bit addresses, 8-bit instructions, and 4-bit data words (sent over multiple clock cycles on the 4 data pins)</li>
<li>4 pins for RAM bank selection (CM-RAM)</li>
<li>1 pin for ROM bank selection (CM-ROM)</li>
<li>Separate program and data storage (different memory areas)</li>
<li>740KHz maximum clock rate</li>
<li>From the CPU Datasheet: "The CPU can directly address 4K 8-bit instruction words of program memory and 5120 bits of data storage RAM… Up to 16 4-bit input ports and 16 4-bit output ports may also be directly addressed".</li>
<li>16 4-bit registers, 1 accumulator, address stack (PC+3 levels)</li>
<li>46 instructions: 41 8-bits instructions + 5 16-bits instructions</li>
<li>Big-endian storage (a nice discussion about this topic is <a href="https://retrocomputing.stackexchange.com/questions/18224/which-endian-was-the-intel-4004" target="_blank">here</a> )
</ul>

<iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?si=jirxD93VGl312eLT&amp;list=PL7-u-wmV6bWrEyBQgZUn_bX59_GXOsXtK&autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

<h2>Java System Simulator</h2>
<ul>
<li>Intel 4004 CPU simulation implementation in Java <a href="https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/cpu/impl/Intel4004.java" target="_blank">here</a></li>
<li>Intellec 4 system simulations <a href="https://github.com/ComputingMongoose/Simulations/tree/main/simulations/Intellec_4" target="_blank">here</a></li>
<li>Details about the Intel4004 virtual device <a href="<?php echo $sys->getLink('content/jss/dev_Intel4004.php'); ?>">here</a></li>
</ul>

<h2>Tools</h2>
<ul>
<li><a href="https://www.retrotechnology.com/restore/a04.html" target="_blank">A04 cross-assembler</a></li>
<li>JavaScript emulator/assembler/dissassembler <a href="http://www.e4004.szyc.org/" target="_blank">e4004</a></li>
<li>Intel 4004 and 4040 4-bit processor development kit with Busicom 141-PF calculator emulation <a href="https://github.com/Panda381/AT4004" target="_blank">here</a></li>
</ul>

<h2>Useful resources</h2>
<ul>
<li><a href="http://datasheets.chipdb.org/Intel/MCS-4/datashts/intel-4004.pdf" target="_blank">Intel 4004 Datasheet</a></li>
<li><a href="https://www.intel.com/content/www/us/en/history/museum-story-of-intel-4004.html" target="_blank">https://www.intel.com/content/www/us/en/history/museum-story-of-intel-4004.html</a></li>
<li><a href="http://www.intel4004.com/" target="_blank">http://www.intel4004.com/</a></li> 
<li><a href="https://en.wikipedia.org/wiki/Intel_4004" target="_blank">https://en.wikipedia.org/wiki/Intel_4004</a></li>
</ul>

<h2>Images</h2>
<a data-pin-do="embedBoard" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/computingm/intel-4004/"></a>
