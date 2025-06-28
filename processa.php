<?php
$nome = $_POST['nome'];
$whatsapp = $_POST['whatsapp'];

$total_geral = 0;
$blocos = ["cerebro" => 0, "coracao" => 0, "pulmao" => 0, "sangue" => 0];

$faixas = [
    "cerebro" => range(1, 14),
    "coracao" => range(15, 26),
    "pulmao" => range(27, 38),
    "sangue" => range(39, 52)
];

foreach ($_POST as $key => $value) {
    if (preg_match('/^q(\d+)$/', $key, $matches)) {
        $num = intval($matches[1]);
        $pontos = intval($value);
        $total_geral += $pontos;

        foreach ($faixas as $bloco => $perguntas) {
            if (in_array($num, $perguntas)) {
                $blocos[$bloco] += $pontos;
            }
        }
    }
}

function diagnostico($pontos, $max) {
    $percentual = ($pontos / $max) * 100;
    if ($percentual >= 70) return ["Saudável", "🟢"];
    if ($percentual >= 40) return ["Em alerta", "🟡"];
    return ["Crítico", "🔴"];
}

$maximos = ["cerebro" => 28, "coracao" => 24, "pulmao" => 24, "sangue" => 28];
$diagnosticos = [];
foreach ($blocos as $bloco => $pontos) {
    list($status, $icone) = diagnostico($pontos, $maximos[$bloco]);
    $diagnosticos[$bloco] = ["pontos" => $pontos, "status" => $status, "icone" => $icone];
}

// Status e mensagens por pontuação total
if ($total_geral >= 104) {
    $status_geral = ["Empresa no Controle", "🟢"];
    $mensagem_geral = "Sua empresa está no controle, ótimo sinal.<br><br>Agora é o momento certo para acelerar resultados e evoluir com ainda mais estratégia.<br><br>Em breve, entraremos em contato com um plano de mentoria e consultoria personalizado.";
    $frase_final = "💡<br>Negócios fortes não esperam o problema chegar, evoluem com intenção e ritmo acelerado.";
} elseif ($total_geral >= 70) {
    $status_geral = ["Empresa em Alerta", "🟡"];
    $mensagem_geral = "Sua empresa está em alerta, há pontos que precisam de atenção antes que se tornem críticos.<br><br>Em breve, entraremos em contato com um plano de mentoria e consultoria ajustado à sua realidade.";
    $frase_final = "💡<br>Este é o momento certo para agir e reverter o cenário.";
} else {
    $status_geral = ["Empresa em Nível Crítico", "🔴"];
    $mensagem_geral = "O diagnóstico mostra que a sua empresa precisa de intervenção urgente, mas também revela uma oportunidade de virar o jogo.<br><br>Vamos entrar em contato com um plano de mentoria e consultoria focado na recuperação.";
    $frase_final = "<font💡<br>Quanto mais rápido agir, maiores as chances de retomar o rumo com segurança.";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Check-up Empresarial</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fdfdfb;
            color: #000000;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .container {
            max-width: 650px;
            margin: 40px auto;
            background: #fff;
            padding: 0;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .topo {
            background-color: #1a1a1a;
            padding: 10px 0;
        }

        .topo img {
            height: 80px;
        }

        .titulo-header {
            background-color: #D4AF37;
            padding: 15px;
            font-weight: bold;
            font-size: 20px;
            color: #1c3553;
        }

        .status-geral {
            font-size: 22px;
            font-weight: bold;
            margin-top: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #1c3553;
        }

        .status-geral span {
            margin-right: 10px;
        }

        .mensagem {
            margin: 20px 30px;
            font-size: 16px;
            line-height: 1.5;
            color: #000000;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        .box-diagnostico {
            background: #1f1f1f;
            color: #fff;
            padding: 20px;
            text-align: center;
            margin: 20px 30px;
            border-radius: 10px;
        }

        .box-diagnostico ul {
            list-style: none;
            padding-left: 0;
            margin: 0 auto;
            display: inline-block;
            text-align: left;
        }

        .box-diagnostico li {
            margin-bottom: 10px;
            font-size: 16px;
        }

        .total {
            font-size: 18px;
            font-weight: bold;
            margin-top: 15px;
            color: #EAD84B;
        }

        p {
            font-size: 16px;
            color: #000000;
        }

        .frase-final {
            margin: 30px 30px 40px;
            font-weight: bold;
            font-size: 16px;
            color: #000000;
        }

        .espacamento-footer {
            height: 30px;
        }

        @media (max-width: 600px) {
            .container {
                width: 95%;
                margin: 20px auto;
                box-shadow: none;
                border-radius: 10px;
            }

            .topo img {
                height: 60px;
            }

            .titulo-header {
                font-size: 18px;
                padding: 12px;
            }

            .status-geral {
                font-size: 18px;
                margin-top: 15px;
                flex-direction: row;
                justify-content: center;
            }

            .mensagem, .frase-final {
                margin: 15px 20px;
                font-size: 15px;
            }

            .box-diagnostico {
                margin: 15px 20px;
                padding: 15px;
            }

            .box-diagnostico li {
                font-size: 15px;
                margin-bottom: 8px;
            }

            .total {
                font-size: 16px;
                text-align: center;
            }

            p {
                font-size: 15px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="topo">
        <img src="img/logo.png" alt="Logo">
    </div>

    <div class="titulo-header">Resultado do Check-up Empresarial</div>

    <div class="status-geral">
        <span><?= $status_geral[1] ?></span> <span><?= $status_geral[0] ?></span>
    </div>

    <p>Obrigado por preencher o Check-up Empresarial.</p>

    <div class="mensagem">
        <p><?= $mensagem_geral ?></p>
    </div>

    <div class="box-diagnostico">
        <ul>
            <li>🧠 <strong>CÉREBRO:</strong> <?= $diagnosticos['cerebro']['pontos'] ?> pontos – <?= $diagnosticos['cerebro']['icone'] ?> <?= $diagnosticos['cerebro']['status'] ?></li>
            <li>❤️ <strong>CORAÇÃO:</strong> <?= $diagnosticos['coracao']['pontos'] ?> pontos – <?= $diagnosticos['coracao']['icone'] ?> <?= $diagnosticos['coracao']['status'] ?></li>
            <li>💨 <strong>PULMÃO:</strong> <?= $diagnosticos['pulmao']['pontos'] ?> pontos – <?= $diagnosticos['pulmao']['icone'] ?> <?= $diagnosticos['pulmao']['status'] ?></li>
            <li>🩸 <strong>SANGUE:</strong> <?= $diagnosticos['sangue']['pontos'] ?> pontos – <?= $diagnosticos['sangue']['icone'] ?> <?= $diagnosticos['sangue']['status'] ?></li>
        </ul>
        <div class="total">Total Geral: <?= $total_geral ?> pontos</div>
    </div>

    <div class="frase-final"><?= $frase_final ?></div>

    <div class="espacamento-footer"></div>
</div>

</body>
</html>
