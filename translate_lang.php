<?php
/**
* example usage
*/

// we need the page treated as utf-8, otherwise the encoding will be mangled
header('Content-Type: text/html; charset=utf-8');

// require google language api class
require_once('google.translator.php');

// translate text
$text = 'Welcome to my website.';
$trans_text = Google_Translate_API::translate($text, 'en', 'it');
if ($trans_text !== false) {
        echo $trans_text;
}
?>