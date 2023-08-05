<?php
function wordFrequency($strings) {
    $wordFrequency = [];

    foreach ($strings as $word) {

        $word = strtolower(trim($word));


        if (isset($wordFrequency[$word])) {
            $wordFrequency[$word]++;
        } else {
            $wordFrequency[$word] = 1;
        }
    }

    return json_encode($wordFrequency);
}

$input = ["apple", "banana", "Apple", "orange", "banana", "apple",];
$output = wordFrequency($input);
echo $output;

?>