<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise</title>
</head>
<body>
    
    <?php

    $nome = $_POST['nome'];
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $media = ($n1 + $n2 + $n3) / 3;

    if ($media >= 7):
        $situacao = 'Aprovado';
    elseif ($media >= 5 and $media < 7):
        $situacao = 'Recuperação';
    else:
        $situacao = 'Reprovado';
    endif;

    ?>

    <table width= "100%" border= '1'>
        <tr><td colspan='4'> Nome do aluno: <?php echo $nome?></td></tr>
        <tr>
            <td>Notas: </td>
            <td>1ª nota: <?php echo $n1 ?></td>
            <td>2ª nota: <?php echo $n2 ?></td>
            <td>3ª nota: <?php echo $n3 ?></td>
        </tr>
        <tr>
            <td colspan= '2'>Média: <?php echo $media ?></td>
            <td colspan= '2'>Situação: <?php echo $situacao ?></td>
        </tr>
    </table>

</body>
</html>