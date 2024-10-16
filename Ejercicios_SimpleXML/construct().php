<?php
$note=<<<XML
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Do not forget me this weekend!</body>
</note>
XML;

$xml=new SimpleXMLElement($note);

header("Content-type: text/xml"); //Hay que añadir el header a todos para que lo muestre en el navegador
echo $xml->asXML(); //la flecha es como poner un punto (.) en python
?>

<!--The __construct() function creates a new SimpleXMLElement object.-->