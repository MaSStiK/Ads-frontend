<?php

$a = 1;
$b = 2;

if ($a > 5) {
    echo $a;
}
else if ($b <= 2) {
    echo $b;
}
else {
    echo 'Не баг а фича';
}

$a = false;
if (!$a) {
    echo '<br>лож<br>';
}
else {
    echo '<br>истина<br>';
}

$color = array(
    'black' => '#000000',
    'white' => '#FFFFFF',
    'gray' => '#F0F0F0',
    'total' => 3
);

$color['array'] = [];
$color['array'][] = 12;
$color['array'][] = 15;

print_r($color);

echo $color['array'][1];
echo $color['black'];

$object = (object) [
    'gg' => 'nb',
    'rl' => 'yp'
];

$object -> rl = "yeap, that realy";

print_r($object -> gg . '<br>');
echo $object -> rl . '<br>';

$ez_array = array(1,13,83,21,8,48,484);
echo count($ez_array);

for ($i = 0; $i < count($ez_array); $i++) {
    echo $ez_array[$i] . '|';
}

foreach ($ez_array as $key => $value) {
    echo $key . '=>' . $value . '; ';
}

foreach ($ez_array as $value) {
    echo $value . ';<br>';
}