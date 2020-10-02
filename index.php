<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in GET con tre *. -->
<?php
    $parolaccia = $_GET["parolaccia"];
    if(strlen($parolaccia) == 0){
        $parolaccia = "parolaccia";
    }
    $paragrafo = $parolaccia . ", questa è una parolaccia!!";
    $paragrafoNuovo = str_replace($parolaccia ,"***", $paragrafo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Parolaccia</title>
</head>
<body>
    <h1><?php echo $parolaccia; ?></h1>   
    <h1><?php echo $paragrafoNuovo; ?></h1>   
</body>
</html>