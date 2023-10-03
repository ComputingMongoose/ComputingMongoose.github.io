<?php $sys->setTags(["utils"]); ?>

<h1>HEX File Viewer</h1>

<p>
This is a Java application for viewing .HEX files (used for EEPROM programmers, simulators for computing architectures, loading programs into old monitor applications).
</p>
<p>
This application is not intended for viewing binary files in hexadecimal. It will only work with .HEX files (also known as Intel hexadecimal object file format, Intel hex format or Intellec Hex). Viewing a HEX file may be useful when using computer simulators, like the <a href="<?php echo $sys->getLink('content/jss/about.php');?>">Java System Simulator</a> project.
</p>

<p>GitHub: <a href="https://github.com/ComputingMongoose/HEXFileViewer" target="_blank">https://github.com/ComputingMongoose/HEXFileViewer</a></p>

<p>The HEXFileViewer application displays details about each HEX file record. It highlights invalid records. When a record is selected (with a mouse click), details are shown, including record fields, error indications, and, if possible, suggestions on how to correct the errors.</p>

<p><img src="<?php echo $sys->getResourceLink('img/screenshot_hexfileviewer.jpg');?>" width="900px"/></p>


<div>

<div style="display:inline-block">
<iframe width="400" height="225" src="https://www.youtube.com/embed/YBvesFMS3us?si=UkT9iNbgXUgvaS7_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>

<div style="display:inline-block">
<iframe width="400" height="225" src="https://www.youtube.com/embed/Hans-Cx_YS4?si=_lTyILD_EdjAvYxF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>

</div>


<h2>HEX file format</h2>
<p>HEX files consist of ASCII text lines that are separated by line feed or carriage return characters or both. Each text line contains hexadecimal characters that encode multiple binary numbers. The binary numbers may represent data, memory addresses, or other values, depending on their position in the line and the type and length of the line. Each text line is called a record. Each record contains:
<ul>
<li>Start code: the ASCII colon character ':'</li>
<li>Byte count: number of bytes in the data field</li>
<li>Address: 16-bit beginning memory address of the data</li>
<li>Record type: one byte (00=data, 01=end of file, etc.)</li>
<li>Data: a sequence of Byte count bytes written in hexadecimal</li>
<li>Checksum: two's complement of the least significant byte (LSB) of the sum of all decoded byte values in the record preceding the checksum.</li>
</ul>
</p>
<p>Read more here: <a href="https://en.wikipedia.org/wiki/Intel_HEX" target="_blank">https://en.wikipedia.org/wiki/Intel_HEX</a></p>

