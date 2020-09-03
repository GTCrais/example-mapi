<?php

require 'vendor/autoload.php';

use Hfig\MAPI\MapiMessageFactory;
use Hfig\MAPI\OLE\Pear\DocumentFactory;

$messageFactory = new MapiMessageFactory();
$documentFactory = new DocumentFactory();

$path = 'example_email.msg'; // breaks
//$path = 'example_email_no_attachment.msg'; // works

$compoundDocumentElement = $documentFactory->createFromFile($path);
$parsed = $messageFactory->parseMessage($compoundDocumentElement);

echo "Parsed.";
