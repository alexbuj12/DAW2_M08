<?php
$note=<<<XML
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Do not forget me this weekend!</body>
</note>
XML;

$xml = new SimpleXMLIterator($note);

// rewind to the first element
$xml->rewind();

// check if valid
var_dump($xml->valid());

// move to the next element
$xml->next();

// check if valid
var_dump($xml->valid());
?>

<!--The valid() function checks whether the current element is valid after a call to rewind() or next().-->