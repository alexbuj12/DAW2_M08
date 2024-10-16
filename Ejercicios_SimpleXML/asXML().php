<?php
$note=<<<XML
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Do not forget me this weekend!</body>
</note>
XML;

$xml = new SimpleXMLElement($note);
echo $xml->asXML();
?>

<!--The asXML() function returns a well-formed XML string (XML version 1.0) from a SimpleXML object.-->