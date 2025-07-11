<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <script src='main.js'></script>
</head>

<body>
    <?php
    echo '    <div class="container">';
    if (isset($_GET["nota1"]) && isset($_GET["nota2"]) && is_numeric($_GET["nota1"]) && is_numeric($_GET["nota2"])) {
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];

        if ($nota1 >= 0 && $nota1 <= 10 && $nota2 >= 0 && $nota2 <= 10) {
            $media = ($nota1 + $nota2) / 2;
            echo '<div class="resultado ';
            if ($media >= 7) {
                echo 'aprovado">';
                echo "A média das notas $nota1 e $nota2 é " . number_format($media, 2, ',', '.') . ".<br>";
                echo "Parabéns! Você foi APROVADO!";
            } else {
                echo 'reprovado">';
                echo "A média das notas $nota1 e $nota2 é " . number_format($media, 2, ',', '.') . ".<br>";
                echo "Você foi REPROVADO. Estude mais!";
            }
            echo '</div>';
        } else {
            echo '<div class="resultado erro">';
            echo "Por favor, digite notas válidas entre 0 e 10.";
            echo '</div>';
        }
    } else {
        echo '<div class="resultado erro">';
        echo "Por favor, digite duas notas válidas para calcular a média.";
        echo '</div>';
    }

    echo '<a href="index.html">Calcular Novamente</a>';
    echo '    </div>';
    ?>
</body>

</html>