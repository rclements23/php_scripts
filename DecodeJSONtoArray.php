<?php
//The following code block shows the syntax of the json_decode function. This function accepts JSON string input as its first parameter. Also, it takes an optional boolean value as its second parameter
//json_decode ( string $json [, bool $assoc = FALSE [, int $depth = 512 [, int $options = 0 ]]] ) : mixed

$JSON = '{
    "FIFA_Last_World_Cup_final":
    {
        "Year": "2018",
        "data":
        {
            "Winner": "France",
            "Score": "4-2",
            "Runner-up": "Croatia"
        }
    }
}';

$outputArray = json_decode($JSON, TRUE);

print "<PRE>";
print_r($outputArray);
?>