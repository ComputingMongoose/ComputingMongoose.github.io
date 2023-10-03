<?php $sys->setTags(["jss"]); ?>

<h1>How to run a simulation ?</h1>

<p><a href="<?php echo $sys->getLink('content/jss/about.php'); ?>">Java System Simulator</a> is a Java application. It is packaged as a JAR file. It is executed as a regular JAR file, from the command line, with the simulation folder given as an argument. This page will guide you through the steps required to execute a simulation.</p>

<p><b>Step 1.</b> Make sure you have Java properly installed on your system. This <a href="https://www.java.com/en/download/help/download_options.html" target="_blank">page</a> contains instructions for installing Java on different operating systems. The application is compiled targeting JavaSE-1.8. Therefore you will need at least Java 1.8. Any newer version of Java will work.</p>

<p><b>Step 2.</b> Download the latest release of the Java System Simulator. Releases are available from GitHub <a href="https://github.com/ComputingMongoose/JavaSystemSimulator/releases" target="_blank">here</a>. You should also check the main GitHub <a href="_https://github.com/ComputingMongoose/JavaSystemSimulator" target="_blank">repository</a> for additional information.</p>

<p><b>Step 3.</b> Make sure you have at least one simulation to run. You can find pre-defined simulations in the <a href="https://github.com/ComputingMongoose/Simulations" target="_blank">Simulations</a> GitHub repository. A good place to start is the Intellec 8 mod 80 with Intel 8080 CPU and CP/M 2.2. You can find it <a href="https://github.com/ComputingMongoose/Simulations/tree/main/simulations/Intellec_8_mod_80/cpm22" target="_blank">here</a>. Remember to download the entire folder into a folder on your system. Alternatively, you can read about <a href="<?php echo $sys->getLink('content/jss/howto_simulation.php');?>">How to create a simulation</a> and create your own simulation in a dedicated folder.</p>

<p><b>Step 4.</b> Run the Java System Simulator JAR with the simulation folder as a parameter. You should run this from a command prompt and check the display to make sure there are no errors shown in the console.</p>
<pre>
<code>
java -jar JavaSystemSimulator.jar &lt;simulation_folder&gt;
</code>
</pre>

<p>Now you should have a running simulation!</p>
