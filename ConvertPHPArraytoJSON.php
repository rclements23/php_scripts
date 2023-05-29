<?php 

//json_encode ( mixed $value [, int $options = 0 [, int $depth = 512 ]] ) : string
//For converting a PHP array to a JSON format, the json_encode() function is used. 
//The following code snippet specifies the PHP json_encode() function’s syntax.

$inputArray = array (
            "FIFA_Last_World_Cup_final" => array (
                    "Year" => "2018",
                    "data" => array ( "Winner" => "France", "Score" => "4-2", "Runner-up" => "Croatia")
                )
            );

$encodedJSON = json_encode($inputArray, JSON_PRETTY_PRINT);

print($encodedJSON);
?>