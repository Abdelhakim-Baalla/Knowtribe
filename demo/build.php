<?php
// Capture the student dashboard with the demo connector and a synthetic enrolment.
$root = dirname(__DIR__);
$out = $root.'/demo-dist';
if (!is_dir($out)) mkdir($out);
$_SERVER['DOCUMENT_ROOT'] = __DIR__;
$_GET = ['id_user' => 1, 'id' => 1];
chdir($root.'/Views');
ob_start();
require 'Etudiant.php';
$html = ob_get_clean();
$doc = new DOMDocument();
@$doc->loadHTML('<?xml encoding="UTF-8">'.$html);
$xpath = new DOMXPath($doc);
foreach ($xpath->query('//a[@href]') as $node) $node->parentNode->removeChild($node);
$heading = $doc->getElementsByTagName('header')->item(0);
$heading->appendChild($doc->createTextNode('Démo · Inscription fictive'));
file_put_contents("$out/etudiant.html", str_replace('<?xml encoding="UTF-8">','',$doc->saveHTML()));
$home = str_replace(['Views/auth/login.php',"Commencez l'éducation"], ['/etudiant','Ouvrir la démo étudiant'], file_get_contents($root.'/index.html'));
file_put_contents("$out/index.html",$home);
foreach (['Images','src/Css'] as $relative) {
    $dest = "$out/Assests/$relative";
    if (!is_dir($dest)) mkdir($dest,0777,true);
    foreach (glob("$root/Assests/$relative/*") as $file) if (is_file($file)) copy($file,$dest.'/'.basename($file));
}
