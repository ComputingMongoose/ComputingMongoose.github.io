<?php

require_once "SimpleStaticWebsiteGenerator.php";

$sys=new SimpleStaticWebsiteGenerator();

echo "Static website generator from simple PHP files\n\n";

$sys->setSource("content");
$sys->setDestination("..");
$sys->setTemplate("template/php/template.php");
$sys->setBaseURL("https://computingmongoose.github.io");

echo "Step 1. Processing content\n";
$sys->runStep1();
echo "DONE\n";

$sys->setMenu([
	["title"=>"JavaSystemSimulator","tag"=>"jss","link"=>"content/jss/index_jss.php","items"=>["TAG:jss"]],
	["title"=>"CPUs","tag"=>"cpu","link"=>"content/cpu/index_cpu.php","items"=>["TAG:cpu"]],
	["title"=>"Utilities","tag"=>"utils","link"=>"content/utils/index_utils.php","items"=>["TAG:utils"]],
]);


echo "\n\n";
echo "Step 2. Generating static content\n";
$sys->runStep2();
echo "DONE\n";

echo "\n\n";
echo "Step 3. Generating sitemap\n";
$sys->generateSitemap();
echo "DONE\n";
