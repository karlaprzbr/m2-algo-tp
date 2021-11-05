<?php

$file = 'liste_francais.txt';
header('Content-Type: text/plain');
$content = file_get_contents($file);

function formater($code) {
    $num_tab = str_split(strval($code),1);
    $char_tab = [];
    for($i=0;$i<count($num_tab);$i++) {
        if($num_tab[$i]=="2") {
            array_push($char_tab, ["a","b","c"]);
        } elseif($num_tab[$i]=="2") {
            array_push($char_tab, ["d","e","f"]);
        } elseif($num_tab[$i]=="3") {
            array_push($char_tab, ["g","h","i"]);
        } elseif($num_tab[$i]=="4") {
            array_push($char_tab, ["j","k","l"]);
        } elseif($num_tab[$i]=="5") {
            array_push($char_tab, ["m","n","o"]);
        } elseif($num_tab[$i]=="6") {
            array_push($char_tab, ["p","q","r"]);
        } elseif($num_tab[$i]=="7") {
            array_push($char_tab, ["s","t","u"]);
        } elseif($num_tab[$i]=="8") {
            array_push($char_tab, ["v","w","x"]);
        } elseif($num_tab[$i]=="9") {
            array_push($char_tab, ["y","z"]);
        }
    }
    return $char_tab;
}

function trouver_tous_les_mots($code, $content) {
    $tableau = formater($code);
    
}