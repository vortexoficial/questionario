<?php
// Receber as respostas
$q1 = isset($_POST['q1']) ? intval($_POST['q1']) : 0;
$q2 = isset($_POST['q2']) ? intval($_POST['q2']) : 0;
$q3 = isset($_POST['q3']) ? intval($_POST['q3']) : 0;

$total = $q1 + $q2 + $q3;

// Definir resultado com base na pontuação
if ($total >= 6) {
    $resultado = "🎉 Nível Alto (6 pontos ou mais)";
} elseif ($total >= 3) {
    $resultado = "🔔 Nível Médio (3 a 5 pontos)";
} else {
    $resultado = "⭐ Nível Baixo (0 a 2 pontos)";
}

// Enviar por e-mail para você
$destinatario = "inleandrodesign@gmail.com"; // <-- Coloque seu e-mail real aqui
$assunto = "Nova resposta do Questionário";
$mensagem = "Respostas do cliente:\n\n";
$mensagem .= "Pergunta 1: $q1 pontos\n";
$mensagem .= "Pergunta 2: $q2 pontos\n";
$mensagem .= "Pergunta 3: $q3 pontos\n";
$mensagem .= "Total de pontos: $total\n";
$mensagem .= "Resultado: $resultado\n";

$headers = "From: no-reply@seudominio.com";

// Enviar email
mail($destinatario, $assunto, $mensagem, $headers);

// Exibir resultado pro cliente
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Questionário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #FDFDFB; /* tom de branco sujo */
            color: #1C3553; /* azul escuro para texto principal */
            padding: 50px;
        }
        .header {
            background-color: #EADCA6; /* tom dourado/amarelo areia */
            padding: 20px;
            margin-bottom: 30px;
        }
        h1 {
            font-size: 28px;
            margin: 0;
        }
        .resultado {
            font-size: 1.5em;
            font-weight: bold;
            color: #1C3553;
            margin-top: 20px;
        }
        .mensagem {
            font-size: 1em;
            color: #666;
            margin-top: 10px;
        }
        .icone {
            font-size: 50px;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>Bônus da Formação</h1>
    </div>

    <div class="resultado">
        <?php echo $resultado; ?>
    </div>

    <div class="mensagem">
        Obrigado por responder ao questionário!<br>
        Em breve nossa equipe entrará em contato.
    </div>

</body>
</html>
