<?php
$xml = new SimpleXMLElement("<note>Hello <to>Tove</to><from>Jani</from>World!</note>");
echo $xml;
?>

<!--The __toString() function returns the string content of an element.-->
<!--This function returns the string content that is directly in the 
element - not the string content that is inside this element's children!-->