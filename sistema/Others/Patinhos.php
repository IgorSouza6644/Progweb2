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
    <input type="number"name="patinhos">
    <input type="submit"value="Enviar"name="enviar">
</form>

<?php
if(isset($_POST['enviar'])) {
for($i=$_POST['patinhos'];$i>=1;$i--){
    echo $i."Patinhos foram passear<br>";
    echo "Além das montanhas para brincar<br>";
    echo "A mamãe fez quá quá quá<br>";
    if($i==1){
        echo "Mas nenhum patinho voltou de lá<br>";
    }else{
        echo "Mas somente".($i-1)."patinhos voltaram de lá<br><br>";
        }
    }
}
?>

</body>
</html>




