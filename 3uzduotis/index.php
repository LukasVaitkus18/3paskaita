
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 užduotis</title>

</head>
<body>



       

        
        <form method="post" action="index.php">
            <input name="vardas" type="text" placeholder="Vardas">
            <input type="password" name="slaptazodis" placeholder="Slaptazodis">
            <button type="submit" name="prisijungti">Prisijungti</button>
        </form>    

    </div>
   

    <?php 
   
    if(isset($_POST["prisijungti"])) {
        $vardas = $_POST["vardas"];
        $slaptazodis = $_POST["slaptazodis"];

        $Vardas = "admin";
        $Slaptazodis = "123456";
    

        if($vardas == $Vardas && $slaptazodis == $Slaptazodis) {
          echo "<h1>Prisijungėte sėkmingai</h1>";
        } else {
               echo "<h1>Įvesti duomenys neteisingi</h1>";

        }

    }
    
    ?>


</body>
</html>