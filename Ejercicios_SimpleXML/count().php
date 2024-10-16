<?php
$xml=<<<XML
  <cars>
    <car name="Volvo">
    <child/>
    <child/>
    <child/>
    <child/>
  </car>
  <car name="BMW">
    <child/>
    <child/>
  </car>
</cars>
XML;

$elem=new SimpleXMLElement($xml);
foreach ($elem as $car)
  {
  printf("%s has %d children.<br>", $car['name'], $car->count());
  }
?>

<!--The count() function counts the children of a specified node.-->