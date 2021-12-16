<?php

    if(!empty($_GET['matricula']))
    {
        include_once('banco.php');

        $matricula = $_GET['matricula'];

        $sqlSelect = "SELECT * FROM escola.alunos WHERE matricula=$matricula";

        $result = $conn->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM escola.alunos WHERE matricula=$matricula";
            $resultDelete = $conn->query($sqlDelete);
        }
    }
    header('Location: lista.php');
?>