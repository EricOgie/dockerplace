<?php

// This is a bute force approach. It time time complexity
// can be likened to O(n^2)
function cleanup(array $va): array
{
    $b = [];
    foreach ($va as $key => $v) {
        $mKey = $key;

        if (gettype($v) != "array") {
            if ($v != "" && $v != "-" && $v != "N/A" && $v = " ") {
                $b[$key] = $va[$key];
            }
        } else {
            foreach ($va[$mKey] as $k => $sub) {

                if ($va[$mKey][$k] != "" && $va[$mKey][$k] != "-" && $va[$mKey][$k] != "N/A") {
                    $b[$mKey][$k] = $sub;
                }
            }
        }
    }

    return $b;
}

$ch = curl_init('https://coderbyte.com/api/challenges/json/json-cleaning');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
$data = curl_exec($ch);
curl_close($ch);
$arr = json_decode($data, true);

print_r(json_encode(cleanup($arr)));
