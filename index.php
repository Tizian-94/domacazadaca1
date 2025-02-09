<!-- Php operatori - vjezba -->
<?php
$a = 1;
$b = 2;
$c = '3';
$d = '4';

echo $a + $b;
echo $a - $b;
echo $a * $b;
echo $a / $b;
echo $a % $b;

$f = $c.$d;

echo $a += $b; //echo $a *= $b; //echo $a /= $b; //echo $a %= $b;
var_dump($a > $b); //var_dump($a < $b); //var_dump($a == $b); //var_dump($a != $b); //var_dump($a === $b); //var_dump($a !== $b);
echo $a++; //echo ++$a; //echo $a--; //echo --$a;
echo $b--; //echo --$b; //echo $b++; //echo ++$b;
?>

<!-- Php nizovi - vjezba -->
<?php
$primeNumbers = [1,2,3,5,7,11];

if (isset($primeNumbers[3])){
    var_dump($primeNumbers[3]);
}else{
    var_dump('[3] in $primeNumbers does not exist');
}

array_push($primeNumbers, 13);

$array_num = count($primeNumbers);
print_r($array_num.'<br>'.$primeNumbers);

var_dump(rsort($primeNumbers));
?>

<!-- Php nizovi - vjezba 2 -->
<?php
$users = [
    [
        'ime' => 'Josepi',
        'prezime' => 'Krakowsky',
        'godine' => 49,
        'spol' => ['helikopter', 'muski']
    ],
    [
        'ime' => 'Ivana',
        'prezime' => 'Horvat',
        'godine' => 23,
        'spol' => 'APEX Toyota Corolla 1986 TwinCam GT86 Trueno'
    ]
];

print_r($users);

unset($users[0]['spol'], $users[1]['spol']);

array_push($users,['ime' => 'Momcilo', 'prezime' => 'Boban', 'godine' => 87]);
print_r($users);
?>

<!-- Php kontrolne strukture - vjezba 1 -->
<?php
$a = 5;
$b = 10;
$c = 15;

if (($a > $b) && ($b < $c) || ($a < $b) && ($b > $c)){
    print_r('b is between a and c');
}else{
    print_r('b is not between a and c');
}

$danUTjednu = date('l');

switch($danUTjednu):
    case 'Monday':
        echo('Ponedijeljak');
        break;
    case 'Tuesday':
        echo('Utorak');
        break;
    case 'Wednesday':
        echo('It is Srijeda my dudes');
        break;
    case 'Thursday':
        echo('Cetvrtak');
        break;
    case 'Friday':
        echo('Petak');
        break;
    default:
        echo('Vikend');
        break;
    endswitch;
?>

<!-- PHP petlje -vjezba 1 -->
 <?php
 $i = 0;

 while($i <= 10){
    echo $i;
    $i++;
 }

 for($n = 0; $n <= 100; $n++){
    echo($n);
 }
 ?>
 <!-- PHP petlje - vjezba 2 -->
<?php
$names = ['ime1', 'ime2', 'ime3', 'ime4', 'ime5'];

foreach($names as $name){
    print_r($name);
}

$keyNames = [
    $kljuc1 => 'vrijednost1',
    $kljuc2 => 'vrijednost2',
    $kljuc3 => 'vrijednost3',
    $kljuc4 => 'vrijednost4',
    $kljuc5 => 'vrijednost5'
];

foreach($keyNames as $key => $vrijednost){
    echo($key." -> ".$vrijednost);
}
?>
