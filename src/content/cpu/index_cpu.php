<?php $sys->setTags(["cpu"]); ?>

<h1>Central Processing Unit (CPU)</h1>

<p>The CPU executes the instructions of a program and allows the computer to perform its functions. In minicomputers, the CPU comprised multiple individual elements (multiple boards, or multiple components on the same board). With the introduction of microcomputers, the CPU became a single component (a single integrated circuit (IC)), known as a microprocessor. The Intel 4004 is usually recognized as the first microprocessor, even though it still relied on additional supporting ICs for certain operations. In microcontroller architectures, even more components are placed in the same IC with the CPU (this may include memory, flash, bus, etc.). 
</p>

<p>This website section is dedicated to CPUs that I used for simulations or hardware projects. It contains general information for each CPU, links to additional resources, and, sometimes, my own observations.</p>

<h2>CPUs</h2>
<ul>
<?php
$cpus=$sys->generateMenuItemsForTag("cpu");
foreach($cpus as $item){
	echo "<li><a href=\"${item['link']}\">${item['title']}</a></li>\n";
}
?>
</ul>
