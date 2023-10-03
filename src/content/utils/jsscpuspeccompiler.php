<?php $sys->setTags(["utils"]); ?>

<h1>JSSCPUSpecCompiler</h1>

<p>
This is a Java application initially designed for compiling CPU spec files into Java source code, usable inside the <a href="<?php echo $sys->getLink('content/jss/about.php');?>">JavaSystemSimulator</a> project. The application can also be used to define and expand macros (similar to macro-supporting languages, such as C/C++/ASM) in any Java (or other programming language) source code.
</p>

<p>GitHub: <a href="https://github.com/ComputingMongoose/JSSCPUSpecCompiler" target="_blank">https://github.com/ComputingMongoose/JSSCPUSpecCompiler</a></p>


<h2>Macro definition</h2>
<p>A macro is defined on a line starting with "#define", followed by the macro name and parameters. If there are no macro parameteres, empty parantheses are required. The macro definition is written between "#{" and "#}". Currently, the macro is assumed to be on one line.</p>

<p>Examples:</p>
<pre>
<code>
#define GET_B() #{ registers[0] #}
#define DEC_SP() #{ SP--; SP&amp;=0xFFFF; #}
#define STORE(a,v) #{ memoryBus.write(a,v); #}
#define SET_A(v) #{ acc=(v) &amp; 0xFF; #}
</code>
</pre>

<h2>Macro usage</h2>
<p>To use a macro in the source code you place the name of the macro preceeded by a "#" character. It is possible to use macros inside other macros. It is possible to use macros as parameters to other macros.</p>

<p>Presently, macro expansion is performed recursively. Thus, if you have many macros called from inside other macros this will increase processing time. However, this will have no effect at runtime on the produced code.</p>

<p>Depending on the macro definition, it may not be required to end the macro call with a semicolon (for example if the definition itself contains a final semicolon). The macro expansion process does not impose any rules on ending the call with or without a semicolon.</p>

<p>Examples:</p>
<pre>
<code>
#SET_A(#LOAD(#GET_DE()));
#SET_L(#READ_NEXT())
tmp1=#READ_NEXT();
tmp2=((#READ_NEXT())&lt;&lt;8)|tmp1;
#define SET_ALU_FLAGS_CARRY(new) #{ #SET_FLAG_C( ((new&amp;0x100)==0x100)?(1):(0)); #}
</code>
</pre>

<h2>Features for CPU specifications</h2>
<p>CPU instructions often include fixed bits, identifying an instruction type, and variable bits identifying registers, condition flags or instruction variants. In the JSSCPUSpecCompiler it is possible to define bit values associated with intruction options as "MAP"s. These MAPs may be used in defining the macro name to be expanded (in a way they act as a special type of macro that will be expanded before regular macros). Inside each MAP definition are bit values followed by a string encoding, useful for invoking macros or other functions. The MAP definition ends with a line containing the keyword "END".</p>

<p>MAP example:</p>
<pre>
<code>
MAP RP
00 BC
01 DE
10 HL
11 SP
END
</code>
</pre>

<p>MAP usage example:</p>
<pre>
<code>
tmp1=#GET_$RP$();
</code>
</pre>

<p>Complete CPU instructions can be specified as a combination of fixed bits and MAPs. These are separated using "|".</p>

<p>Example instruction:</p>
<pre>
<code>
00|RP|0011
</code>
</pre>
<p>The instruction specification should be preceded by a line identifying the instruction name. This special line starts with ":", followed by the instruction name. The end of an instruction definition block is indicated by the next instruction specification or by a special line containing ":.".</p>

<p>Complete example:</p>
<pre>
<code>
MAP SSS
111 A
000 B
001 C
010 D
011 E
100 H
101 L
END

MAP DDD
111 A
000 B
001 C
010 D
011 E
100 H
101 L
END

:MOV R1,R2
01|DDD|SSS
#SET_$DDD$(#GET_$SSS$())

:.
</code>
</pre>
<p>The above example assumes there are macro definitions for #SET_A, #SET_B, #SET_C,... , #GET_A, #GET_B, #GET_c, ..., #GET_L.</p>

<p>More examples are available in <a href="https://github.com/ComputingMongoose/JSSCPUSpecCompiler" target="_blank">GitHub</a>.</p>
<p>Complete CPU specifications are available in the <a href="https://github.com/ComputingMongoose/CPUSpecifications" target="_blank">CPUSpecifications</a> project at GitHub.</p>

