<?php $sys->setTags(["cpu","intel8080"]); ?>

<h1>Intel 8080</h1>

<p>The Intel 8080 was introduced in 1974. It is an 8-bit microprocessor, without binary compatibility with the previously released <a href="<?php echo $sys->getLink("intel8008.php");?>">Intel 8008</a>. It was the original target CPU for the CP/M operating systems developed by Gary Kildall. The already available Intel 8008 got a second instruction set, in order to make it look more similar to the 8080 instruction set. The modern x86 architecture was influenced by the 8080. The later 8086 was designed to have its assembly language similar enough to the 8080, allowing most instructions to be mapped directly onto each other.
</p>

<div>
<div style="display:inline-block">

<a title="Rudiniemeijer, CC BY-SA 4.0 &lt;https://creativecommons.org/licenses/by-sa/4.0&gt;, via Wikimedia Commons" href="https://commons.wikimedia.org/wiki/File:Intel_8080_Microprocessor.png" target="_blank"><img width="200" alt="Intel 8080 Microprocessor" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Intel_8080_Microprocessor.png/256px-Intel_8080_Microprocessor.png"></a>

</div>

<div style="display:inline-block">

<a title="Appaloosa, CC BY-SA 3.0 &lt;https://creativecommons.org/licenses/by-sa/3.0&gt;, via Wikimedia Commons" href="https://commons.wikimedia.org/wiki/File:Intel_8080_arch.svg" target="_blank"><img width="400" alt="Intel 8080 arch" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5d/Intel_8080_arch.svg/512px-Intel_8080_arch.svg.png"></a>

</div>
</div>

<h2>Main Characteristics</h2>
<ul>
<li>16 pins for Addresses (16-bit)</li>
<li>64 Kb of RAM can be addressed</li>
<li>8 pins for Data, Instructions (8-bit, but instructions can span multiple bytes)</li>
<li>Interrupt signal</li>
<li>Clock rate 2MHz - 3.125MHz</li>
<li>6x 8-bit registers, 1x 8-bit accumulator, 16-bit stack pointer, 5 status flags</li>
<li>The 6x 8-bit registers can be used in pairs for certain instructions acting like 3x 16-bit registers</li>
<li>Up to 256 I/O ports</li>
<li>78 instructions (these are unique mnemonics, including the NOP mnemonic)</li>
</ul>

<!--
<iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?si=iAs6Vd36TSTs12V-&amp;list=PL7-u-wmV6bWp6Uuj6ywNMvMXzP2t6F9yG&autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
-->

<h2>Java System Simulator</h2>
<ul>
<li>Intel 8080 CPU simulation implementation in Java <a href="https://github.com/ComputingMongoose/JavaSystemSimulator/blob/main/src/jss/devices/cpu/impl/Intel8080.java" target="_blank">here</a></li>
<li>Intellec 8 mod 80 system simulations <a href="https://github.com/ComputingMongoose/Simulations/tree/main/simulations/Intellec_8_mod_80" target="_blank">here</a></li>
<li>Details about the Intel8080 virtual device <a href="<?php echo $sys->getLink('content/jss/dev_Intel8080.php'); ?>">here</a></li>
</ul>

<h2>Tools</h2>
<ul>
<li>Macroassembler AS <a href="http://john.ccac.rwth-aachen.de:8000/as/index.html" target="_blank">Home</a> | <a href="http://john.ccac.rwth-aachen.de:8000/as/as_EN.html" target="_blank">Manual</a></li>
</ul>

<h2>Useful resources</h2>
<ul>
<li><a href="https://archive.org/details/8080Datasheet" target="_blank">Intel 8080 Datasheet</a></li>
<li><a href="http://bitsavers.org/components/intel/MCS80/9800301D_8080_8085_Assembly_Language_Programming_Manual_May81.pdf" target="_blank">8080/8085 Assembly Language Programming Manual</a></li>
<li><a href="https://bitsavers.org/components/intel/MCS80/Intel_SDK-80_Monitor_Listing.pdf" target="_blank">MCS80 Monitor Listing</a></li>
<li><a href="https://en.wikipedia.org/wiki/Intel_8080" target="_blank">https://en.wikipedia.org/wiki/Intel_8080</a></li>
</ul>

<h2>Images</h2>
<a data-pin-do="embedBoard" data-pin-board-width="400" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/computingm/intel-8080/"></a>
