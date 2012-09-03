<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
$xml = simplexml_load_file("https://www.nationallottery.co.za/xmlfeed/powerball.xml");

//echo $xml->getName() . "<br />";

$proweball=$xml->record ;

$DrawDate=$proweball->field[0]->attributes()->value;
$drawnumber=$proweball->field[1]->attributes()->value;
echo $DrawDate; 
echo '<br />';
echo $drawnumber; 



foreach($proweball->field[0]->attributes() as $a => $b) {
    //echo $a,'="',$b,"\"\n";
  }
  foreach($proweball->field[1]->attributes() as $a => $b) {
   // echo $a,'="',$b,"\"\n";
  }


?>
        
        
        <?php
        
//Initialize the XML parser
//$parser=xml_parser_create();
//
////Function to use at the start of an element
//function start($parser,$element_name,$element_attrs)
//  {
//  switch($element_name)
//    {
//    case "DrawDate":
//    echo "-- Draw Date --<br />";
//    break;
//    case "Country":
//    echo "Country: ";
//    break;
//    case "State":
//    echo "State: ";
//    break;
//    case "HEADING":
//    echo "Heading: ";
//    break;
//    case "BODY":
//    echo "Message: ";
//    }
//  }
//
////Function to use at the end of an element
//function stop($parser,$element_name)
//  {
//  echo "<br />";
//  }
//
////Function to use when finding character data
//function char($parser,$data)
//  {
//  echo $data;
//  }
//
////Specify element handler
//xml_set_element_handler($parser,"start","stop");
//
////Specify data handler
//xml_set_character_data_handler($parser,"char");
//
////Open XML file
//$fp=fopen("https://www.nationallottery.co.za/xmlfeed/powerball.xml","r");
//
////Read data
//while ($data=fread($fp,4096))
//  {
//  xml_parse($parser,$data,feof($fp)) or 
//  die (sprintf("XML Error: %s at line %d", 
//  xml_error_string(xml_get_error_code($parser)),
//  xml_get_current_line_number($parser)));
//  }
//
////Free the XML parser
//xml_parser_free($parser);
?>
    </body>
</html>
