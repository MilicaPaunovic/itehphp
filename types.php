<?php

$types[] = 'Hair Salon';
$types[] = 'Nail Salon';
$types[] = 'Spa';
$types[] = 'Massage Salon';


$query = $_REQUEST['query'];
$suggestion = "";  // responseText

if ($query !== "") {
    $query = strtolower($query);
    $length = strlen($query);

    foreach ($types as $type) {
        if (stristr($query, substr($type, 0, $length))) {
            if ($suggestion == "") {
                $suggestion = $type;
            } else {
                $suggestion .= ", $type";
            }
        }
    }
}
if ($suggestion == "") {
    echo 'No suggestions';
} else {
    echo $suggestion;
}
