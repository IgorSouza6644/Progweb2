<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<form action="#" method="post">
    <input type="number"name="elefantes">
    <input type="submit"value="Enviar"name="enviar">
</form>

<?php
if(isset($_POST['enviar'])) {
    for ($i = 1; $i <= $_POST['elefantes']; $i++) {
        echo $i . "Um elefante incomoda muita gente<br>";
        if (($i % 2) != 0) {
            echo $i ."Incomodam muita gente<br>";
        else{
                echo $i . "elefantes";
                }
                for ($e = 1; $e<=$i;$e++){
                    echo "incomodam";
                }
                echo "Muito mais<br>";

            }


        }
    }

?>

</body>
</html>

