<?php
$markup = file_get_contents('index.html');
$style = file_get_contents('stylesheets/screen.css');
$script = file_get_contents('javascripts/responsive.js');

// unused form in this form
$search = '/<div id="copy">(.*)?<\/div>/s';
$replace = '';
$markup = preg_replace($search, $replace, $markup);

$style_search = '/<link(.*)\/>/';
$style_replace = '<style type="text/css" media="screen">'.$style.'</style>';
$markup = preg_replace($style_search, $style_replace, $markup);
	
$script_search = '/<script src=\"javascripts\/responsive.js\"><\/script>/';
$script_replace = '<script type="text/javascript" charset="utf-8">'.$script.'</script>';
$markup = preg_replace($script_search, $script_replace, $markup);

$defaultURL_search = '/var defaultURL = \'(.*)\';/';
//$defaultURL_replace = 'var defaultURL = \''.$_SERVER['HTTP_HOST'].'\';';
$defaultURL_replace = 'var defaultURL = document.location.host;';
$markup = preg_replace($defaultURL_search, $defaultURL_replace, $markup);

$filename = 'responsive.html';
if (is_writable($filename)) {
    if (!$handle = fopen($filename, "w+")) {
         print "Kann die Datei $filename nicht öffnen";
         exit;
    }
    if (!fwrite($handle, $markup)) {
        print "Kann in die Datei $filename nicht schreiben";
        exit;
    }

    $markup.="<br /><br />Fertig, in Datei <a href='$filename' target='output'>$filename</a> wurde geschrieben";

    fclose($handle);

} else {
    print "Die Datei $filename ist nicht schreibbar";
}

echo $markup;
?>