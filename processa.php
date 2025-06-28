<?php
function somarRespostas($inicio, $fim) {
    $soma = 0;
    for ($i = $inicio; $i <= $fim; $i++) {
        $key = 'q' . $i;
        if (isset($_POST[$key])) {
            $soma += intval($_POST[$key]);
        }
    }
    return $soma;
}

$nome = $_POST['nome'] ?? 'Não informado';
$whatsapp = $_POST['whatsapp'] ?? 'Não informado';

$pontos_cerebro = somarRespostas(1, 14);
$pontos_coracao = somarRespostas(15, 27);
$pontos_pulmao  = somarRespostas(28, 39);
$pontos_sangue  = somarRespostas(40, 52);

$total_geral = $pontos_cerebro + $pontos_coracao + $pontos_pulmao + $pontos_sangue;

function diagnosticoBloco($pontos, $maximo) {
    if ($pontos >= $maximo * 0.8) return "🟢 Saudável";
    if ($pontos >= $maximo * 0.5) return "🟡 Em alerta";
    return "🔴 Crítico";
}

$diag_cerebro = diagnosticoBloco($pontos_cerebro, 28);
$diag_coracao = diagnosticoBloco($pontos_coracao, 26);
$diag_pulmao  = diagnosticoBloco($pontos_pulmao, 24);
$diag_sangue  = diagnosticoBloco($pontos_sangue, 26);

if ($total_geral >= 85) {
    $resultado_geral = "🟢 Empresa no controle";
    $mensagem_final = "Obrigado por preencher o Check-up Empresarial.\n\nSua empresa está no controle, ótimo sinal. Agora é o momento certo para acelerar resultados e evoluir com ainda mais estratégia.\n\nEm breve, entraremos em contato com um plano de mentoria e consultoria personalizado.\n\n💡 Negócios fortes não esperam o problema chegar, evoluem com intenção e ritmo acelerado.";
} elseif ($total_geral >= 50) {
    $resultado_geral = "🟡 Empresa em alerta";
    $mensagem_final = "Obrigado por preencher o Check-up Empresarial.\n\nSua empresa está em alerta, há pontos que precisam de atenção antes que se tornem críticos.\n\nEm breve, entraremos em contato com um plano de mentoria e consultoria ajustado à sua realidade.\n\n💡 Este é o momento certo para agir e reverter o cenário.";
} else {
    $resultado_geral = "🔴 Empresa em colapso";
    $mensagem_final = "Obrigado por preencher o Check-up Empresarial.\n\nO diagnóstico mostra que a sua empresa precisa de intervenção urgente, mas também revela uma oportunidade de virar o jogo.\n\nVamos entrar em contato com um plano de mentoria e consultoria focado na recuperação.\n\n💡 Quanto mais rápido agir, maiores as chances de retomar o rumo com segurança.";
}

// Deixa a frase com 💡 em negrito
$mensagem_formatada = preg_replace('/(💡.*)/', '<strong>$1</strong>', nl2br($mensagem_final));

// Envio por e-mail
$destinatario = "inleandrodesign@gmail.com";
$assunto = "Nova resposta do Check-up Empresarial Profundo";

$mensagem = "Nome: $nome\n";
$mensagem .= "WhatsApp: $whatsapp\n\n";
$mensagem .= "Pontuação por bloco:\n";
$mensagem .= "🧠 CÉREBRO: $pontos_cerebro – $diag_cerebro\n";
$mensagem .= "❤️ CORAÇÃO: $pontos_coracao – $diag_coracao\n";
$mensagem .= "💨 PULMÃO: $pontos_pulmao – $diag_pulmao\n";
$mensagem .= "🩸 SANGUE: $pontos_sangue – $diag_sangue\n\n";
$mensagem .= "TOTAL: $total_geral pontos\n";
$mensagem .= "Diagnóstico Final: $resultado_geral\n\n";
$mensagem .= "Mensagem Final:\n$mensagem_final";

$headers = "From: no-reply@seudominio.com";
mail($destinatario, $assunto, $mensagem, $headers);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Check-up Empresarial</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #FDFDFB;
            color: #1C3553;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .conteudo {
            background-color: white;
            border: 1px solid #eee;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
            max-width: 600px;
            width: 90%;
        }

        .logo img {
            height: 120px;
            margin-bottom: 25px;
        }

        h1 {
            background-color: #EADCA6;
            padding: 15px;
            border-radius: 8px;
            font-size: 22px;
        }

        .resultado-geral {
            font-size: 1.6em;
            font-weight: bold;
            margin: 25px 0 10px;
        }

        .mensagem {
            color: #555;
            font-size: 15px;
            margin-bottom: 25px;
            white-space: pre-wrap;
            text-align: center;
        }

        .blocos {
            margin-top: 20px;
        }

        .blocos p {
            margin: 8px 0;
            font-size: 16px;
        }

        .pontuacao-total {
            font-size: 20px;
            font-weight: bold;
            margin-top: 25px;
            color: #1C3553;
        }

        /* MEDIA QUERY PARA MOBILE */
        @media (max-width: 600px) {
            .conteudo {
                padding: 30px;
            }

            .logo img {
                height: 140px;
            }

            h1 {
                font-size: 24px;
            }

            .resultado-geral {
                font-size: 1.8em;
            }

            .mensagem {
                font-size: 17px;
            }

            .blocos p {
                font-size: 18px;
            }

            .pontuacao-total {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>
    <div class="conteudo">
        <div class="logo">
            <img src="img/logo.png" alt="Logo">
        </div>

        <h1>Resultado do Check-up Empresarial</h1>

        <div class="resultado-geral"><?php echo $resultado_geral; ?></div>

        <div class="mensagem">
            <?php echo $mensagem_formatada; ?>
        </div>

        <div class="blocos">
            <p><strong>🧠 CÉREBRO:</strong> <?php echo "$pontos_cerebro pontos – $diag_cerebro"; ?></p>
            <p><strong>❤️ CORAÇÃO:</strong> <?php echo "$pontos_coracao pontos – $diag_coracao"; ?></p>
            <p><strong>💨 PULMÃO:</strong> <?php echo "$pontos_pulmao pontos – $diag_pulmao"; ?></p>
            <p><strong>🩸 SANGUE:</strong> <?php echo "$pontos_sangue pontos – $diag_sangue"; ?></p>
        </div>

        <div class="pontuacao-total">
            Total Geral: <?php echo "$total_geral pontos"; ?>
        </div>
    </div>
</body>
</html>
