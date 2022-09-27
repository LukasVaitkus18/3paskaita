<?php 


$skaicius1 = $_GET["skaicius1"];
$skaicius2 = $_GET["skaicius2"];

$simbolis= $_GET["simbolis"];

$rezultatas = 0;
if($simbolis == "+")
{
    $rezultatas = $skaicius1 + $skaicius2;
}
else if($simbolis == "-")
{
    $rezultatas = $skaicius1 - $skaicius2;
} 
else if($simbolis == "*")
{
    $rezultatas = $skaicius1 * $skaicius2;
} else if($simbolis == "/")
{
    $rezultatas = $skaicius1 / $skaicius2;
} 


echo "<div>Rezultatas: $rezultatas</div>";


?>

