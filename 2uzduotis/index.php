<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 užduotis</title>
</head>

<?php 

    if(isset($_GET["sudeti"])) {



        $skaitiklis1 = intval($_GET['skaitiklis1']);
        $vardiklis1 = intval($_GET['vardiklis1']);

        $skaitiklis2 = intval($_GET['skaitiklis2']);
        $vardiklis2 = intval($_GET['vardiklis2']);


        
        if($skaitiklis1 == false || $vardiklis1 == false || $skaitiklis2 == false || $vardiklis2 ==false ) 
        {
            $rezultats = "Kazkuris is kintamju nera sveikasis skaicius";
        } else {

            $bendrasVardiklis = $vardiklis1 * $vardiklis2; 
            $skaitiklis1 = $skaitiklis1 * $vardiklis2; 
            $skaitiklis2 = $skaitiklis2 * $vardiklis1;  
            
            $vardiklis1 = $bendrasVardiklis;
            $vardiklis2 = $bendrasVardiklis;

            
            $sumSkaitiklis = $skaitiklis1 + $skaitiklis2;
            $sumVardiklis = $bendrasVardiklis;
          
            $sveikojiDalis = intval($sumSkaitiklis/$sumVardiklis);
            $sumSkaitiklis = $sumSkaitiklis % $sumVardiklis;
            
            $rezultats = $sveikojiDalis." ".$sumSkaitiklis."/".$sumVardiklis;
        }
    }


?>
<body>
    <form method="get" action="index.php">
        <input type="number" name="skaitiklis1" placeholder="pirmo sk. skaitiklis" style="background-color: lightgreen">
        <input type="number" name="vardiklis1" placeholder="pirmo sk. vardiklis" style="background-color: lightgreen">
        <input type="number" name="skaitiklis2" placeholder="antro sk. skaitiklis" style="background-color: yellow">
        <input type="number" name="vardiklis2" placeholder="antro sk. vardiklis" style="background-color: yellow">
        <button type="submit" name="sudeti">Sudeti</button>
    </form>

    <?php 
    
    if(isset($_GET["sudeti"])) {
       echo  "<div>Rezultatas:$rezultats</div>";
    }
    ?>
</body>
</html>