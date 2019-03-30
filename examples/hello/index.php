<?php
include('include/include.php');
session_start();
//build "wrapper" xml to render complete page with errors if they exist
$xml = "<?xml version=\"1.0\"?>\n";
$xml.= "<example>\n";
$xml.= "\t<errors>\n";
if ($_SESSION[_ERRORS]) {
	$xml.= Xml::marshal($_SESSION[_ERRORS], 2);
}
$xml.= "\t</errors>\n";
$xml.= "\t<forms>\n";
if ($_SESSION[_FORM]) {
	$xml.= Xml::marshal($_SESSION[_FORM], 2);
}
$xml.= "\t</forms>\n";
$xml.= "\t<models>\n";
if ($_SESSION['person']) {
	$xml.= Xml::marshal($_SESSION['person'], 2);
}
$xml.= "\t</models>\n";
$xml.= "</example>\n";
$_SESSION[_ERRORS] = NULL;
$_SESSION[_FORM] = NULL;
$_SESSION['person'] = NULL;
//release control to view for final rendering
$xsl = ($_GET[_VIEW]) ? $_GET[_VIEW] : 'views/index.xsl';
$result = Xml::transform($xml, array($xsl), $_GET);
echo $result;
//example debug information
echo '<hr><b>xml debug</b><pre>'.htmlentities($xml).'</pre>';
echo '<hr><b>session debug</b><pre>'.var_export($_SESSION, TRUE).'</pre>';
//clear errors from session once xml is built
?>
