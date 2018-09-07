<?php
require  './vendor/simple_html_dom.php';
//http://simplehtmldom.sourceforge.net/manual.htm
// Create a DOM object from a URL
$html = new simple_html_dom();
$html->load_file('https://teaching.cornell.edu');

// Find all <div> with the id attribute
$links = $html->find('div[id=sidebar-top]');
$linksStr = implode(" ", $links);
$linksStr = str_replace('src="/', 'src="https://teaching.cornell.edu/', $linksStr);
$linksStr = str_replace('href="/', 'href="//teaching.cornell.edu/', $linksStr);
echo file_put_contents("./imports/parse_teach.html", $linksStr);
echo file_get_contents("./imports/parse_teach.html");
?>
