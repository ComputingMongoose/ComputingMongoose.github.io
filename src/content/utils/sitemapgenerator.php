<?php $sys->setTags(["utils"]); ?>

<h1>PHP SiteMapGenerator</h1>

<p>
This is a PHP utility for generating a SiteMap. Generation can be as easy as providing a list of files with a base URL (see example1) or more complex, providing individual options for different files (see example2). The generated file can be either in XML or TXT format. The generated file can be used for indexing a website in a search engine, such as Google. For more details about the file format see: <a href="https://sitemaps.org/protocol.html" target="_blank">https://sitemaps.org/protocol.html</a> .
</p>
<p>
Its primary intended usage is for generating sitemaps for static websites. You pass an array of file paths and get a sitemap file generated in the specified destination path. The generation process will assign a different change frequency and priority to index files. However, the generation process can be fully controlled by passing a detailed array of options to the generation process, as detailed below. Take a look at the examples folder for different usage scenarios.
</p>

<p>This utility class is used to generate the sitemap for this website.</p>

<p>GitHub: <a href="https://github.com/ComputingMongoose/SimpleSiteMapGenerator" target="_blank">https://github.com/ComputingMongoose/SimpleSiteMapGenerator</a></p>

<h2>Example</h2>
<pre>
<code>
require_once "SimpleSiteMapGenerator.php";

$pages=[
"index.html",
"file1.html",
"file2.html"
];

$sgen=new SimpleSiteMapGenerator();
$sgen->setBaseURL("https://mywebsite");
$sgen->generateSiteMapXML($pages);
$sgen->generateSiteMapTXT($pages);
</code>
</pre>

<p>More examples are available in GitHub.</p>
