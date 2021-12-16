<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecionando...</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" type="imagex/png" href="http://www.clker.com/cliparts/B/t/2/T/7/O/search-icon-small-16x16.svg.med.png">
</head>
<body>
    <img src ="https://c.tenor.com/gF5waDlWTeIAAAAC/yjhcmovie-loading.gif">




<?php
include('banco.php');

$nome = (string) $_POST['nomeForm'];
$matricula = (string) $_POST['matriculaForm'];
$nota1 = (float) $_POST['nota1Form'];
$nota2 = (float) $_POST['nota2Form'];
$media = (float) ($nota1 + $nota2) / 2;

$sql = "INSERT INTO alunos(nome,matricula, nota1, nota2, media) VALUES ('$nome', '$matricula', '$nota1','$nota2', '$media')";
if (mysqli_query($conn, $sql)) {
    echo "<";
}else{
        echo "Um erro foi detectado"  . mysqli_error($conn); 

        echo "<script type = 'text/javascript'>
        setTimeout(function() {
            window.location.href = 'projetoweb.html';
    }, 1000);
    </script>";
}
mysqli_close($conn);
?>

<script type = "text/javascript">
setTimeout(function() {
    window.location.href = "lista.php";
}, 2000);

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

