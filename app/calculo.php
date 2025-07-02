<?php
function calcularDiagnostico($dados) {
    $total_geral = 0;
    $blocos = ["cerebro" => 0, "coracao" => 0, "pulmao" => 0, "sangue" => 0];
    $faixas = [
        "cerebro" => range(1, 14),
        "coracao" => range(15, 26),
        "pulmao" => range(27, 38),
        "sangue" => range(39, 52)
    ];

    foreach ($dados as $key => $value) {
        if (preg_match('/^q(\d+)$/', $key, $matches)) {
            $num = (int)$matches[1];
            $pontos = (int)$value;
            $total_geral += $pontos;

            foreach ($faixas as $bloco => $perguntas) {
                if (in_array($num, $perguntas)) {
                    $blocos[$bloco] += $pontos;
                }
            }
        }
    }

    $maximos = ["cerebro" => 28, "coracao" => 24, "pulmao" => 24, "sangue" => 28];
    $diagnosticos = [];
    foreach ($blocos as $bloco => $pontos) {
        $percentual = ($pontos / $maximos[$bloco]) * 100;
        if ($percentual >= 70) $status = ["Saudável", "🟢"];
        elseif ($percentual >= 40) $status = ["Em alerta", "🟡"];
        else $status = ["Crítico", "🔴"];
        $diagnosticos[$bloco] = ["pontos" => $pontos, "status" => $status[0], "icone" => $status[1]];
    }

    if ($total_geral >= 104) {
        $status_geral = ["Empresa no Controle", "🟢"];
        $mensagem = "Sua empresa está no controle, ótimo sinal.<br><br>Agora é o momento certo para acelerar resultados e evoluir com ainda mais estratégia.<br><br>Em breve, entraremos em contato com um plano de mentoria e consultoria personalizado.";
        $frase = "💡<br>Negócios fortes não esperam o problema chegar, evoluem com intenção e ritmo acelerado.";
    } elseif ($total_geral >= 70) {
        $status_geral = ["Empresa em Alerta", "🟡"];
        $mensagem = "Sua empresa está em alerta, há pontos que precisam de atenção antes que se tornem críticos.<br><br>Em breve, entraremos em contato com um plano de mentoria e consultoria ajustado à sua realidade.";
        $frase = "💡<br>Este é o momento certo para agir e reverter o cenário.";
    } else {
        $status_geral = ["Empresa em Nível Crítico", "🔴"];
        $mensagem = "O diagnóstico mostra que a sua empresa precisa de intervenção urgente, mas também revela uma oportunidade de virar o jogo.<br><br>Vamos entrar em contato com um plano de mentoria e consultoria focado na recuperação.";
        $frase = "💡<br>Quanto mais rápido agir, maiores as chances de retomar o rumo com segurança.";
    }

    return [
        'total' => $total_geral,
        'diagnosticos' => $diagnosticos,
        'status' => $status_geral,
        'mensagem' => $mensagem,
        'frase' => $frase,
    ];
}
