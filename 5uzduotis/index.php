<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5  užduotis</title>

    <?php 
    if(isset($_POST["spalva"])) {
        $spalva = $_POST["spalva"];
        
        
      
            if($spalva == "juoda") {
                $spalva = "black";
            } else if($spalva == "melyna") {
                $spalva = "blue";
            } else if($spalva == "raudona") {
                $spalva = "red";
            } else 
            {
                $spalva = "white";
            }
         }
        
    ?>

    <style>
        body {
            background-color: <?php echo $spalva ?>;
        }
    </style>
</head>
<body>

        <form action="index.php" method="post">
            <input type="text" name="spalva">
            <button type="submit" name="nudazyk">Nudazyk</button>
        </form>
</body>
</html>


