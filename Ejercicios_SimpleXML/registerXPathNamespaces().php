<?php
$xml=<<<XML
<book xmlns:chap="http://example.org/chapter-title">
  <title>My Book</title>
  <chapter id="1">
    <chap:title>Chapter 1</chap:title>
    <para>Donec velit. Nullam eget tellus...</para>
  </chapter>
  <chapter id="2">
    <chap:title>Chapter 2</chap:title>
    <para>Lorem ipsum dolor sit amet....</para>
  </chapter>
</book>
XML;

$sxe=new SimpleXMLElement($xml);
$sxe->registerXPathNamespace('c','http://example.org/chapter-title');
$result=$sxe->xpath('//c:title');
foreach ($result as $title)
  {
  echo $title . "<br>";
  }
?>

<!--The registerXPathNamespace() function creates a namespace context for the next XPath query.-->
<!--This function is useful if a namespace prefix is changed in an XML document. The registerXPathNamespace() 
function will create a prefix for specified namespace, so that the affected XML nodes can be accessed without 
altering the application code too much.-->