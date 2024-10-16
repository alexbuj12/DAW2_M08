<?php
$note=<<<XML
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Do not forget me this weekend!</body>
</note>
XML;

$xml=simplexml_load_string($note);
print_r($xml);
?>

<!--The simplexml_load_string() function converts a well-formed XML string into an object.-->