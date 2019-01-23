<?php

$array = [
    'name' => 'ridwan',
    'age' => 21,
];

$array['name'] = 'Abdullah';
$array['location'] = 'KL';

$arr = [
    'gaggaa',
    'shshhs',
    277181,
    82828
];

$arr[3] = 2123;

echo json_encode($array);

echo "<br>";

for ($i=0; $i < count($arr); $i++) { 
    # code...
    echo $arr[$i]."<br>";
}

$multiDimensionalArray = [
    [
        'name' => 'ridwan',
        'age' => 21,
    ],
    [
        "name" => "bucky",
        'age' => "22"
    ],
    [
        'name' => 'ridwan1',
        'age' => 21,
    ],
    [
        "name" => "bucky1",
        'age' => "22"
    ]
];

echo $multiDimensionalArray[1]["name"];
echo "<br>";
$multiDimensionalArrayKey = [
   "user_1" => [
        'name' => 'ridwan',
        'age' => 21,
    ],
   "user_2" => [
        "name" => "bucky",
        'age' => "22"
    ]
];

echo $multiDimensionalArrayKey["user_1"]["name"];

for ($i=1; $i < count($multiDimensionalArray) ; $i++) { 
    # code...
    echo "<br><br>";
    echo $multiDimensionalArray[$i]['name'];
    echo $multiDimensionalArray[$i]['age'];

}
echo "<br><br>";
foreach ($multiDimensionalArrayKey as $key => $value) {
    # code...

    echo "KEY :".$key." , Name :".$value['name']." , Age: ".$value['age']."<br>"  ;

}