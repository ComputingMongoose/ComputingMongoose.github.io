<?php $sys->setTags(["os"]); ?>

<h1>Operating Systems</h1>

<p>The operating system allows a user to interact with a computer system in order to launch utility applications, create files, access disks and other devices. The operating system is loaded at system startup, usually from a disk. It provides APIs to other programs. An operating system usually provides a series of built-in functions accessible by users.
</p>

<p>This website section is dedicated to different operating systems (both older and more recent).</p>

<h2>Operating systems</h2>
<ul>
<?php
$cpus=$sys->generateMenuItemsForTag("os");
foreach($cpus as $item){
	echo "<li><a href=\"${item['link']}\">${item['title']}</a></li>\n";
}
?>
</ul>
