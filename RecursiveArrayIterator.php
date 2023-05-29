<?php 
$JSON = file_get_contents("input.json");
$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($JSON, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);

foreach ($jsonIterator as $key => $val) {
    if(!is_array($val)) {
        if($key == "Year") {
            print "<br/>";
        }
    print $key."    : ".$val . "<br/>";
    }
}
?>







