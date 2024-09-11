<?php $sys->setTags(["cpm"]); ?>

<h1>CP/M User Areas</h1>

<p>The CP/M (Control Program for Microcomputers) operating system has a single directory for storing files on a disk. It does not have a directory structure (or directory tree) as in other modern operating systems. However, it allows organizing files into user areas, within the same directory. As the name suggests, this feature is particularly useful when multiple users use the same computer and storage device for their own personal files. Then, each user will employ his/her own user area for the files. This feature is also useful for organizing different files into "pseudo-directories".</p>

<p>CP/M supports 16 user areas, with numeric values from 0 to 15. By default, the operating system boots into user area 0. The user area can be manually changed with the "USER" command.
Examples:</p>
<ul><li><b>USER 5</b> - Changes to user area 5.</li>
<li><b>USER 0</b> - Changes to the default user area 0.</li>
</ul>

<p>By default there are no files in a new user area. System files are available in user area 0. When the user command is entered, the new user area is set at operating system level, for all drives. This means that system files (including transient commands) are no longer available. Usually, PIP.COM will be copied to a new user area in order to allow transferring other files as needed.</p>

<h3>How to transfer PIP.COM to a new user area ?</h3>
<p>Since by default no transient commands are available in a new user area, the procedure for copying PIP (or other commands) is by loading it into memory (using DDT) and then using the resident command "SAVE" to store it on disk in the new user area.</p>
<p>Commands:</p>
<pre>

</pre>


<p>Selects an user area. The default user area is 0. Possible values range from 0 to 15. A user area can be used to store user files in separate spaces, when multiple users are using the same computer, or to organize the files. Transfer between user areas can be done with PIP. 
 Examples:</p>
<ul><li><b>USER 5</b> - Changes to user area 5.</li>
<li><b>USER 0</b> - Changes to the default user area 0.</li>
</ul>

<h3>8. PIP</h3>
<p>The main purpose of the PIP ("Peripheral Interchange Program") command is to copy files. However, it accepts also devices (such as CON:, PRN:, etc.) as input/output. This allows for other usage scenarios, like creating a file, printing a file, displaying a file, etc. 
 Examples:</p>
<ul><li><b>PIP TEST1.BAK=TEST1.BAS</b> - Makes a copy of the file TEST1.BAS.</li>
<li><b>PIP CON:=TEST1.BAS</b> - Displays the file TEST1.BAS (similar to "TYPE TEST1.BAS").</li>
<li><b>PIP TEST.TXT=CON:</b> - Creates the file TEST.TXT and allows you to enter text from the console (end the file with CTRL+Z).</li>
<li><b>PIP TEST.TXT=TEST.TXT[G0]</b> - Copies the file TEST.TXT from user area 0 to the current user area (assuming the current user area was changed with a USER command; PIP needs to be available in the current user area).</li>
</ul>

<h3>9. MOVCPM</h3>
<h3>10. SYSGEN</h3>
<p>MOVCPM and SYSGEN allow creating a new CP/M system disk for a different memory size (the default memory size used in CP/M 2.2 is 20Kb). MOVCPM alone can create a new in-memory CP/M system for a new memory size. SYSGEN allows saving the in-memory system or just copying an existing system disk. The parameters are not checked, a command like "MOVCPM 128" may cause the system to hang. A generated SYSGEN disk may refuse to boot. The commands should be used with care and a copy of the original system disk should always be kept.
 Examples:</p>
<ul><li><b>MOVCPM</b> - Produces and runs a CP/M system using all the available memory.</li>
<li><b>MOVCPM 32 *</b> - Constructs a CP/M image for 32Kb of memory and stores it in memory for SYSGEN. A message will be displayed when using the "*" parameter 'READY FOR "SYSGEN" OR "SAVE 34 CPM32.COM"'. This message actually indicates how this image may be used.</li>
<li><b>SYSGEN</b> - Offers a series of prompts, asking for source and destination, for transferring a CP/M image.</li>
</ul>

<h3>11. STAT</h3>
<p>Displays disk and file information; allows setting file attributes; allows assigning peripherals.
 Examples:</p>
<ul><li><b>STAT</b> - Displays the space available on disks.</li>
<li><b>STAT A: DSK:</b> - Displays detailed information about the disk in the A drive.</li>
<li><b>STAT A:*.*</b> - Displays detailed information about the files on the disk in the A drive.</li>
<li><b>STAT A:TEST.TXT $R/O</b> - Sets the "read only" attribute on the file TEST.TXT. Recognized attributes: $R/O (read only), $R/W (read write), $SYS (system, does not appear in the DIR listing), $DIR (regular file, is shown in the DIR command output). All the files are shown in the STAT command output, regardless of their attributes.</li>
<li><b>STAT DEV:</b> - Displays current device assignments.</li>
<li><b>STAT CON:=TTY:</b> - Sets the console device to TTY. If there is no device attached the system will become unresponsive.</li>
</ul>

<h3>12. LOAD</h3>
<p>Reads a file in Intel HEX format and produces an executable COM file.
 Examples:</p>
<ul><li><b>LOAD TEST.HEX</b> - Will create TEST.COM from the Intel HEX file.</li>
</ul>

<h3>13. DDT</h3>
<p>This is the CP/M debugger. Allows debugging executable files. An executable file is loaded at address 0100H. When exiting the debugger, the debugged file remains loaded, therefore it can be saved using the SAVE command.
 Examples:</p>
<ul><li><b>DDT PIP.COM</b> - Loads the file PIP.COM into memory and awaits for debugger commands.</li>
</ul>

<h3>14. ED</h3>
<p>This is the CP/M line editor. Allows basic editing operations for files. Operations are performed by using commands (for example "I" for insert, "1:100T" display first 100 lines, "Q" exits the editor). Text entering is ended with CTRL+Z, returning to the editor command interface. 
 Examples:</p>
<ul><li><b>ED TEST.TXT</b> - Loads the file TEST.TXT into the editor.</li>
</ul>

<h3>15. SUBMIT</h3>
<p>Allows for command batching. Multiple commands are stored in a file (usually with a .SUB extension) and can be submitted for batch processing with the SUBMIT command. Command line parameters can be accessed within the batch file with $1 ... $n. The SUBMIT command actually creates a file called "$$$.SUB" on the current disk that contains the batched commands. This file will be executed when the CP/M system is booted or reloaded from the current disk. If created on the B: drive for example, the file $$$.SUB will not be executed until the disk is inserted in the A: drive and the system is loaded from it. When a new file is submitted, the contents of $$$.SUB is overwritten.
 Examples:</p>
<ul><li><b>SUBMIT CLEANUP.SUB TEST</b> - Will submit for batch processing the file CLEANUP.SUB with the parameter TEST. The parameter can be accessed inside the CLEANUP.SUB batch file using "$1".</li>
</ul>

<h3>16. XSUB</h3>
<p>This command is useful in a .SUB file to redirect console input to the following lines in the .SUB file. Following an XSUB command, the .SUB file should contain first the command to be executed and on the following lines the input for the executed command.
 </p>

<h3>17. DUMP</h3>
<p>Displays the contents of a file in hexadecimal. Examples:
 </p>
<ul><li><b>DUMP DUMP.COM</b> - Displays in hexadecimal the contents of the file "DUMP.COM".</li>
</ul>


<iframe width="560" height="315" src="https://www.youtube.com/embed/TojA-z3TSI8?si=XMYLuFVj94AaboiR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

<h2>More from this site</h2>
<ul>
<?php
$cpus=$sys->generateMenuItemsForTag("cpm");
foreach($cpus as $item){
	echo "<li><a href=\"${item['link']}\">${item['title']}</a></li>\n";
}
?>
</ul>



<h2>Useful external resources</h2>
<ul>
<li><a href="" target="_blank"></a></li>
<li><a href="http://www.moria.de/~michael/cpmtools/" target="_blank">cpmtools</a> | <a href="https://github.com/lipro-cpm4l/cpmtools" target="_blank">Forked on GitHub</a> | <a href="https://www.cpm8680.com/cpmtools/" target="_blank">Documentation</a></li>
<li><a href="https://linux.die.net/man/5/cpm" target="_blank">Man pages for cpmtools on Linux</a></li>
<li><a href="http://www.retroarchive.org/cpm/games/games.htm" target="_blank">CP/M Games</a></li>
<li><a href="https://en.wikipedia.org/wiki/CP/M" target="_blank">Wikipedia article</a></li>
<li><a href="http://www.gaby.de/edefine.htm" target="_blank">Some CP/M history</a></li>
<li><a href="https://landley.net/history/mirror/cpm/history.html" target="_blank">More CP/M history</a></li>
<li><a href="https://www.digitalresearch.biz/index.htm" target="_blank">A lot of history about Digital Research, CP/M, Gary Kildall, etc.</a></li>
<li><a href="http://dunfield.classiccmp.org/index.htm" target="_blank">Information about computers running CP/M</a></li>
<li><a href="https://www.seasip.info/Cpm/format22.html" target="_blank">CP/M 2.2 Disk formats and Directory entries</a></li>
<li><a href="https://www.sydneysmith.com/wordpress/1651/cpm-disk-formats/" target="_blank">CP/M Disk formats</a></li>
<li><a href="https://www.sydneysmith.com/wordpress/1643/edit-cpm-disk-image/" target="_blank">cpmfs tool for disk images on Windows</a></li>
<li><a href="http://cpmarchives.classiccmp.org/live.php" target="_blank">CP/M Live</a></li>
<li><a href="http://cpmarchives.classiccmp.org/ftp.php?b=cpm%2FSoftware%2FUserGroups%2FSIGM%2FDSK" target="_blank">CP/M disk images (.DSK)</a></li>
<li><a href="https://retrobrewcomputers.org/n8vem-pbwiki-archive/0/38274845/4200862/index.htm" target="_blank">Executable (.COM) programs for CP/M 2.2 (including some FORMAT commands), probably for Z80 cpu</a></li>
</ul>

