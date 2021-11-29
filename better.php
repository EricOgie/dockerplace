<?php
// This solution gives a time complexity of O(a + b + c) which in the sense of n, could be rounded up to O(n)
function cleanup(array $va): array
{
    $b = [];
    foreach ($va as $key => $a) {
        if ($va[$key] != "" && $va[$key] != "-" && $va[$key] != "N/A") {
            $b[$key] = $a;
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

if ($arr["age"] === "" || $arr["age"] === "-" || $arr["age"] === "N/A" || $arr["age"] === null) {
    unset($arr["age"]);
}

if ($arr["DOB"] === "" || $arr["DOB"] === "-" || $arr["DOB"] === "N/A" || $arr["DOB"] === null) {
    unset($arr["DOB"]);
}


$arr["name"] = cleanup($arr["name"]);
$arr["hobbies"] = cleanup($arr["hobbies"]);
$arr["education"] = cleanup($arr["education"]);

print_r(json_encode($arr));
