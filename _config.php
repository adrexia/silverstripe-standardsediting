<?php


use SilverStripe\Forms\HTMLEditor\TinyMCEConfig;


// TinyMCE configuration
$standardsEditor = TinyMCEConfig::get('cms')->setOptions(array(
	"block_formats" => 'Paragraph=p;Header 1=h2;Header 2=h3;Header 3=h4;Header 4=h5;Header 5=h6;Preformatted=pre; Address=address',
    'extended_valid_elements' =>
		"img[class|src|alt|title|hspace|vspace|width|height|align|onmouseover|onmouseout|name|usemap|data*]," . "iframe[src|name|width|height|align|frameborder|marginwidth|marginheight|scrolling],"
        . "object[width|height|data|type],"
		. 'embed[width|height|name|flashvars|src|bgcolor|align|play|loop|quality|allowscriptaccess|type|pluginspage|autoplay],'
		. "param[name|value],"
		. "map[class|name|id],"
		. "area[shape|coords|href|target|alt]",
	'browser_spellcheck' => true
));


// Removed unwanted formatting tools - these can be added with css if needed
$standardsEditor->removeButtons('underline', 'alignleft', 'alignright', 'alignjustify', 'aligncenter');

// enable plugins
$standardsEditor->enablePlugins('template', 'hr', 'charmap', 'anchor', 'wordcount', 'lists');

//First line:
$standardsEditor->insertButtonsAfter('removeformat', '|', 'superscript', 'subscript', 'blockquote', 'hr');
$standardsEditor->addButtonsToLine(1, '|', 'charmap', 'template');

// // Second line:
$standardsEditor->insertButtonsBefore('formatselect', 'styleselect');
$standardsEditor->insertButtonsAfter('unlink', '|', 'anchor');
