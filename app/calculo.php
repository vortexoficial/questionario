<?php
function calcularPontuacao($respostas) {
    $pontuacao = 0;

    foreach ($respostas as $resposta) {
        $pontuacao += (int)$resposta;
    }

    return $pontuacao;
}

function gerarDiagnostico($pontuacao) {
    if ($pontuacao >= 77 && $pontuacao <= 96) {
        return [
            'cor' => '🟢',
            'situacao' => 'Empresa SAUDÁVEL',
            'classificacao' => 'Evolução Estratégica',
            'mensagem' => "Parabéns por realizar o Check-up Empresarial!\n\nSua empresa está bem posicionada. Agora é o momento ideal para fortalecer a gestão e crescer com mais clareza e segurança.\n\n📌 Com base nas suas respostas, você receberá uma proposta personalizada para evoluir com decisões mais estratégicas.\n\nEssa proposta faz parte do nosso Programa de Mentoria + Consultoria Estratégica, feito para empresários focados em crescimento inteligente.\n\n👉 Seu próximo salto começa com um passo estratégico."
        ];
    } elseif ($pontuacao >= 50 && $pontuacao <= 76) {
        return [
            'cor' => '🟡',
            'situacao' => 'Empresa EM ALERTA',
            'classificacao' => 'Ajuste',
            'mensagem' => "Parabéns por realizar o Check-up Empresarial!\n\nSua empresa apresenta sinais de alerta. Este é o momento certo para reorganizar a gestão e retomar o controle.\n\n📌 Com base nas suas respostas, você receberá uma proposta personalizada para estabilizar e preparar o negócio para crescer com mais segurança.\n\nEssa proposta integra o nosso Programa de Mentoria + Consultoria Estratégica, ideal para empresários que querem agir com firmeza.\n\n👉 Ignorar os sinais hoje pode custar caro amanhã."
        ];
    } else {
        return [
            'cor' => '🔴',
            'situacao' => 'Empresa EM NÍVEL CRÍTICO',
            'classificacao' => 'Reestruturação',
            'mensagem' => "Parabéns por realizar o Check-up Empresarial!\n\nSua empresa enfrenta desafios sérios, mas com a implementação de uma estratégia certa e orientação especializada, é possível reverter a situação e retomar o crescimento de forma sustentável.\n\n📌 Com base nas suas respostas, você receberá uma proposta direcionada para reorganizar a gestão, recuperar resultados e reconstruir com apoio estratégico.\n\nEssa proposta faz parte do nosso Programa de Mentoria + Consultoria Estratégica, feito para empresários prontos para virar o jogo.\n\n👉 Toda virada começa com uma decisão bem acompanhada."
        ];
    }
}
