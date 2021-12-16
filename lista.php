<?php
include('banco.php');

$sql2 = "SELECT * FROM escola.alunos ORDER BY id";

$result = $conn->query($sql2);

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="background.css">
    <link rel="shortcut icon" type="imagex/png" href="http://www.clker.com/cliparts/B/t/2/T/7/O/search-icon-small-16x16.svg.med.png">

    <title>Lista dos alunos registrados</title>
</head>

<body>

    <div>
        <table class="table table-striped table-light">
            <thead>
                <tr>
                    <th scope="col">Nome do aluno</th>
                    <th scope="col">RGM(Matrícula do aluno)</th>
                    <th scope="col">Primeira nota</th>
                    <th scope="col">Segunda nota</th>
                    <th scope="col">Média do aluno</th>
                    <th scope="col">Remover cadastro</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['nome'] . "</td>";
                    echo "<td>" . $row['matricula'] . "</td>";
                    echo "<td>" . $row['nota1'] . "</td>";
                    echo "<td>" . $row['nota2'] . "</td>";
                    echo "<td>" . $row['media'] . "</td>";
                    echo "<td> <a class='btn btn-sm btn-danger' href='remover.php?matricula=$row[matricula]' title='Remover'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                            </a> </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

</body>

</html>